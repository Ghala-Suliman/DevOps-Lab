<?php
// Start the session
session_start();

// Simulate a login session (Remove this in production and replace with real login logic)
if (!isset($_SESSION['role'])) {
    $_SESSION['role'] = 'visitor'; // Possible roles: visitor, user, admin
}

$role = $_SESSION['role']; // Get the current user's role
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe Sharing Platform</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/scripts.js" defer></script>
</head>
<body>
<header>
    <img src="images/logo.png" alt="Recipe Sharing Logo">
    <nav>
        <a href="index.php">Home</a>

        <?php if ($role === 'user' || $role === 'admin'): ?>
            <a href="my_recipes.php">My Recipes</a>
            <a href="profile.php">Profile</a>
			 <a href="search.php">Search Recipes</a>
        <?php endif; ?>

       

        <?php if ($role === 'admin'): ?>
            <a href="admin_dashboard.php">Admin Dashboard</a>
        <?php endif; ?>

        <?php if ($role === 'visitor'): ?>
            <a href="login.php">Login / Sign Up</a>
        <?php else: ?>
            <a href="logout.php">Logout</a>
        <?php endif; ?>
    </nav>
</header>
