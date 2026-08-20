<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Recipe;
use Illuminate\Http\Request;
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

        // Search berdasarkan judul
        if ($request->filled('search')) {
            $query->where(
                'title',
                'like',
                '%' . $request->search . '%'
            );
        }

        $recipes = $query->paginate(10);

        return response()->json([
            'success' => true,
            'message' => 'Data resep berhasil diambil.',
            'data' => $recipes
        ], 200);
    }


    /**
     * Menampilkan satu resep
     */
    public function show($id)
    {
        $recipe = Recipe::with('user')->find($id);

        if (!$recipe) {
            return response()->json([
                'success' => false,
                'message' => 'Resep tidak ditemukan.'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Detail resep berhasil diambil.',
            'data' => $recipe
        ], 200);
    }


    /**
     * Menambahkan resep baru
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'ingredients' => 'required|string',
            'steps' => 'required|string',
            'image' => 'nullable|string|max:255',
        ]);

        // Untuk sementara API menggunakan user yang sedang login
        if (!auth()->check()) {
            return response()->json([
                'success' => false,
                'message' => 'Kamu harus login terlebih dahulu.'
            ], 401);
        }

        $validated['user_id'] = auth()->id();

        // Membuat slug
        $originalSlug = Str::slug($validated['title']);

        $slug = $originalSlug;
        $counter = 1;

        while (Recipe::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }

        $validated['slug'] = $slug;

        $recipe = Recipe::create($validated);

        $recipe->load('user');

        return response()->json([
            'success' => true,
            'message' => 'Resep berhasil ditambahkan.',
            'data' => $recipe
        ], 201);
    }


    /**
     * Mengubah resep
     */
    public function update(Request $request, $id)
    {
        $recipe = Recipe::find($id);

        if (!$recipe) {
            return response()->json([
                'success' => false,
                'message' => 'Resep tidak ditemukan.'
            ], 404);
        }

        if (!auth()->check()) {
            return response()->json([
                'success' => false,
                'message' => 'Kamu harus login terlebih dahulu.'
            ], 401);
        }

        // User hanya boleh mengubah resep miliknya
        if (
            auth()->user()->role !== 'admin' &&
            $recipe->user_id !== auth()->id()
        ) {
            return response()->json([
                'success' => false,
                'message' => 'Kamu tidak memiliki izin mengubah resep ini.'
            ], 403);
        }

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'ingredients' => 'required|string',
            'steps' => 'required|string',
            'image' => 'nullable|string|max:255',
        ]);

        // Kalau judul berubah, buat slug baru
        if ($validated['title'] !== $recipe->title) {

            $originalSlug = Str::slug($validated['title']);

            $slug = $originalSlug;
            $counter = 1;

            while (
                Recipe::where('slug', $slug)
                    ->where('id', '!=', $recipe->id)
                    ->exists()
            ) {
                $slug = $originalSlug . '-' . $counter;
                $counter++;
            }

            $validated['slug'] = $slug;
        }

        $recipe->update($validated);

        $recipe->load('user');

        return response()->json([
            'success' => true,
            'message' => 'Resep berhasil diperbarui.',
            'data' => $recipe
        ], 200);
    }


    /**
     * Menghapus resep
     */
    public function destroy($id)
    {
        $recipe = Recipe::find($id);

        if (!$recipe) {
            return response()->json([
                'success' => false,
                'message' => 'Resep tidak ditemukan.'
            ], 404);
        }

        if (!auth()->check()) {
            return response()->json([
                'success' => false,
                'message' => 'Kamu harus login terlebih dahulu.'
            ], 401);
        }

        // User hanya boleh menghapus resep miliknya
        if (
            auth()->user()->role !== 'admin' &&
            $recipe->user_id !== auth()->id()
        ) {
            return response()->json([
                'success' => false,
                'message' => 'Kamu tidak memiliki izin menghapus resep ini.'
            ], 403);
        }

        $recipe->delete();

        return response()->json([
            'success' => true,
            'message' => 'Resep berhasil dihapus.'
        ], 200);
    }
}