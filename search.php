<?php
$pageTitle = 'Home';
include('header.php');
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
