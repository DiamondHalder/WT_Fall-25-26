<?php
if(session_status()===PHP_SESSION_NONE){
    session_start();
}

if(!isset($_SESSION['user_role']) && isset($_COOKIE['user_role'])){
    $_SESSION['user_role']=$_COOKIE['user_role'];
    $_SESSION['user_email']=$_COOKIE['user_email'] ?? nul;
}


if(!isset($_SESSION['user_role']) || $_SESSION['user_role'] !=='seller' ){
    header("Location: ../auth/login.php");
    exit();
}
?>