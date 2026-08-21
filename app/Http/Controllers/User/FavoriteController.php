<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Favorite;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    /**
     * Menampilkan resep yang disimpan user
     */
    public function index()
    {
        $user = Auth::user();

        $favorites = Favorite::with([
            'recipe',
            'recipe.user'
        ])
        ->where('user_id', $user->id)
        ->latest()
        ->get();

        return view('user.favorites', compact(
            'user',
            'favorites'
        ));
    }

    /**
     * Simpan / hapus resep dari favorite
     */
    public function toggle(Request $request, Recipe $recipe)
    {
        $user = Auth::user();

        $favorite = Favorite::where('user_id', $user->id)
            ->where('recipe_id', $recipe->id)
            ->first();

        if ($favorite) {

            $favorite->delete();

            return back()->with(
                'success',
                'Resep berhasil dihapus dari resep tersimpan.'
            );
        }

        Favorite::create([
            'user_id' => $user->id,
            'recipe_id' => $recipe->id,
        ]);

        return back()->with(
            'success',
            'Resep berhasil disimpan.'
        );
    }
}