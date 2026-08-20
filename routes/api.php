<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\RecipeController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/


// ===============================
// AUTH
// ===============================

Route::post('/login', [AuthController::class, 'login']);


// ===============================
// RECIPE - PUBLIC
// ===============================

Route::get('/recipes', [RecipeController::class, 'index']);

Route::get('/recipes/{id}', [RecipeController::class, 'show']);


// ===============================
// RECIPE - LOGIN REQUIRED
// ===============================

Route::middleware('auth:sanctum')->group(function () {

    Route::post('/recipes', [RecipeController::class, 'store']);

    Route::put('/recipes/{id}', [RecipeController::class, 'update']);

    Route::delete('/recipes/{id}', [RecipeController::class, 'destroy']);

    Route::post('/logout', [AuthController::class, 'logout']);
});