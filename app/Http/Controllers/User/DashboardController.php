<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Dashboard User
     */
    public function index()
    {
        $user = Auth::user();

        $recipes = Recipe::where('user_id', $user->id)
            ->latest()
            ->get();

        $latestRecipes = $recipes->take(3);

        $totalRecipes = $recipes->count();

        return view('user.dashboard', compact(
            'user',
            'recipes',
            'latestRecipes',
            'totalRecipes'
        ));
    }

    /**
     * Resep Saya
     */
    public function myRecipes(Request $request)
    {
        $user = Auth::user();

        $query = Recipe::where('user_id', $user->id);

        /*
        |--------------------------------------------------------------------------
        | SEARCH RESEP MILIK USER
        |--------------------------------------------------------------------------
        */

        if ($request->filled('search')) {
            $search = $request->search;

            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', '%' . $search . '%')
                  ->orWhere('ingredients', 'like', '%' . $search . '%');
            });
        }

        $recipes = $query
            ->latest()
            ->get();

        return view('user.recipes', compact(
            'user',
            'recipes'
        ));
    }
}