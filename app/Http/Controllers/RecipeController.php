<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RecipeController extends Controller
{
    /**
     * Menampilkan daftar resep untuk website
     */
    public function index(Request $request)
    {
        $query = Recipe::with('user')
            ->latest();

        if ($request->filled('search')) {
            $search = $request->search;

            $query->where('title', 'like', '%' . $search . '%');
        }

        $recipes = $query->paginate(12)->withQueryString();

        return view('recipes.index', compact('recipes'));
    }

    /**
     * Form tambah resep
     */
    public function create()
    {
        return view('recipes.create');
    }

    /**
     * Simpan resep
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'ingredients' => 'required|string',
            'steps' => 'required|string',
            'image' => 'nullable|string|max:255',
        ]);

        $validated['user_id'] = auth()->id();
        $validated['slug'] = Str::slug($validated['title']);

        Recipe::create($validated);

        return redirect()
            ->route('user.dashboard')
            ->with('success', 'Resep berhasil ditambahkan.');
    }

    /**
     * Detail resep
     */
    public function show(Recipe $recipe)
    {
        return view('recipes.show', compact('recipe'));
    }

    /**
     * Form edit
     */
    public function edit(Recipe $recipe)
    {
        if (
            $recipe->user_id !== auth()->id() &&
            auth()->user()->role !== 'admin'
        ) {
            abort(403);
        }

        return view('recipes.edit', compact('recipe'));
    }

    /**
     * Update resep
     */
    public function update(Request $request, Recipe $recipe)
    {
        if (
            $recipe->user_id !== auth()->id() &&
            auth()->user()->role !== 'admin'
        ) {
            abort(403);
        }

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'ingredients' => 'required|string',
            'steps' => 'required|string',
            'image' => 'nullable|string|max:255',
        ]);

        if ($validated['title'] !== $recipe->title) {
            $validated['slug'] = Str::slug($validated['title']);
        }

        $recipe->update($validated);

        return redirect()
            ->route('user.dashboard')
            ->with('success', 'Resep berhasil diperbarui.');
    }

    /**
     * Hapus resep
     */
    public function destroy(Recipe $recipe)
    {
        if (
            $recipe->user_id !== auth()->id() &&
            auth()->user()->role !== 'admin'
        ) {
            abort(403);
        }

        $recipe->delete();

        return redirect()
            ->route('user.dashboard')
            ->with('success', 'Resep berhasil dihapus.');
    }
}