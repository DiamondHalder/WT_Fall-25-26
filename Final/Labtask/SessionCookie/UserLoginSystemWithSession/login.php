<?php
session_start();

// লগইন করা থাকলে ড্যাশবোর্ডে পাঠিয়ে দিবে
if (isset($_SESSION["username"])) {
    header("Location: dashboard.php");
    exit();
}

$username_error = "";
$password_error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST["username"];
    $pass = $_POST["password"];

    if (empty($user)) {
        $username_error = "Username is Required";
    }
    if (empty($pass)) {
        $password_error = "Password is Required";
    }

    // Hardcoded credentials চেক [cite: 127]
    if (empty($username_error) && empty($password_error)) {
        if ($user == "admin" && $pass == "admin123") {
            // সেশনে ডেটা জমা রাখা 
            $_SESSION["username"] = $user;
            $_SESSION["login_time"] = date("h:i:sa");
            $_SESSION["user_role"] = "Administrator";

            header("Location: dashboard.php");
            exit();
        } else {
            $username_error = "Invalid username or password";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body { font-family: sans-serif; margin: 50px; }
        form { border: 1px solid #ccc; padding: 20px; width: 300px; border-radius: 5px; }
        .error { color: red; }
    </style>
</head>
<body>
    <h2>Login Page</h2>
    <form method="post" action="">
        Username: <br>
        <input type="text" name="username">
        <br><span class="error"><?php echo $username_error; ?></span><br>

        Password: <br>
        <input type="password" name="password">
        <br><span class="error"><?php echo $password_error; ?></span><br><br>

        <button type="submit">Login</button>
    </form>
</body>
</html>