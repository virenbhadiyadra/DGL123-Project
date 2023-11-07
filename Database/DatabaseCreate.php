<?php
$servername = "localhost";
$username = "root";
$password = "";
$databaseName = "recipe_system";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$databaseName = "recipe_system";
$sql = "CREATE DATABASE $databaseName";

if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
?>