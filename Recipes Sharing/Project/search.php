<?php include 'includes/header.php'; ?>

<div class="banner">
    <h1>Find Your Favorite Recipes</h1>
    <p>You will find everything you want—it’s yummy in your tummy!</p>
</div>

<form>
    <h2>Search Recipes</h2>
    <label for="search">Search by Name or Ingredient:</label>
    <input type="text" id="search" name="search" placeholder="Enter recipe name or ingredients">

    <h3>Filter Options</h3>
    <label for="prep_time">Preparation Time:</label>
    <select id="prep_time" name="prep_time">
        <option value="">Select</option>
        <option value="30">Less than 30 minutes</option>
        <option value="60">30 to 60 minutes</option>
        <option value="120">More than 1 hour</option>
    </select>

    <label for="difficulty">Difficulty Level:</label>
    <select id="difficulty" name="difficulty">
        <option value="">Select</option>
        <option value="Easy">Easy</option>
        <option value="Medium">Medium</option>
        <option value="Hard">Hard</option>
    </select>

    <label for="type">Type of Recipe:</label>
    <select id="type" name="type">
        <option value="">Select</option>
        <option value="Dessert">Dessert</option>
        <option value="Main Course">Main Course</option>
        <option value="Snack">Snack</option>
    </select>

    <button type="submit">Search</button>
</form>

<?php include 'includes/footer.php'; ?>
