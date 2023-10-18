<?php
// Include your database connection code here
// Example: require_once 'db_connection.php';

// Fetch a list of available recipe categories from your database
// Example SQL: SELECT DISTINCT category FROM recipes
// Make sure to sanitize and validate the data as needed

$categories = [
    // Example categories data
    'Breakfast',
    'Lunch',
    'Dinner',
    // Add more categories as needed
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe Categories - Recipes.in</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Recipes.in</h1>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="trending.php">Trending</a></li>
                <li><a href="categories.php">Categories</a></li>
                <li><a href="#">Search</a></li>
                <li><a href="register.php">Register</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="recipe-categories">
            <h2>Recipe Categories</h2>
            <ul>
                <?php foreach ($categories as $category) : ?>
                    <li><a href="category.php?name=<?= urlencode($category) ?>"><?= $category ?></a></li>
                <?php endforeach; ?>
            </ul>
        </section>
    </main>
    <footer>
        <p>&copy; 2023 Recipes.in</p>
    </footer>
</body>
</html>
