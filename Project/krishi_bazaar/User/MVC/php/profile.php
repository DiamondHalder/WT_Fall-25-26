<?php
require_once("../php/seller_auth.php");  


$seller = $_SESSION['seller'] ?? [
    'name' => 'Sagor',
    'email' => 'Sagor@gmail.com',
    'phone' => '123452341234',
    'shop_name' => 'Sagor shop',
    'address' => 'Barishal',
    'password' => '1234'
];


$message = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_profile'])) {
    $seller['name'] = $_POST['name'];
    $seller['email'] = $_POST['email'];
    $seller['phone'] = $_POST['phone'];
    $seller['shop_name'] = $_POST['shop_name'];
    $seller['address'] = $_POST['address'];
    $seller['password'] = $_POST['password'];

    $message = "Profile updated successfully";

    
    $_SESSION['seller'] = $seller;
}


include("../html/profile.php");
