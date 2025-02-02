<?php
// Database connection
include 'includes/db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user_id = 1; // Replace with session user ID in a real application

    if (!empty($password)) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "UPDATE Users SET full_name='$full_name', email='$email', password='$hashed_password' WHERE user_id=$user_id";
    } else {
        $sql = "UPDATE Users SET full_name='$full_name', email='$email' WHERE user_id=$user_id";
    }

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Profile updated successfully!'); window.location.href='profile.php';</script>";
    } else {
        echo "<script>alert('Error updating profile. Please try again.');</script>";
    }
}
?>
