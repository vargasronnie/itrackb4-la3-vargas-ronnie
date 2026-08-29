<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecipeController extends Controller
{
    private function getRecipes()
    {
        return [
            1 => [
                'id' => 1,
                'name' => 'Pinangat na Isda',
                'cuisine' => 'Seafood',
                'difficulty' => 'Medium',
                'cookTime' => '40 minutes',
                'ingredients' => 'Fresh fish, Gabi leaves, Coconut milk, Sili, Ginger, Onion'
            ],
            2 => [
                'id' => 2,
                'name' => 'Kinunot na Pagi',
                'cuisine' => 'Seafood',
                'difficulty' => 'Medium',
                'cookTime' => '35 minutes',
                'ingredients' => 'Stingray, Coconut milk, Malunggay leaves, Sili, Ginger'
            ],
            3 => [
                'id' => 3,
                'name' => 'Laing',
                'cuisine' => 'Vegetable',
                'difficulty' => 'Easy',
                'cookTime' => '45 minutes',
                'ingredients' => 'Dried gabi leaves, Coconut milk, Sili, Shrimp paste, Garlic'
            ],
            4 => [
                'id' => 4,
                'name' => 'Pili Nut Brittle',
                'cuisine' => 'Dessert',
                'difficulty' => 'Easy',
                'cookTime' => '15 minutes',
                'ingredients' => 'Pili nuts, Sugar, Butter, Salt'
            ],
            5 => [
                'id' => 5,
                'name' => 'Suam na Mais',
                'cuisine' => 'Soup',
                'difficulty' => 'Easy',
                'cookTime' => '25 minutes',
                'ingredients' => 'Young corn, Malunggay leaves, Shrimp, Onion, Ginger'
            ],
            6 => [
                'id' => 6,
                'name' => 'Ginataang Manok',
                'cuisine' => 'Meat',
                'difficulty' => 'Medium',
                'cookTime' => '50 minutes',
                'ingredients' => 'Native chicken, Coconut milk, Sili, Ginger, Lemongrass'
            ],
            7 => [
                'id' => 7,
                'name' => 'Tinutungang Manok',
                'cuisine' => 'Meat',
                'difficulty' => 'Medium',
                'cookTime' => '45 minutes',
                'ingredients' => 'Native chicken, Burnt coconut milk, Sili, Ginger, Lemongrass'
            ],
        ];
    }

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
        
        $recipe = $recipes[$id];
        return view('recipes.show', ['recipe' => $recipe]);
    }

        public function featured()
    {
        $recipes = $this->getRecipes();
        $recipe = $recipes[3];  
        return view('recipes.show', ['recipe' => $recipe]);  
    }

        public function filter($cuisine = null)  
    {
        $recipes = $this->getRecipes();
        
        if ($cuisine === null) {
            $filtered = $recipes;
        } else {
            $filtered = array_filter($recipes, function($recipe) use ($cuisine) {
                return $recipe['cuisine'] === $cuisine;
            });
        }
        
        return view('recipes.filter', [
            'recipes' => $filtered,
            'cuisine' => $cuisine
        ]);
    }
}