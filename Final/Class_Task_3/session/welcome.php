<?php
session_start(); 


if (!isset($_SESSION['user'])) {
    header("Location: login.php"); 
    exit();
}
?>

<!DOCTYPE html>
<html>
<body>
    <h1>Login Successful!</h1>
    <p>Welcome, <?php echo $_SESSION['user']; ?>!</p> <a href="logout.php"><button>Logout</button></a>
</body>
</html>