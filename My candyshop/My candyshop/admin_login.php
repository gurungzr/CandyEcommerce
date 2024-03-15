<?php
session_start();

// Check if admin is already logged in, redirect to admin panel if true
if(isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
    header("location: admin_panel.php");
    exit;
}

// Check if the login form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Perform admin authentication here (e.g., check username and password against a database)
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Example authentication (replace with your own logic)
    if ($username === "admin" && $password === "admin123") {
        // Authentication successful, mark user as logged in as admin
        $_SESSION['admin_logged_in'] = true;
        header("location: admin_panel.php");
        exit;
    } else {
        // Authentication failed, display error message
        $error_message = "Invalid username or password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
</head>
<body>
    <h2>Admin Login</h2>
    <?php if(isset($error_message)) { ?>
        <p style="color: red;"><?php echo $error_message; ?></p>
    <?php } ?>
    <form method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username"><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
