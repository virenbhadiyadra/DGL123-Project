<?php
require_once('Connection.php');

$sql = "CREATE TABLE IF NOT EXISTS recipes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    recipe_name VARCHAR(255) NOT NULL,
    description TEXT,
    image_path VARCHAR(255),
    ingredients TEXT,
    is_vegetarian BOOLEAN,
    is_tranding BOOLEAN
)";

if ($conn->query($sql) === TRUE) {
    echo "Table 'recipes' created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>