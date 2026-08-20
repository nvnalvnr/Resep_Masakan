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

        $recipes = Recipe::where('user_id', $user->id)
            ->latest()
            ->get();

        $totalRecipes = $recipes->count();

        $latestRecipes = $recipes->take(3);

        return view('user.dashboard', compact(
            'user',
            'recipes',
            'totalRecipes',
            'latestRecipes'
        ));
    }
}