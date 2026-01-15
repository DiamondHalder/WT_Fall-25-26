<?php
require_once("seller_auth.php"); 
include("../db/db.php");

$seller_id = $_SESSION["seller_id"];

$message = "";
$error = "";

if($_SERVER["REQUEST_METHOD"]=="POST"){

    if(isset($_POST['delete_product'])){
        $product_id = intval($_POST['product_id']);

        $sql = "DELETE FROM products WHERE product_id='$product_id' AND seller_id='$seller_id'";
        if(!$conn->query($sql)){
            $error = "Delete Failed " . $conn->error;
        } else {

        $message = "Product Id deleted successfully.";
    }
    }

    if(isset($_POST['edit_product'])){
        $product_id = intval($_POST['product_id']);
        
        header("Location: edit_products.php?product_id=$product_id");
        exit();
    }
}

$products = [];


include("../html/my_products.php");
