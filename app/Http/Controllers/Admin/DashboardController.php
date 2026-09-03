<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Recipe;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        // Total semua resep
        $totalRecipes = Recipe::count();

        // Total semua pengguna
        $totalUsers = User::count();

        // Total resep yang dibuat hari ini
        $todayRecipes = Recipe::whereDate('created_at', today())->count();

        // 3 resep terbaru
        $latestRecipes = Recipe::with('user')
            ->latest()
            ->take(3)
            ->get();

        return view('admin.dashboard', compact(
            'totalRecipes',
            'totalUsers',
            'todayRecipes',
            'latestRecipes'
        ));
    }
}