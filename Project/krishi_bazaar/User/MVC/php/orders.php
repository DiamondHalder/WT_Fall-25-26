<?php
require_once("seller_auth.php");
include("../db/db.php");


$seller_id = $_SESSION['seller_id'];
$message = "";
$error="";


if($_SERVER["REQUEST_METHOD"]=="POST"){

   $cart_id = $_POST['cart_id'] ?? NULL;
   $product_id = $_POST['product_id'] ?? NULL;
   $quantity = $_POST['quantity'] ?? NULL;

   if(isset($_POST['confirm'])) {

        $conn->query("UPDATE cart SET status='shipped' WHERE cart_id='$cart_id' ");

        $conn->query("UPDATE products SET quantity=quantity - $quantity WHERE product_id='$product_id' AND seller_id='$seller_id' ");

        $priceRes = $conn->query("SELECT price FROM products WHERE product_id='$product_id' ");

   }
}


include("../html/orders.php");
