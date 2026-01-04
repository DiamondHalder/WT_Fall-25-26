<?php
$username = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    if (empty($username) || empty($password)) 
    {
        $error = "Please enter both username and password";
    } 
    elseif ($username == "admin" && $password == "admin123") 
    {
        header("Location: dashboard.php");
        exit();
    } 
    else 
    {
        $error = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body class="login-page">
    <div class="login-container">
        <div class="login-box">
            <?php if (!empty($error)): ?>
                <div style="color: red; margin-bottom: 15px; padding: 10px; background: #ffe6e6; border-radius: 5px;">
                    <?php echo $error; ?>
                </div>
            <?php endif; ?>
            <form action="#" method="POST">
                <div class="input-group">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username"  value="<?php echo htmlspecialchars($username); ?>" required>
                </div>
                
                <div class="input-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                
                <button type="submit" class="login-btn">Login</button>
            </form>
        </div>
    </div>
</body>
</html>