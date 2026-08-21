<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Recipe;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        /*
        |--------------------------------------------------------------------------
        | RESEP TERBARU
        |--------------------------------------------------------------------------
        |
        | Dashboard menampilkan resep dari semua user.
        |
        */

        $recipes = Recipe::with('user')
            ->latest()
            ->take(6)
            ->get();

        /*
        |--------------------------------------------------------------------------
        | RESEP MILIK USER
        |--------------------------------------------------------------------------
        */

        $myRecipes = Recipe::where('user_id', $user->id)
            ->latest()
            ->get();

        /*
        |--------------------------------------------------------------------------
        | STATISTIK
        |--------------------------------------------------------------------------
        */

        $totalRecipes = Recipe::count();

        $totalMyRecipes = $myRecipes->count();

        /*
        |--------------------------------------------------------------------------
        | FAVORITE
        |--------------------------------------------------------------------------
        */

        $totalFavorites = $user->favorites()->count();

        return view('user.dashboard', compact(
            'user',
            'recipes',
            'myRecipes',
            'totalRecipes',
            'totalMyRecipes',
            'totalFavorites'
        ));
    }
}