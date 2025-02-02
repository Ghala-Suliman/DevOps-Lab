<?php include 'includes/header.php'; ?>

<div class="banner">
    <h1>My Profile</h1>
</div>

<form>
    <h2>Profile Details</h2>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="John Doe" readonly>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="john@example.com" readonly>

    <a href="edit_profile.php" class="btn-primary" style="text-decoration: none; display: inline-block;">Edit Profile</a>
</form>

<?php include 'includes/footer.php'; ?>
