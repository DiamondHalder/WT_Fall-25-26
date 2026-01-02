<?php
require_once("seller_auth.php"); 

$message = "";
$error = "";

if($_SERVER["REQUEST_METHOD"]=="POST"){

    if(isset($_POST['delete_product'])){
        $product_id = $_POST['product_id'];
        
        $error = "Product Id $product_id deleted.";
    }

    if(isset($_POST['edit_product'])){
        $product_id = $_POST['product_id'];
        // Redirect to edit page with product_id
        header("Location: edit_products.php?product_id=$product_id");
        exit;
    }
}


include("../html/my_products.php");
