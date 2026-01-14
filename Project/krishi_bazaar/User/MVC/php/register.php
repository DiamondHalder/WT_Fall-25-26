<?php
session_start();

include("../db/db.php");

$success = "";
$error = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {

    
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $shop_name = trim($_POST['shop_name']);
    $address = trim($_POST['address']);
    $password = trim($_POST['password']);

    if (empty($name) || empty($email) || empty($phone) || empty($shop_name) || empty($address) || empty($password)) {
        $error = "All fields are required.";
    } else {

       $hashPassword = password_hash($password, PASSWORD_DEFAULT);

       $sql = "INSERT INTO sellers (name, email, phone, shop_name, address, password) VALUES ('$name', '$email', '$phone', '$shop_name', '$address', '$hashPassword')";
         if ($conn->query($sql)) {
            $success = "Registration successful! You can now log in."; 
        } else {
            $error = "Error: " . $conn->error;
        }
    }
}

include("../html/register.php");
