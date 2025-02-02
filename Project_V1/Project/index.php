<?php include 'includes/header.php'; ?>

<?php
// Check if the user is logged in

$isLoggedIn = isset($_SESSION['role']) && $_SESSION['role'] !== 'visitor';
?>

<?php if ($isLoggedIn): ?>
    <!-- Display three horizontal sections for logged-in users -->
    <div class="sections">
        <div class="section">
            <a href="search.php?filter=pastries">
                <img src="images/MainMeals.png" alt="Just-Baked Pastries">
                <h2>Main Meals</h2>
                <p>Made fresh daily from premium ingredients</p>
            </a>
        </div>
        <div class="section">
            <a href="search.php?filter=breakfast">
                <img src="images/breakfast.png" alt="All-Day Breakfast">
                <h2>All-Day Breakfast</h2>
                <p>Comfort food you can enjoy any time of day</p>
            </a>
        </div>
        <div class="section">
            <a href="search.php?filter=desserts">
                <img src="images/desserts.png" alt="Divine Desserts">
                <h2>Divine Desserts</h2>
                <p>Guaranteed to satisfy every sweet craving</p>
            </a>
        </div>
    </div>
<?php else: ?>
    <!-- Display signup/login button for visitors -->
    <div class="welcomediv">
        <h1>Welcome to Recipe Sharing!</h1>
        <p>Share and discover delicious recipes from around the world 🌎</p>
        <a href="signup.php" class="btn-primary">Sign Up Now!</a>
    </div>
<?php endif; ?>

<?php include 'includes/footer.php'; ?>
