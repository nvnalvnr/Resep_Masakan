<?php

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\RecipeController as AdminRecipeController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\User\DashboardController as UserDashboardController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| WEBSITE
|--------------------------------------------------------------------------
*/

// Halaman utama
Route::get('/', [RecipeController::class, 'index'])
    ->name('recipes.index');

// Daftar semua resep
Route::get('/recipes', [RecipeController::class, 'index'])
    ->name('recipes.list');

// Detail resep
Route::get('/recipes/{slug}', [RecipeController::class, 'show'])
    ->name('recipes.show');


/*
|--------------------------------------------------------------------------
| USER
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {

    /*
    |--------------------------------------------------------------------------
    | DASHBOARD USER
    |--------------------------------------------------------------------------
    */

    Route::get('/dashboard', [UserDashboardController::class, 'index'])
        ->name('user.dashboard');


    /*
    |--------------------------------------------------------------------------
    | RESEP SAYA
    |--------------------------------------------------------------------------
    */

    Route::get('/dashboard/resep-saya', [UserDashboardController::class, 'myRecipes'])
        ->name('user.recipes');


    /*
    |--------------------------------------------------------------------------
    | TAMBAH RESEP USER
    |--------------------------------------------------------------------------
    */

    Route::get('/dashboard/resep/tambah', [RecipeController::class, 'create'])
        ->name('recipes.create');

    Route::post('/dashboard/resep', [RecipeController::class, 'store'])
        ->name('recipes.store');


    /*
    |--------------------------------------------------------------------------
    | EDIT RESEP USER
    |--------------------------------------------------------------------------
    */

    Route::get('/dashboard/resep/{slug}/edit', [RecipeController::class, 'edit'])
        ->name('recipes.edit');

    Route::put('/dashboard/resep/{slug}', [RecipeController::class, 'update'])
        ->name('recipes.update');


    /*
    |--------------------------------------------------------------------------
    | HAPUS RESEP USER
    |--------------------------------------------------------------------------
    */

    Route::delete('/dashboard/resep/{slug}', [RecipeController::class, 'destroy'])
        ->name('recipes.destroy');


    /*
    |--------------------------------------------------------------------------
    | PROFILE
    |--------------------------------------------------------------------------
    */

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');

});


/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        /*
        |--------------------------------------------------------------------------
        | DASHBOARD ADMIN
        |--------------------------------------------------------------------------
        */

        Route::get('/dashboard', [AdminDashboardController::class, 'index'])
            ->name('dashboard');


        /*
        |--------------------------------------------------------------------------
        | RESEP ADMIN
        |--------------------------------------------------------------------------
        */

        Route::get('/recipes', [AdminRecipeController::class, 'index'])
            ->name('recipes.index');

        Route::get('/recipes/create', [AdminRecipeController::class, 'create'])
            ->name('recipes.create');

        Route::post('/recipes', [AdminRecipeController::class, 'store'])
            ->name('recipes.store');

        Route::get('/recipes/{recipe}', [AdminRecipeController::class, 'show'])
            ->name('recipes.show');

        Route::get('/recipes/{recipe}/edit', [AdminRecipeController::class, 'edit'])
            ->name('recipes.edit');

        Route::put('/recipes/{recipe}', [AdminRecipeController::class, 'update'])
            ->name('recipes.update');

        Route::delete('/recipes/{recipe}', [AdminRecipeController::class, 'destroy'])
            ->name('recipes.destroy');


        /*
        |--------------------------------------------------------------------------
        | USER MANAGEMENT
        |--------------------------------------------------------------------------
        */

        Route::get('/users', [AdminUserController::class, 'index'])
            ->name('users.index');

        Route::get('/users/{user}/edit', [AdminUserController::class, 'edit'])
            ->name('users.edit');

        Route::put('/users/{user}', [AdminUserController::class, 'update'])
            ->name('users.update');

        Route::delete('/users/{user}', [AdminUserController::class, 'destroy'])
            ->name('users.destroy');

    });


/*
|--------------------------------------------------------------------------
| AUTH
|--------------------------------------------------------------------------
*/

require __DIR__ . '/auth.php';