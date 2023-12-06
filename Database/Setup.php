<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Recipe System</title>
</head>

<body>
    <?php include('../../../Database/Connection.php'); ?>
    <?php include('../components/header.php'); ?>
    <?php include('../components/footer.php'); ?>

    <div class="content">
        <h1>Categories</h1>

        <div class="card-container">
            <?php
            // Fetch data from the database
            $query = "SELECT * FROM `recipes` ORDER BY `recipes`.`is_vegetarian` ASC";
            $result = mysqli_query($connection, $query);

            // Loop through the results and generate HTML for each card
            while ($row = mysqli_fetch_assoc($result)) {
                $recipeName = $row['recipe_name'];
                $imagePath = $row['image_path'];
                $isVegetarian = $row['is_vegetarian'];

                // You can customize the HTML structure for your card here
                ?>
                <div class="card">
                    <img src="<?php echo $imagePath; ?>" alt="<?php echo $recipeName; ?>">
                    <h2><?php echo $recipeName; ?></h2>
                    <p><?php echo ($isVegetarian ? 'Vegetarian' : 'Non-Vegetarian'); ?></p>
                </div>
            <?php } ?>
        </div>
    </div>

</body>

</html>
