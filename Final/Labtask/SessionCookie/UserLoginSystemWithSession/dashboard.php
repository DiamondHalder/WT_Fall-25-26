<?php
session_start();

// সেশন না থাকলে লগইন পেজে পাঠিয়ে দিবে 
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        body { font-family: sans-serif; margin: 50px; }
        nav { margin-bottom: 20px; }
    </style>
</head>
<body>
    <nav>
        <a href="dashboard.php">Dashboard</a> | 
        <a href="profile.php">Profile</a> | 
        <a href="logout.php">Logout</a>
    </nav>

    <h2>Welcome to Dashboard</h2>
    <p>Hello, <strong><?php echo $_SESSION["username"]; ?></strong>!</p>
    <p>You logged in at: <?php echo $_SESSION["login_time"]; ?></p>
</body>
</html>