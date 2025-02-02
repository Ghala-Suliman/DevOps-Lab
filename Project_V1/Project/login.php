<?php include 'includes/header.php'; ?>

<form action="process_login.php" method="POST">
    <h2>Login</h2>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <button type="submit">Login</button>

    <!-- Display error message if present -->
    <?php
    if (isset($_GET['error'])) {
        echo '<p style="color: red; text-align: center;">' . htmlspecialchars($_GET['error']) . '</p>';
    }
    ?>

    <p>
        Don't have an account? 
        <a href="signup.php" class="signup-btn">SIGN UP NOW!</a>
    </p>
</form>

<?php include 'includes/footer.php'; ?>
