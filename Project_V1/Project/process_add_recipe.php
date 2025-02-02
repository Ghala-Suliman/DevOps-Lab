<?php
// Database connection
include 'includes/db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $prep_time = $_POST['prep_time'];
    $difficulty = $_POST['difficulty'];
    $type = $_POST['type'];
    $steps = $_POST['steps'];
    $ingredients = $_POST['ingredients'];

    // Handle image upload
    $image = $_FILES['recipe_image']['name'];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($image);

    if (move_uploaded_file($_FILES['recipe_image']['tmp_name'], $target_file)) {
        // Insert into database
        $sql = "INSERT INTO Recipes (title, description, preparation_time, difficulty_level, recipe_type, steps, ingredients, image)
                VALUES ('$title', '$description', '$prep_time', '$difficulty', '$type', '$steps', '$ingredients', '$image')";

        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Recipe added successfully!'); window.location.href='my_recipes.php';</script>";
        } else {
            echo "<script>alert('Error adding recipe. Please try again.');</script>";
        }
    } else {
        echo "<script>alert('Error uploading image.');</script>";
    }
}
?>
