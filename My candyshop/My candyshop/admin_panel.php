<?php
session_start();

// Check if the user is authenticated as an admin
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    // Redirect to the admin login page if not logged in as admin
    header("location: admin_login.php");
    exit; // Stop further execution of the script
}

// Display admin panel content here
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
</head>
<body>
    <h1>Welcome to the Admin Panel</h1>
    <!-- Admin panel content goes here -->
    <p>You are logged in as an admin.</p>
    <a href="logout.php">Logout</a> <!-- Link to logout script -->
</body>
</html>
