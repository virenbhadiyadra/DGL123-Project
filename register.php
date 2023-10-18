<?php
$pageTitle = 'Home';
include('header.php');
?>
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Recipes.in</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
   
    <main>
        <section id="registration">
            <h2>User Registration</h2>
            <form action="register.php" method="post">
                <label for="username">Username:</label>
                <input type="text" name="username" required>

                <label for="password">Password:</label>
                <input type="password" name="password" required>

                <input type="submit" value="Register">
            </form>
        </section>
    </main>
   
</body>
</html>
<?php
include('footer.php');
?>
