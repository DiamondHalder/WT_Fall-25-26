<?php
require_once("seller_auth.php"); 

$message = "";
$error = "";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = trim($_POST["name"]);
    $category = trim($_POST["category"]);
    $price = trim($_POST["price"]);
    $quantity = trim($_POST["quantity"]);

    if($name=="" || $category=="" || $price=="" || $quantity==""){
        $error = "All fields are required.";
    } elseif (!is_numeric($price) || $price <= 0){
        $error = "Enter a valid price.";
    } elseif (!is_numeric($quantity) || $quantity < 1){
        $error = "Enter a valid quantity.";
    } else {
        
        $message = "Product added successfully.";
    }
}


include("../html/add_product.php");
