<?php include 'includes/header.php'; ?>

<form onsubmit="return validateForm(this)">
    <h2>Sign Up</h2>
    <label for="full_name">Full Name:</label>
    <input type="text" id="full_name" name="full_name" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <button type="submit">Sign Up</button>
</form>

<?php include 'includes/footer.php'; ?>
