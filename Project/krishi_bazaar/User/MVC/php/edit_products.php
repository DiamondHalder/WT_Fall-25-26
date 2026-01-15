<?php
require_once("../php/seller_auth.php");
include("../db/db.php");

$error = "";
$message = "";

$seller_id = $_SESSION['seller_id'];
$product_id = $_GET['product_id'] ?? NULL;

if (empty($product_id)){
    die("Invalid product access.");
}
$sql = "SELECT * FROM products WHERE product_id = '$product_id' AND seller_id = '$seller_id'";



include("../html/edit_products.php");
