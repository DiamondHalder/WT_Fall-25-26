<?php
require_once("../php/seller_auth.php");

// Process form submission
$message = "";
$product_id = $_GET['product_id'] ?? '';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Normally here you will update DB
    $message = "Product Id $product_id updated successfully.";
}

// Redirect to html view
include("../html/edit_products.php");
