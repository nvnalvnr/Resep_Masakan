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
| DAFTAR RESEP PUBLIK
|--------------------------------------------------------------------------
*/

Route::get('/recipes', [
    RecipeController::class,
    'index'
])->name('recipes.list');


/*
|--------------------------------------------------------------------------
| USER + ADMIN
|--------------------------------------------------------------------------
|
| Semua route di sini membutuhkan login.
|
*/

Route::middleware(['auth'])->group(function () {

    /*
    |--------------------------------------------------------------------------
    | DASHBOARD
    |--------------------------------------------------------------------------
    */

    Route::get('/dashboard', function () {

        if (auth()->user()->role === 'admin') {
            return redirect()->route('admin.dashboard');
        }

        return app(UserDashboardController::class)->index();

    })->name('user.dashboard');


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
    | TAMBAH RESEP USER
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
    | EDIT RESEP MILIK SENDIRI
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
    | HAPUS RESEP MILIK SENDIRI
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
    | FAVORITE
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
| Harus diletakkan setelah /recipes/create,
| /recipes/{slug}/edit, dan route khusus lainnya.
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
| Semua route di bawah hanya bisa diakses administrator.
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
        | KELOLA RESEP ADMIN
        |--------------------------------------------------------------------------
        */

        // Daftar resep
        Route::get('/recipes', [
            AdminRecipeController::class,
            'index'
        ])->name('recipes.index');


        /*
        |--------------------------------------------------------------------------
        | TAMBAH RESEP ADMIN
        |--------------------------------------------------------------------------
        |
        | Admin menggunakan RecipeController umum untuk membuat resep.
        | Karena route berada di middleware admin, hanya admin yang bisa
        | mengaksesnya.
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