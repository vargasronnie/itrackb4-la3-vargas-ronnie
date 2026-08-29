<?php

use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/recipes', [RecipeController::class, 'index'])
     ->name('recipes.index');

Route::get('/recipes/featured', [RecipeController::class, 'featured'])
     ->name('recipes.featured');

Route::get('/recipes/filter/{cuisine?}', [RecipeController::class, 'filter'])
     ->name('recipes.filter');

Route::get('/recipes/{id}', [RecipeController::class, 'show'])
     ->name('recipes.show');