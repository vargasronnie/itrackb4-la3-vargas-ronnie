# Recipes Application

## Questions

### Question 1: Route Order

Explain the order you placed your featured route and your detail route in, and what would happen if you swapped them.

**Your answer:**
I put the featured route at `/recipes/featured` ABOVE the detail route at `/recipes/{id}` because literal routes must be above wildcard routes. If I swapped them, the {id} route would match `/recipes/featured` first (with id="featured") and the featured route would never run.

### Question 2: Handling Missing IDs

What happens when someone visits an id that does not exist in your data, and what did you write to make that happen?

**Your answer:**
I check if the id exists using `if (!isset($recipes[$id]))`. If it doesn't exist, I call `abort(404)` which stops execution and returns a clean 404 page instead of a PHP error.

### Question 3: Why Named Routes

Why do your links use route names instead of typed URLs? Give one concrete thing that would break if they did not.

**Your answer:**
I use `route('recipes.index')` instead of `/recipes` because if I later change the URL to `/pantry`, a hardcoded link would 404. Using route names means all links update automatically.