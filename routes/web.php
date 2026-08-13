<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// =========================
// RECIPE
// =========================

Route::middleware('auth')->group(function () {

    Route::get('/recipes', [RecipeController::class, 'index']);

    Route::get('/recipes/create', [RecipeController::class, 'create']);

    Route::post('/recipes', [RecipeController::class, 'store']);


    // DETAIL RESEP BERDASARKAN SLUG
    Route::get('/recipes/{recipe:slug}', [RecipeController::class, 'show']);

    Route::get('/recipes/{recipe}/edit', [RecipeController::class, 'edit']);

    Route::put('/recipes/{recipe}', [RecipeController::class, 'update']);

    Route::delete('/recipes/{recipe}', [RecipeController::class, 'destroy']);


    // =========================
    // PROFILE
    // =========================

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
});

require __DIR__.'/auth.php';