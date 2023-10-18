<?php
$pageTitle = 'Home';
include('header.php');
?>
<?php


$categories = [
    'Breakfast',
    'Lunch',
    'Dinner',
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
