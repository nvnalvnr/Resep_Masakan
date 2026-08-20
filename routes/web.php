<?php

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\RecipeController as AdminRecipeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\User\DashboardController as UserDashboardController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| FRONTEND
|--------------------------------------------------------------------------
*/

Route::get('/', [
    RecipeController::class,
    'index'
])->name('home');

/*
|--------------------------------------------------------------------------
| DEFAULT DASHBOARD
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {

    if (auth()->check()) {

        if (auth()->user()->role === 'admin') {
            return redirect()->route('admin.dashboard');
        }

        return redirect()->route('user.dashboard');
    }

    return redirect()->route('login');

})->middleware('auth')->name('dashboard');


/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'verified', 'admin'])
    ->prefix('admin')
    ->group(function () {

        /*
        |--------------------------------------------------------------------------
        | ADMIN DASHBOARD
        |--------------------------------------------------------------------------
        */

        Route::get('/dashboard', [
            AdminDashboardController::class,
            'index'
        ])->name('admin.dashboard');


        /*
        |--------------------------------------------------------------------------
        | ADMIN RECIPE
        |--------------------------------------------------------------------------
        */

        // Daftar semua resep
        Route::get('/recipes', [
            AdminRecipeController::class,
            'index'
        ])->name('admin.recipes.index');


        // Form edit resep
        Route::get('/recipes/{recipe}/edit', [
            AdminRecipeController::class,
            'edit'
        ])->name('admin.recipes.edit');


        // Update resep
        Route::put('/recipes/{recipe}', [
            AdminRecipeController::class,
            'update'
        ])->name('admin.recipes.update');


        // Hapus resep
        Route::delete('/recipes/{recipe}', [
            AdminRecipeController::class,
            'destroy'
        ])->name('admin.recipes.destroy');


        // Detail resep
        Route::get('/recipes/{recipe}', [
            AdminRecipeController::class,
            'show'
        ])->name('admin.recipes.show');

    });


/*
|--------------------------------------------------------------------------
| USER DASHBOARD
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'verified'])
    ->prefix('user')
    ->group(function () {

        Route::get('/dashboard', [
            UserDashboardController::class,
            'index'
        ])->name('user.dashboard');

    });


/*
|--------------------------------------------------------------------------
| USER RECIPE
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    // Daftar resep
    Route::get('/recipes', [
        RecipeController::class,
        'index'
    ])->name('recipes.index');


    // Form tambah resep
    Route::get('/recipes/create', [
        RecipeController::class,
        'create'
    ])->name('recipes.create');


    // Simpan resep
    Route::post('/recipes', [
        RecipeController::class,
        'store'
    ])->name('recipes.store');


    // Detail resep
    Route::get('/recipes/{recipe:slug}', [
        RecipeController::class,
        'show'
    ])->name('recipes.show');


    // Form edit resep
    Route::get('/recipes/{recipe}/edit', [
        RecipeController::class,
        'edit'
    ])->name('recipes.edit');


    // Update resep
    Route::put('/recipes/{recipe}', [
        RecipeController::class,
        'update'
    ])->name('recipes.update');


    // Hapus resep
    Route::delete('/recipes/{recipe}', [
        RecipeController::class,
        'destroy'
    ])->name('recipes.destroy');


    /*
    |--------------------------------------------------------------------------
    | PROFILE
    |--------------------------------------------------------------------------
    */

    Route::get('/profile', [
        ProfileController::class,
        'edit'
    ])->name('profile.edit');


    Route::patch('/profile', [
        ProfileController::class,
        'update'
    ])->name('profile.update');


    Route::delete('/profile', [
        ProfileController::class,
        'destroy'
    ])->name('profile.destroy');

});


/*
|--------------------------------------------------------------------------
| AUTH
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';