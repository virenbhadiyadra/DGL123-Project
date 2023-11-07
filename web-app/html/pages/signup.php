<?php
require_once('../../../Database/Connection.php'); // Include your database connection script

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password']; // Note: You should hash the password for security, this is just a basic example

    // Check if the username or email already exists in the database (implement your own validation logic)
    $checkUserQuery = "SELECT * FROM users WHERE username='$username' OR email='$email'";
    $result = $conn->query($checkUserQuery);

    if ($result->num_rows > 0) {
        // User or email already exists, handle accordingly (display error message, redirect, etc.)
        header("Location: signup.php?error=1");
        exit();
    }

    // Insert new user data into the users table
    $insertUserQuery = "INSERT INTO users (name, email, username, password) VALUES ('$name', '$email', '$username', '$password')";

    if ($conn->query($insertUserQuery) === TRUE) {
        // Registration successful, redirect to login page
        header("Location: login.php?success=1");
        exit();
    } else {
        // Registration failed, handle accordingly (display error message, redirect, etc.)
        header("Location: signup.php?error=2");
        exit();
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Recipe System Login</title>
</head>

<body>
    <?php include('../components/header.php'); ?>
    <div class="content-login">
        <div class="login-container">
            <h1>Recipe System Registration</h1>
            <form action="#" method="post">
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" required><br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required><br>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required><br>
                <button type="submit">Register</button>
            </form>
            <p>Already have an account? <a href="login.php">Login here</a></p>
        </div>
    </div>
    <?php include('../components/footer.php'); ?>
</body>

</html>