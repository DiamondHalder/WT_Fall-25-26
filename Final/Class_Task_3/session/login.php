<?php
session_start();


if(isset($_POST['login'])){
    $user_id=$_POST['user_id'];
    $password=$_POST['password'];

    if ($user_id == "admin" && $password == "1234") {
        $_SESSION['user'] = $user_id; 
        header("Location: welcome.php");
        exit; 
    } else {
        echo "Invalid ID or Password!";
    }
}



    ?>
    <!DOCTYPE html>
    <html>
        <body>
            <h2>Login Page</h2>
            <form method="post">
                <input type="text" name="user_id"  placeholder="Enter your user id" required><br><br>
                <input type="password" name="password" placeholder="Enter password" required><br><br>
                <button type="submit" name="login">Login</button>
            </form>
        </body>
    </html>

