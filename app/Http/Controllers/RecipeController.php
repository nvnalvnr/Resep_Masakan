<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class RecipeController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | HOMEPAGE
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
    | RESEP SAYA
    |--------------------------------------------------------------------------
    */

    public function my()
    {
        $recipes = Recipe::where('user_id', Auth::id())
            ->latest()
            ->paginate(9);

        return view('recipes.my', compact('recipes'));
    }


    /*
    |--------------------------------------------------------------------------
    | TAMBAH RESEP
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
            'title' => ['required', 'string', 'max:255'],
            'ingredients' => ['required', 'string'],
            'steps' => ['required', 'string'],
            'image' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:2048',
            ],
        ]);

        $slug = Str::slug($validated['title']);

        $originalSlug = $slug;
        $counter = 1;

        while (Recipe::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }

        $imagePath = null;

        if ($request->hasFile('image')) {
            $imagePath = $request
                ->file('image')
                ->store('recipes', 'public');
        }

        Recipe::create([
            'user_id' => Auth::id(),
            'title' => $validated['title'],
            'slug' => $slug,
            'ingredients' => $validated['ingredients'],
            'steps' => $validated['steps'],
            'image' => $imagePath,
        ]);

        return redirect()
            ->route('recipes.my')
            ->with('success', 'Resep berhasil ditambahkan.');
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
    | EDIT RESEP
    |--------------------------------------------------------------------------
    */

    public function edit($slug)
    {
        $recipe = Recipe::where('slug', $slug)
            ->where('user_id', Auth::id())
            ->firstOrFail();

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
            ->where('user_id', Auth::id())
            ->firstOrFail();

        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'ingredients' => ['required', 'string'],
            'steps' => ['required', 'string'],
            'image' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:2048',
            ],
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

        $imagePath = $recipe->image;

        if ($request->hasFile('image')) {

            if (
                $recipe->image &&
                !str_starts_with($recipe->image, 'http://') &&
                !str_starts_with($recipe->image, 'https://')
            ) {
                Storage::disk('public')->delete($recipe->image);
            }

            $imagePath = $request
                ->file('image')
                ->store('recipes', 'public');
        }

        $recipe->update([
            'title' => $validated['title'],
            'slug' => $newSlug,
            'ingredients' => $validated['ingredients'],
            'steps' => $validated['steps'],
            'image' => $imagePath,
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
            ->where('user_id', Auth::id())
            ->firstOrFail();

        if (
            $recipe->image &&
            !str_starts_with($recipe->image, 'http://') &&
            !str_starts_with($recipe->image, 'https://')
        ) {
            Storage::disk('public')->delete($recipe->image);
        }

        $recipe->delete();

        return redirect()
            ->route('recipes.my')
            ->with('success', 'Resep berhasil dihapus.');
    }
}