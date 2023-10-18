<?php
// Include your database connection code here
// Example: require_once 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get user input and perform basic validation
    $username = $_POST['username'];
    $password = $_POST['password'];
    $passwordHash = password_hash($password, PASSWORD_BCRYPT);

    // Insert user into the database (You should create a users table in your database)
    // Example SQL: INSERT INTO users (username, password) VALUES (:username, :password)
    // Don't forget to use prepared statements and error handling

    // Redirect to a login page after successful registration
    header('Location: login.php');
    exit;
}
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
    <footer>
        <p>&copy; 2023 Recipes.in</p>
    </footer>
</body>
</html>
