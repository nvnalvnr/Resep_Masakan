<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RecipeController;

use App\Http\Controllers\User\DashboardController as UserDashboardController;
use App\Http\Controllers\User\FavoriteController;

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\RecipeController as AdminRecipeController;
use App\Http\Controllers\Admin\UserController as AdminUserController;


/*
|--------------------------------------------------------------------------
| WEBSITE PUBLIK
|--------------------------------------------------------------------------
|
| Homepage, daftar resep, dan detail resep bisa dibuka
| tanpa harus login.
|
*/


/*
|--------------------------------------------------------------------------
| HOMEPAGE
|--------------------------------------------------------------------------
*/

Route::get('/', [
    RecipeController::class,
    'index'
])->name('recipes.index');


/*
|--------------------------------------------------------------------------
| DAFTAR SEMUA RESEP
|--------------------------------------------------------------------------
*/

Route::get('/recipes', [
    RecipeController::class,
    'index'
])->name('recipes.list');


/*
|--------------------------------------------------------------------------
| DETAIL RESEP
|--------------------------------------------------------------------------
|
| PENTING:
| Route ini berada di luar middleware auth.
| Jadi pengunjung bisa melihat resep tanpa login.
|
*/

Route::get('/recipes/{slug}', [
    RecipeController::class,
    'show'
])->name('recipes.show');


/*
|--------------------------------------------------------------------------
| USER
|--------------------------------------------------------------------------
|
| Mulai dari sini fitur membutuhkan login.
|
*/

Route::middleware(['auth'])->group(function () {


    /*
    |--------------------------------------------------------------------------
    | DASHBOARD USER
    |--------------------------------------------------------------------------
    */

    Route::get('/dashboard', [
        UserDashboardController::class,
        'index'
    ])->name('user.dashboard');


    /*
    |--------------------------------------------------------------------------
    | RESEP SAYA
    |--------------------------------------------------------------------------
    */

    Route::get('/recipes/my', [
        RecipeController::class,
        'my'
    ])->name('recipes.my');


    /*
    |--------------------------------------------------------------------------
    | TAMBAH RESEP
    |--------------------------------------------------------------------------
    */

    Route::get('/recipes/create', [
        RecipeController::class,
        'create'
    ])->name('recipes.create');


    Route::post('/recipes', [
        RecipeController::class,
        'store'
    ])->name('recipes.store');


    /*
    |--------------------------------------------------------------------------
    | EDIT RESEP
    |--------------------------------------------------------------------------
    */

    Route::get('/recipes/{slug}/edit', [
        RecipeController::class,
        'edit'
    ])->name('recipes.edit');


    Route::put('/recipes/{slug}', [
        RecipeController::class,
        'update'
    ])->name('recipes.update');


    /*
    |--------------------------------------------------------------------------
    | HAPUS RESEP
    |--------------------------------------------------------------------------
    */

    Route::delete('/recipes/{slug}', [
        RecipeController::class,
        'destroy'
    ])->name('recipes.destroy');


    /*
    |--------------------------------------------------------------------------
    | RESEP TERSIMPAN
    |--------------------------------------------------------------------------
    */

    Route::get('/dashboard/resep-tersimpan', [
        FavoriteController::class,
        'index'
    ])->name('user.favorites');


    /*
    |--------------------------------------------------------------------------
    | SIMPAN / HAPUS FAVORITE
    |--------------------------------------------------------------------------
    */

    Route::post('/resep/{recipe}/favorite', [
        FavoriteController::class,
        'toggle'
    ])->name('recipe.favorite');


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
| ADMIN
|--------------------------------------------------------------------------
|
| Semua halaman admin harus login dan mempunyai role admin.
|
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

        Route::get('/dashboard', [
            AdminDashboardController::class,
            'index'
        ])->name('dashboard');


        /*
        |--------------------------------------------------------------------------
        | DAFTAR RESEP ADMIN
        |--------------------------------------------------------------------------
        */

        Route::get('/recipes', [
            AdminRecipeController::class,
            'index'
        ])->name('recipes.index');


        /*
        |--------------------------------------------------------------------------
        | TAMBAH RESEP ADMIN
        |--------------------------------------------------------------------------
        */

        Route::get('/recipes/create', [
            AdminRecipeController::class,
            'create'
        ])->name('recipes.create');


        Route::post('/recipes', [
            AdminRecipeController::class,
            'store'
        ])->name('recipes.store');


        /*
        |--------------------------------------------------------------------------
        | DETAIL RESEP ADMIN
        |--------------------------------------------------------------------------
        */

        Route::get('/recipes/{recipe}', [
            AdminRecipeController::class,
            'show'
        ])->name('recipes.show');


        /*
        |--------------------------------------------------------------------------
        | EDIT RESEP ADMIN
        |--------------------------------------------------------------------------
        */

        Route::get('/recipes/{recipe}/edit', [
            AdminRecipeController::class,
            'edit'
        ])->name('recipes.edit');


        Route::put('/recipes/{recipe}', [
            AdminRecipeController::class,
            'update'
        ])->name('recipes.update');


        /*
        |--------------------------------------------------------------------------
        | HAPUS RESEP ADMIN
        |--------------------------------------------------------------------------
        */

        Route::delete('/recipes/{recipe}', [
            AdminRecipeController::class,
            'destroy'
        ])->name('recipes.destroy');


        /*
        |--------------------------------------------------------------------------
        | DATA USER ADMIN
        |--------------------------------------------------------------------------
        */

        Route::get('/users', [
            AdminUserController::class,
            'index'
        ])->name('users.index');


        /*
        |--------------------------------------------------------------------------
        | TAMBAH USER
        |--------------------------------------------------------------------------
        */

        Route::get('/users/create', [
            AdminUserController::class,
            'create'
        ])->name('users.create');


        Route::post('/users', [
            AdminUserController::class,
            'store'
        ])->name('users.store');


        /*
        |--------------------------------------------------------------------------
        | EDIT USER
        |--------------------------------------------------------------------------
        */

        Route::get('/users/{user}/edit', [
            AdminUserController::class,
            'edit'
        ])->name('users.edit');


        Route::put('/users/{user}', [
            AdminUserController::class,
            'update'
        ])->name('users.update');


        /*
        |--------------------------------------------------------------------------
        | HAPUS USER
        |--------------------------------------------------------------------------
        */

        Route::delete('/users/{user}', [
            AdminUserController::class,
            'destroy'
        ])->name('users.destroy');

    });


/*
|--------------------------------------------------------------------------
| AUTHENTICATION
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';