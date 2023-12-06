<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/about-us.css">
    <title>About Us</title>
</head>

<body>
    <?php include('../../../Database/Connection.php'); ?>
    <?php include('../components/header.php'); ?>
    
    <div class="content about-us">
        <div class="left-content">
            <h1>About Us</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique urna ac libero aliquet,
                sed faucibus ipsum malesuada. Suspendisse vel orci vel sem bibendum laoreet nec at eros.
            </p>
            <p>
                Curabitur a felis a metus congue sodales. Duis euismod facilisis tristique. Nulla facilisi.
                Aenean ut libero nec tellus ullamcorper semper. Proin malesuada cursus neque.
            </p>
        </div>

        <div class="right-content">
            <img src="<?php echo "../../media/recipe/image1.jpg"; ?>" alt="About Us Image">
        </div>
    </div>
    
    <?php include('../components/footer.php'); ?>
</body>

</html>
