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

        // Ambil 6 resep terbaru
        $latestRecipes = Recipe::with('user')
            ->latest()
            ->take(6)
            ->get();

        return view('admin.dashboard', [
            'totalRecipes' => $totalRecipes,
            'totalUsers' => $totalUsers,
            'latestRecipes' => $latestRecipes,
        ]);
    }
}