<!DOCTYPE html>
<html>
<head>
    <title>{{ $recipe['name'] }}</title>
</head>
<body>
    <h1>{{ $recipe['name'] }}</h1>
    
    <p><strong>Cuisine:</strong> {{ $recipe['cuisine'] }}</p>
    <p><strong>Difficulty:</strong> {{ $recipe['difficulty'] }}</p>
    <p><strong>Cook Time:</strong> {{ $recipe['cookTime'] }}</p>
    <p><strong>Ingredients:</strong> {{ $recipe['ingredients'] }}</p>
    
    <p>By Ronnie Vargas</p>
    
    <a href="{{ route('recipes.index') }}">Back to Recipes</a>
</body>
</html>