<?php
// Include your database connection code here
// Example: require_once 'db_connection.php';

// Fetch trending recipes from your database
// Example SQL: SELECT * FROM recipes WHERE trending = 1
// Make sure to sanitize and validate the data as needed

$trendingRecipes = [
    // Example trending recipes data
    ['title' => 'Trending Recipe 1', 'description' => 'This is the first trending recipe.'],
    ['title' => 'Trending Recipe 2', 'description' => 'This is the second trending recipe.'],
    ['title' => 'Trending Recipe 3', 'description' => 'This is the third trending recipe.'],
    // Add more recipes as needed
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trending Recipes - Recipes.in</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Recipes.in</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="trending.php">Trending</a></li>
                <li><a href="#">Categories</a></li>
                <li><a href="#">Search</a></li>
                <li><a href="register.php">Register</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="trending-recipes">
            <h2>Trending Recipes</h2>
            <ul>
                <?php foreach ($trendingRecipes as $recipe) : ?>
                    <li>
                        <h3><?= $recipe['title'] ?></h3>
                        <p><?= $recipe['description'] ?></p>
                    </li>
                <?php endforeach; ?>
            </ul>
        </section>
    </main>
    <footer>
        <p>&copy; 2023 Recipes.in</p>
    </footer>
</body>
</html>
