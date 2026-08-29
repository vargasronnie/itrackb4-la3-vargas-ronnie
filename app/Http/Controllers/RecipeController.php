<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index()
    {
        $recipes = $this->getRecipes();
        return view('recipes.index', ['recipes' => $recipes]);
    }

    public function show($id)
    {
        $recipes = $this->getRecipes();
        if (!isset($recipes[$id])) {
            abort(404);
        }
        return view('recipes.show', ['recipe' => $recipes[$id]]);
    }

    public function featured()
    {
        $recipes = $this->getRecipes();
        $featuredRecipe = ($recipes[3]);

        return view('recipes.featured', ['recipe' => $featuredRecipe]);
    }

    public function filter($value = null)
    {
        $recipes = $this->getRecipes();
        $filteredRecipes = [];
        foreach ($recipes as $id => $recipe) {
            if ($value == null || $recipe['cuisine'] == $value) {
                $filteredRecipes[$id] = $recipe;
            }
        }
        return view('recipes.filter', ['recipes' => $filteredRecipes, 'value' => $value]);
    }

    private function getRecipes()
    {
        $recipes = [
            1 => ['id' => 1, 'name' => 'Pinangat na Isda sa Catanduanes', 'cuisine' => 'Seafood',
                'difficulty' => 'Medium', 'cookTime' => '40 minutes'],
            2 => ['id' => 2, 'name' => 'Kinunot na Pagi', 'cuisine' => 'Seafood',
                'difficulty' => 'Medium', 'cookTime' => '35 minutes'],
            3 => ['id' => 3, 'name' => 'Laing', 'cuisine' => 'Vegetable',
                'difficulty' => 'Easy', 'cookTime' => '45 minutes'],
            4 => ['id' => 4, 'name' => 'Pili Nut Brittle', 'cuisine' => 'Dessert',
                'difficulty' => 'Easy', 'cookTime' => '15 minutes'],
            5 => ['id' => 5, 'name' => 'Suam na Mais', 'cuisine' => 'Soup',
                'difficulty' => 'Easy', 'cookTime' => '25 minutes'],
            6 => ['id' => 6, 'name' => 'Inaswang na Manok sa Gata', 'cuisine' => 'Meat',
                'difficulty' => 'Medium', 'cookTime' => '50 minutes'],
            7 => ['id' => 7, 'name' => 'Tinutungang Manok', 'cuisine' => 'Meat',
                'difficulty' => 'Medium', 'cookTime' => '45 minutes'],
        ];
        return $recipes; //returns the data from $recipes array
    }
}