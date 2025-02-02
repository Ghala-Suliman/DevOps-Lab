<?php
session_start();
include 'includes/db_connection.php'; // Include database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if email and password are provided
    if (empty($email) || empty($password)) {
        header('Location: login.php?error=Please fill in all fields');
        exit();
    }

    // Query database to find the user with the provided email and password
    $sql = "SELECT * FROM Users WHERE email = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ss', $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();

        // Set session variables and redirect to index.php
        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['role'] = $user['role'];
        $_SESSION['full_name'] = $user['full_name'];
        header('Location: index.php');
        exit();
    } else {
        // Invalid email or password
        header('Location: login.php?error=Invalid email or password');
        exit();
    }
} else {
    // If the user tries to access this script directly, redirect to login
    header('Location: login.php');
    exit();
}
?>
