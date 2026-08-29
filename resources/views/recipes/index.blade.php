<!DOCTYPE html>
<html>
<head>
    <title>Recipes</title>
</head>
<body>
    <h1>Recipes</h1>
    <p>By Ronnie Vargas</p>
    
    <table border="1">
        <tr>
            <th>Recipe Name</th>
            <th>Cuisine</th>
            <th>Difficulty</th>
            <th>Cook Time</th>
            <th>Action</th>
        </tr>
        @foreach ($recipes as $recipe)
            <tr>
                <td>{{ $recipe['name'] }}</td>
                <td>{{ $recipe['cuisine'] }}</td>
                <td>{{ $recipe['difficulty'] }}</td>
                <td>{{ $recipe['cookTime'] }}</td>
                <td>
                    <a href="{{ route('recipes.show', $recipe['id']) }}">View</a>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>