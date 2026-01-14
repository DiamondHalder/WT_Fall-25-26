<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Profile</title>
    <style>body { font-family: sans-serif; margin: 50px; }</style>
</head>
<body>
    <h2>User Profile Information</h2>
    <p><strong>Username:</strong> <?php echo $_SESSION["username"]; ?></p>
    <p><strong>User Role:</strong> <?php echo $_SESSION["user_role"]; ?></p>
    <p><strong>Login Time:</strong> <?php echo $_SESSION["login_time"]; ?></p>
    
    <br>
    <a href="dashboard.php">Back to Dashboard</a>
</body>
</html>