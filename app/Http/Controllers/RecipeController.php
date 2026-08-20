<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RecipeController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | DAFTAR RESEP
    |--------------------------------------------------------------------------
    */

    public function index(Request $request)
    {
        $search = $request->input('search');

        $recipes = Recipe::with('user')
            ->when($search, function ($query) use ($search) {
                $query->where('title', 'like', '%' . $search . '%');
            })
            ->latest()
            ->paginate(9)
            ->withQueryString();

        return view('recipes.index', compact('recipes'));
    }


    /*
    |--------------------------------------------------------------------------
    | DETAIL RESEP
    |--------------------------------------------------------------------------
    */

    public function show($slug)
    {
        $recipe = Recipe::with('user')
            ->where('slug', $slug)
            ->firstOrFail();

        return view('recipes.show', compact('recipe'));
    }


    /*
    |--------------------------------------------------------------------------
    | FORM TAMBAH RESEP
    |--------------------------------------------------------------------------
    */

    public function create()
    {
        return view('recipes.create');
    }


    /*
    |--------------------------------------------------------------------------
    | SIMPAN RESEP
    |--------------------------------------------------------------------------
    */

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'ingredients' => 'required|string',
            'steps' => 'required|string',
            'image' => 'nullable|string|max:1000',
        ]);


        $slug = Str::slug($validated['title']);

        $originalSlug = $slug;
        $counter = 1;

        while (Recipe::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }


        Recipe::create([
            'user_id' => auth()->id(),
            'title' => $validated['title'],
            'slug' => $slug,
            'ingredients' => $validated['ingredients'],
            'steps' => $validated['steps'],
            'image' => $validated['image'] ?? null,
        ]);


        return redirect()
            ->route('user.recipes')
            ->with('success', 'Resep berhasil ditambahkan.');
    }


    /*
    |--------------------------------------------------------------------------
    | FORM EDIT RESEP
    |--------------------------------------------------------------------------
    */

    public function edit($slug)
    {
        $recipe = Recipe::where('slug', $slug)
            ->firstOrFail();


        /*
        | User hanya boleh edit resep miliknya sendiri.
        */

        if ($recipe->user_id !== auth()->id()) {
            abort(403, 'Kamu tidak memiliki izin untuk mengedit resep ini.');
        }


        return view('recipes.edit', compact('recipe'));
    }


    /*
    |--------------------------------------------------------------------------
    | UPDATE RESEP
    |--------------------------------------------------------------------------
    */

    public function update(Request $request, $slug)
    {
        $recipe = Recipe::where('slug', $slug)
            ->firstOrFail();


        /*
        | User hanya boleh update resep miliknya sendiri.
        */

        if ($recipe->user_id !== auth()->id()) {
            abort(403, 'Kamu tidak memiliki izin untuk mengubah resep ini.');
        }


        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'ingredients' => 'required|string',
            'steps' => 'required|string',
            'image' => 'nullable|string|max:1000',
        ]);


        $newSlug = Str::slug($validated['title']);


        if ($newSlug !== $recipe->slug) {

            $originalSlug = $newSlug;
            $counter = 1;

            while (
                Recipe::where('slug', $newSlug)
                    ->where('id', '!=', $recipe->id)
                    ->exists()
            ) {
                $newSlug = $originalSlug . '-' . $counter;
                $counter++;
            }

        } else {
            $newSlug = $recipe->slug;
        }


        $recipe->update([
            'title' => $validated['title'],
            'slug' => $newSlug,
            'ingredients' => $validated['ingredients'],
            'steps' => $validated['steps'],
            'image' => $validated['image'] ?? null,
        ]);


        return redirect()
            ->route('recipes.show', $recipe->slug)
            ->with('success', 'Resep berhasil diperbarui.');
    }


    /*
    |--------------------------------------------------------------------------
    | HAPUS RESEP
    |--------------------------------------------------------------------------
    */

    public function destroy($slug)
    {
        $recipe = Recipe::where('slug', $slug)
            ->firstOrFail();


        /*
        | User hanya boleh hapus resep miliknya sendiri.
        */

        if ($recipe->user_id !== auth()->id()) {
            abort(403, 'Kamu tidak memiliki izin untuk menghapus resep ini.');
        }


        $recipe->delete();


        return redirect()
            ->route('user.recipes')
            ->with('success', 'Resep berhasil dihapus.');
    }
}