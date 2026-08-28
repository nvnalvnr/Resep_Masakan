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
| Halaman publik dapat dibuka tanpa login:
| - Homepage
| - Semua resep
| - Detail resep
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
| SEMUA RESEP
|--------------------------------------------------------------------------
*/

Route::get('/recipes', [
    RecipeController::class,
    'index'
])->name('recipes.list');


/*
|--------------------------------------------------------------------------
| AUTHENTICATED USER
|--------------------------------------------------------------------------
|
| Semua route di bawah membutuhkan login.
|
*/

Route::middleware(['auth'])->group(function () {


    /*
    |--------------------------------------------------------------------------
    | DASHBOARD UTAMA
    |--------------------------------------------------------------------------
    |
    | Route ini digunakan sebagai dashboard setelah proses login.
    | Admin -> admin.dashboard
    | User  -> user.dashboard
    |
    */

    Route::get('/dashboard', function () {

        if (auth()->user()->role === 'admin') {

            return redirect()->route(
                'admin.dashboard'
            );

        }

        return redirect()->route(
            'user.dashboard'
        );

    })->name('dashboard');


    /*
    |--------------------------------------------------------------------------
    | DASHBOARD USER
    |--------------------------------------------------------------------------
    */

    Route::get('/user/dashboard', [
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
    |
    | User dan admin dapat menggunakan form tambah resep umum.
    |
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
    | EDIT RESEP MILIK USER
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
    | HAPUS RESEP MILIK USER
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
| DETAIL RESEP PUBLIK
|--------------------------------------------------------------------------
|
| Route ini diletakkan setelah /recipes/create agar:
|
| /recipes/create
|
| tidak dianggap sebagai:
|
| /recipes/{slug}
|
*/

Route::get('/recipes/{slug}', [
    RecipeController::class,
    'show'
])->name('recipes.show');


/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
|
| Semua route berikut:
| - harus login
| - harus memiliki role admin
|
*/

Route::middleware([
    'auth',
    'admin'
])
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
        | SEMUA RESEP ADMIN
        |--------------------------------------------------------------------------
        */

        Route::get('/recipes', [
            AdminRecipeController::class,
            'index'
        ])->name('recipes.index');


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
        | TAMBAH RESEP ADMIN
        |--------------------------------------------------------------------------
        |
        | Admin memakai form tambah resep umum,
        | sehingga route khusus admin tetap disediakan
        | jika dipanggil oleh Blade.
        |
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
        | DATA USER
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

require __DIR__ . '/auth.php';
