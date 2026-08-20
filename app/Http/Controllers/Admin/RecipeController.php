<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RecipeController extends Controller
{
    /**
     * Menampilkan semua resep
     */
    public function index()
    {
        $recipes = Recipe::with('user')
            ->latest()
            ->paginate(10);

        return view('admin.recipes.index', compact('recipes'));
    }

    /**
     * Menampilkan detail resep
     */
    public function show(Recipe $recipe)
    {
        $recipe->load('user');

        return view('admin.recipes.show', compact('recipe'));
    }

    /**
     * Menampilkan form edit resep
     */
    public function edit(Recipe $recipe)
    {
        return view('admin.recipes.edit', compact('recipe'));
    }

    /**
     * Memperbarui resep
     */
    public function update(Request $request, Recipe $recipe)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'ingredients' => 'required|string',
            'steps' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        /*
        |--------------------------------------------------------------------------
        | Upload gambar baru
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('image')) {

            // Hapus gambar lama jika ada
            if ($recipe->image) {
                Storage::disk('public')->delete($recipe->image);
            }

            // Simpan gambar baru
            $validated['image'] = $request->file('image')
                ->store('recipes', 'public');
        }

        /*
        |--------------------------------------------------------------------------
        | Update data recipe
        |--------------------------------------------------------------------------
        */

        $recipe->update($validated);

        return redirect()
            ->route('admin.recipes.index')
            ->with('success', 'Resep berhasil diperbarui.');
    }

    /**
     * Menghapus resep
     */
    public function destroy(Recipe $recipe)
    {
        /*
        |--------------------------------------------------------------------------
        | Hapus gambar recipe
        |--------------------------------------------------------------------------
        */

        if ($recipe->image) {
            Storage::disk('public')->delete($recipe->image);
        }

        /*
        |--------------------------------------------------------------------------
        | Hapus recipe
        |--------------------------------------------------------------------------
        */

        $recipe->delete();

        return redirect()
            ->route('admin.recipes.index')
            ->with('success', 'Resep berhasil dihapus.');
    }
}