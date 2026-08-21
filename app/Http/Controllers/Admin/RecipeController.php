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
    public function index()
    {
        $recipes = Recipe::with('user')
            ->latest()
            ->paginate(10);

        return view('admin.recipes.index', compact('recipes'));
    }

    /**
     * Menampilkan form tambah resep untuk admin.
     */
    public function create()
    {
        return view('recipes.create');
    }

    /**
     * Menyimpan resep baru yang dibuat admin.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'ingredients' => 'required|string',
            'steps' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $validated['user_id'] = $request->user()->id;
        $validated['slug'] = $this->generateUniqueSlug($validated['title']);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')
                ->store('recipes', 'public');
        }

        Recipe::create($validated);

        return redirect()
            ->route('admin.recipes.index')
            ->with('success', 'Resep berhasil ditambahkan.');
    }

    /**
     * Menampilkan detail resep
     */
    public function show(Recipe $recipe)
    {
        $recipe->load('user');

        return view('recipes.show', compact('recipe'));
    }

    /**
     * Menampilkan form edit resep
     */
    public function edit(Recipe $recipe)
    {
        return view('recipes.edit', compact('recipe'));
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

        $validated['slug'] = $this->generateUniqueSlug(
            $validated['title'],
            $recipe
        );

        /*
        |--------------------------------------------------------------------------
        | Upload gambar baru
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('image')) {

            // Hapus gambar lama jika ada
            if ($this->isStoredImage($recipe->image)) {
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

        if ($this->isStoredImage($recipe->image)) {
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

    private function generateUniqueSlug(string $title, ?Recipe $ignoredRecipe = null): string
    {
        $baseSlug = Str::slug($title);
        $slug = $baseSlug !== '' ? $baseSlug : 'resep';
        $counter = 1;

        while (
            Recipe::where('slug', $slug)
                ->when(
                    $ignoredRecipe,
                    fn ($query) => $query->where('id', '!=', $ignoredRecipe->getKey())
                )
                ->exists()
        ) {
            $slug = ($baseSlug !== '' ? $baseSlug : 'resep') . '-' . $counter;
            $counter++;
        }

        return $slug;
    }

    private function isStoredImage(?string $image): bool
    {
        return filled($image)
            && ! Str::startsWith($image, ['http://', 'https://']);
    }
}
