<?php 
session_start();


session_unset();
session_destroy();

if(isset($_COOKIE['remember_me'])){
    setcookie("user_role","",time() - 3600, "/");
    setcookie("user_email","",time() - 3600, "/");
}

header("Location: login.php");
exit();

?>