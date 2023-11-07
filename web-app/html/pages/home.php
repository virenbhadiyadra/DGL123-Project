<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Recipe System</title>
</head>

<body>
    <?php include('../components/header.php'); ?>
    <div class="content">
        <div class="slider-container">
            <div class="slider">
                <div class="slide">
                    <img src="../../media/banner/image1.jpg" alt="Recipe 1">
                    <div class="slide-content">
                        <h2>Delicious Recipes</h2>
                        <p>Discover a variety of mouth-watering recipes to satisfy your cravings.</p>
                    </div>
                </div>
                <div class="slide">
                    <img src="../../media/banner/image2.jpg" alt="Recipe 2">
                    <div class="slide-content">
                        <h2>Healthy Choices</h2>
                        <p>Explore healthy recipes that are both nutritious and delicious.</p>
                    </div>
                </div>
                <div class="slide">
                    <img src="../../media/banner/image3.jpg" alt="Recipe 3">
                    <div class="slide-content">
                        <h2>Easy to Cook</h2>
                        <p>Learn simple and easy recipes that anyone can prepare at home.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="recipe-slider-container">
            <h1 class="slider-title">New Recipe</h1>
           <div class="recipe-slider">
               <?php include('../components/fetch_recipes.php'); ?>
           </div>
       </div>
        <script src="../../javascript/banner_slider.js"></script>
    </div>
    <?php include('../components/footer.php'); ?>
</body>

</html>