<?php
require_once('../Connection.php'); // Include your database connection script

$recipeNames = [
    "Spaghetti Carbonara",
    "Chicken Parmesan",
    "Grilled Salmon",
    "Vegetable Stir-Fry",
    "Margherita Pizza",
    "Beef Tacos",
    "Caprese Salad",
    "Chicken Alfredo",
    "Shrimp Scampi",
    "Veggie Burger",
    "Garlic Butter Shrimp Pasta",
    "Mushroom Risotto",
    "BBQ Pulled Pork Sandwich",
    "Caesar Salad",
    "Sushi Rolls",
    "Chicken Fajitas",
    "Eggplant Parmesan",
    "Chocolate Cake",
    "Chicken Curry",
    "Spinach and Feta Stuffed Chicken",
    "Beef Stir-Fry",
    "Lemon Herb Roasted Chicken",
    "Pasta Primavera",
    "Tiramisu",
    "Grilled Vegetables",
    "Fish Tacos",
    "Ratatouille",
    "Pesto Pasta",
    "Beef and Broccoli Stir Fry",
    "Shrimp and Grits"
];

for ($i = 1; $i <= 30; $i++) {
    $recipeName = $recipeNames[array_rand($recipeNames)];
    $description = "Description for $recipeName. This is a delicious and easy-to-make recipe that you will love!";
    $imagePath = "image$i.jpg";

    $ingredients = "";
    $numIngredients = rand(3, 10);
    for ($j = 1; $j <= $numIngredients; $j++) {
        $ingredients .= "Ingredient $j, ";
    }
    $ingredients = rtrim($ingredients, ', '); // Remove trailing comma and space

    $isVegetarian = rand(0, 1); // Randomly set as vegetarian (1) or non-vegetarian (0)

    $sql = "INSERT INTO recipes (recipe_name, description, image_path, ingredients, is_vegetarian) 
            VALUES ('$recipeName', '$description', '$imagePath', '$ingredients', '$isVegetarian')";

    if ($conn->query($sql) !== TRUE) {
        echo "Error inserting recipe: " . $conn->error;
    }
}

echo "Dummy recipes inserted successfully";

// Close the database connection
$conn->close();
?>