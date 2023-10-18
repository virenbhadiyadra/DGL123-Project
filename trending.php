<?php
$pageTitle = 'Home';
include('header.php');
?>
<?php


$trendingRecipes = [
    
    ['title' => 'Trending Recipe 1', 'description' => 'This is the first trending recipe.'],
    ['title' => 'Trending Recipe 2', 'description' => 'This is the second trending recipe.'],
    ['title' => 'Trending Recipe 3', 'description' => 'This is the third trending recipe.'],
    
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
