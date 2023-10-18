<?php
// Include your database connection code here
// Example: require_once 'db_connection.php';

$searchResults = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['search'])) {
    // Get the user's search query and perform a search in your database
    // Example SQL: SELECT * FROM recipes WHERE title LIKE :searchTerm OR description LIKE :searchTerm
    // Make sure to use prepared statements and sanitize the input

    // Fetch and store search results in the $searchResults array
    // Example: $searchResults = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Recipes - Recipes.in</title>
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
                <li><a href="search.php">Search</a></li>
                <li><a href="register.php">Register</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="search-recipes">
            <h2>Search Recipes</h2>
            <form action="search.php" method="post">
                <input type="text" name="search" placeholder="Search for recipes..." required>
                <input type="submit" value="Search">
            </form>

            <?php if (!empty($searchResults)) : ?>
                <h3>Search Results:</h3>
                <ul>
                    <?php foreach ($searchResults as $recipe) : ?>
                        <li>
                            <h4><?= $recipe['title'] ?></h4>
                            <p><?= $recipe['description'] ?></p>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php elseif ($_SERVER['REQUEST_METHOD'] === 'POST') : ?>
                <p>No matching recipes found.</p>
            <?php endif; ?>
        </section>
    </main>
    <footer>
        <p>&copy; 2023 Recipes.in</p>
    </footer>
</body>
</html>
