<?php
$pageTitle = 'Home';
include('header.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipes.in</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <main>
        <!-- Display Trending Recipes -->
        <section id="trending">
            <h2>Trending Recipes</h2>
            <!-- You can list trending recipes here using PHP -->
        </section>

        <!-- Recipe Categories -->
        <section id="categories">
            <h2>Categories</h2>
            <ul>
                <li><a href="#">Breakfast</a></li>
                <li><a href="#">Lunch</a></li>
                <li><a href="#">Dinner</a></li>
                <!-- Add more categories as needed -->
            </ul>
        </section>

        <!-- Recipe Submission Form -->
        <section id="submit-recipe">
            <h2>Submit Your Own Recipe</h2>
            <form action="submit_recipe.php" method="post">
                <label for="recipeName">Recipe Name:</label>
                <input type="text" name="recipeName" required>

                <label for="category">Category:</label>
                <select name="category" required>
                    <option value="Breakfast">Breakfast</option>
                    <option value="Lunch">Lunch</option>
                    <option value="Dinner">Dinner</option>
                    <!-- Add more categories as needed -->
                </select>

                <label for="instructions">Instructions:</label>
                <textarea name="instructions" required></textarea>

                <input type="submit" value="Submit Recipe">
            </form>
        </section>
    </main>
    
</body>
</html>
<?php
include('footer.php');
?>
