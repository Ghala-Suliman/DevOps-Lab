<?php include 'includes/header.php'; ?>

<div class="banner">
    <h1>Add a New Recipe</h1>
</div>

<form method="POST" action="process_add_recipe.php" enctype="multipart/form-data">
    <h2>Recipe Details</h2>
    <label for="title">Title:</label>
    <input type="text" id="title" name="title" placeholder="Enter recipe title" required>

    <label for="description">Description:</label>
    <textarea id="description" name="description" rows="4" placeholder="Enter recipe description" required></textarea>

    <label for="prep_time">Preparation Time:</label>
    <input type="text" id="prep_time" name="prep_time" placeholder="e.g., 30 minutes" required>

    <label for="difficulty">Difficulty Level:</label>
    <select id="difficulty" name="difficulty" required>
        <option value="Easy">Easy</option>
        <option value="Medium">Medium</option>
        <option value="Hard">Hard</option>
    </select>

    <label for="type">Type of Recipe:</label>
    <input type="text" id="type" name="type" placeholder="e.g., Dessert, Main Course" required>

    <label for="recipe_image">Upload Image:</label>
    <input type="file" id="recipe_image" name="recipe_image" accept="image/*" required>

    <label for="steps">Steps:</label>
    <textarea id="steps" name="steps" rows="6" placeholder="Enter step-by-step instructions" required></textarea>

    <label for="ingredients">Ingredients:</label>
    <textarea id="ingredients" name="ingredients" rows="4" placeholder="Enter ingredients separated by commas" required></textarea>

    <button type="submit">Submit Recipe</button>
</form>

<?php include 'includes/footer.php'; ?>
