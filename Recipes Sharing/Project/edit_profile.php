<?php include 'includes/header.php'; ?>

<div class="banner">
    <h1>Edit Profile</h1>
</div>

<form method="POST" action="process_edit_profile.php">
    <h2>Update Profile Information</h2>
    <label for="full_name">Full Name:</label>
    <input type="text" id="full_name" name="full_name" value="John Doe" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="john@example.com" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" placeholder="Enter a new password">

    <button type="submit">Save Changes</button>
</form>

<?php include 'includes/footer.php'; ?>
