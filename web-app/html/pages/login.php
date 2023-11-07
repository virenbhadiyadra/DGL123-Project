<?php
require_once('../../../Database/Connection.php'); // Include your database connection script

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password']; // Note: You should hash the password for security, this is just a basic example

    // Check the database for the username and hashed password (implement your own validation logic)
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Authentication successful, redirect to home page or dashboard
        header("Location: home.php");
        exit();
    } else {
        // Authentication failed, display an error message or redirect to login page with an error flag
        header("Location: login.html?error=1");
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
           <h1>Recipe System Login</h1>
           <form action="#" method="post">
               <label for="username">Username:</label>
               <input type="text" id="username" name="username" required><br>
               <label for="password">Password:</label>
               <input type="password" id="password" name="password" required><br>
               <button type="submit">Login</button>
           </form>
           <p>Don't have an account? <a href="signup.php">Sign up here</a></p>
        </div>
    </div>
    <?php include('../components/footer.php'); ?>
</body>

</html>