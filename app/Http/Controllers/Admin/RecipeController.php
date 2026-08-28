<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class RecipeController extends Controller
{
    /**
     * Menampilkan semua resep
     */
    public function index(Request $request)
    {
        $query = Recipe::with('user')
            ->latest();

        /*
        |--------------------------------------------------------------------------
        | FILTER RESEP HARI INI
        |--------------------------------------------------------------------------
        */

        if ($request->filled('today')) {
            $query->whereDate('created_at', today());
        }

        /*
        |--------------------------------------------------------------------------
        | PENCARIAN
        |--------------------------------------------------------------------------
        */

        if ($request->filled('search')) {
            $search = $request->search;

            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', '%' . $search . '%')
                    ->orWhereHas('user', function ($userQuery) use ($search) {
                        $userQuery->where('name', 'like', '%' . $search . '%');
                    });
            });
        }

        $recipes = $query
            ->paginate(10)
            ->withQueryString();

        return view(
            'admin.recipes.index',
            compact('recipes')
        );
    }


    /**
     * Menampilkan detail resep
     */
    public function show(Recipe $recipe)
    {
        $recipe->load('user');

        return view(
            'admin.recipes.show',
            compact('recipe')
        );
    }


    /**
     * Menampilkan form edit resep
     */
    public function edit(Recipe $recipe)
    {
        return view(
            'admin.recipes.edit',
            compact('recipe')
        );
    }


    /**
     * Memperbarui resep
     */
    public function update(Request $request, Recipe $recipe)
    {
        $validated = $request->validate([
            'title' => [
                'required',
                'string',
                'max:255',
            ],

            'ingredients' => [
                'required',
                'string',
            ],

            'steps' => [
                'required',
                'string',
            ],

            'image' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:2048',
            ],
        ]);


        /*
        |--------------------------------------------------------------------------
        | SLUG
        |--------------------------------------------------------------------------
        */

        $slug = Str::slug($validated['title']);

        $originalSlug = $slug;
        $counter = 1;

        while (
            Recipe::where('slug', $slug)
                ->where('id', '!=', $recipe->id)
                ->exists()
        ) {
            $slug = $originalSlug . '-' . $counter;

            $counter++;
        }


        /*
        |--------------------------------------------------------------------------
        | GAMBAR
        |--------------------------------------------------------------------------
        */

        $imagePath = $recipe->image;

        if ($request->hasFile('image')) {

            /*
            | Hapus gambar lama jika merupakan file lokal
            */

            if (
                $recipe->image &&
                !str_starts_with($recipe->image, 'http://') &&
                !str_starts_with($recipe->image, 'https://')
            ) {
                Storage::disk('public')->delete(
                    $recipe->image
                );
            }


            /*
            | Simpan gambar baru
            */

            $imagePath = $request
                ->file('image')
                ->store('recipes', 'public');
        }


        /*
        |--------------------------------------------------------------------------
        | UPDATE DATA
        |--------------------------------------------------------------------------
        */

        $recipe->update([
            'title' => $validated['title'],
            'slug' => $slug,
            'ingredients' => $validated['ingredients'],
            'steps' => $validated['steps'],
            'image' => $imagePath,
        ]);


        return redirect()
            ->route(
                'admin.recipes.show',
                $recipe
            )
            ->with(
                'success',
                'Resep berhasil diperbarui.'
            );
    }


    /**
     * Menghapus resep
     */
    public function destroy(Recipe $recipe)
    {
        /*
        |--------------------------------------------------------------------------
        | HAPUS GAMBAR
        |--------------------------------------------------------------------------
        */

        if (
            $recipe->image &&
            !str_starts_with($recipe->image, 'http://') &&
            !str_starts_with($recipe->image, 'https://')
        ) {
            Storage::disk('public')->delete(
                $recipe->image
            );
        }


        /*
        |--------------------------------------------------------------------------
        | HAPUS RESEP
        |--------------------------------------------------------------------------
        */

        $recipe->delete();


        return redirect()
            ->route('admin.recipes.index')
            ->with(
                'success',
                'Resep berhasil dihapus.'
            );
    }
}