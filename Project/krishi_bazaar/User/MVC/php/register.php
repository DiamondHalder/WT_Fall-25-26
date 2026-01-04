<?php
session_start();

$message = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {

    //demo
    $seller = [
        'name'      => $_POST['name'],
        'email'     => $_POST['email'],
        'phone'     => $_POST['phone'],
        'shop_name' => $_POST['shop_name'],
        'address'   => $_POST['address'],
        'password'  => $_POST['password'] 
    ];

   
    $_SESSION['seller'] = $seller;

    $message = "Registration successful. You can login now.";
}

include("../html/register.php");
