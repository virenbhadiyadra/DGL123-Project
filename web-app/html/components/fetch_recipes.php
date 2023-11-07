<?php
require_once('../../../Database/Connection.php'); // Include your database connection script

$sql = "SELECT * FROM recipes LIMIT 4";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $recipeName = $row['recipe_name'];
        $imagePath = $row['image_path'];
        $isVegetarian = $row['is_vegetarian'];

        echo '<div class="recipe-slide">
                <img src="../../media/recipe/' . $imagePath . '" alt="' . $recipeName . '">
                <div class="slide-content">
                    <h2>' . $recipeName . '</h2>
                    <p>' . ($isVegetarian ? 'Veg' : 'Non-Veg') . '</p>
                </div>
            </div>';
    }
} else {
    echo "No recipes found!";
}

// Close the database connection
$conn->close();
?>