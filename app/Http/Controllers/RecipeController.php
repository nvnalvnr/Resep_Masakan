<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRecipeRequest;
use App\Http\Requests\UpdateRecipeRequest;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RecipeController extends Controller
{
    /**
     * Menampilkan daftar resep.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');

        $recipes = Recipe::query()
            ->when($search, function ($query) use ($search) {
                $query->where('title', 'like', '%' . $search . '%');
            })
            ->latest()
            ->paginate(6)
            ->withQueryString();

        return view('recipes.index', [
            'recipes' => $recipes,
            'search' => $search,
        ]);
    }

    /**
     * Menampilkan form tambah resep.
     */
    public function create()
    {
        $this->authorize('create', Recipe::class);

        return view('recipes.create');
    }

    /**
     * Menyimpan resep baru.
     */
    public function store(StoreRecipeRequest $request)
    {
        $this->authorize('create', Recipe::class);

        $validated = $request->validated();

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')
                ->store('recipes', 'public');
        }

        $validated['user_id'] = auth()->id();

        Recipe::create($validated);

        return redirect('/recipes')
            ->with('success', 'Resep berhasil ditambahkan.');
    }

    /**
     * Menampilkan detail resep.
     */
    public function show(Recipe $recipe)
    {
        $this->authorize('view', $recipe);

        return view('recipes.show', [
            'recipe' => $recipe,
        ]);
    }

    /**
     * Menampilkan form edit resep.
     */
    public function edit(Recipe $recipe)
    {
        $this->authorize('update', $recipe);

        return view('recipes.edit', [
            'recipe' => $recipe,
        ]);
    }

    /**
     * Mengupdate resep.
     */
    public function update(
        UpdateRecipeRequest $request,
        Recipe $recipe
    ) {
        $this->authorize('update', $recipe);

        $validated = $request->validated();

        /*
         * Jika user memilih gambar baru,
         * hapus gambar lama lalu simpan gambar baru.
         */
        if ($request->hasFile('image')) {

            if ($recipe->image) {
                Storage::disk('public')->delete($recipe->image);
            }

            $validated['image'] = $request->file('image')
                ->store('recipes', 'public');
        }

        $recipe->update($validated);

        return redirect('/recipes')
            ->with('success', 'Resep berhasil diperbarui.');
    }

    /**
     * Menghapus resep.
     */
    public function destroy(Recipe $recipe)
    {
        $this->authorize('delete', $recipe);

        // Hapus gambar jika ada
        if ($recipe->image) {
            Storage::disk('public')->delete($recipe->image);
        }

        $recipe->delete();

        return redirect('/recipes')
            ->with('success', 'Resep berhasil dihapus.');
    }
}