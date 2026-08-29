<!DOCTYPE html>
<html>
<head>
    <title>Recipes</title>
</head>
<body>
    @if ($cuisine === null)
        <h1>All Recipes</h1>
        <p>Showing {{ count($recipes) }} recipes</p>
    @else
        <h1>{{ $cuisine }} Recipes</h1>
        <p>Showing {{ count($recipes) }} recipe(s)</p>
    @endif
    
    <table border="1">
        <tr>
            <th>Recipe Name</th>
            <th>Cuisine</th>
            <th>Difficulty</th>
            <th>Cook Time</th>
        </tr>
        @foreach ($recipes as $recipe)
            <tr>
                <td>{{ $recipe['name'] }}</td>
                <td>{{ $recipe['cuisine'] }}</td>
                <td>{{ $recipe['difficulty'] }}</td>
                <td>{{ $recipe['cookTime'] }}</td>
            </tr>
        @endforeach
    </table>
    
    <p>By Ronnie Vargas</p>
    
    <a href="#">Back to Recipes</a>
</body>
</html>