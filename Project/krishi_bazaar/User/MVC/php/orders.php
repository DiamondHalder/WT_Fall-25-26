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

        $priceRow = $priceRes->fetch_assoc();
        $amount = $priceRow['price'] * $quantity;

        $conn->query("INSERT INTO earnings (seller_id, amount) VALUES ('$seller_id', '$amount') ");

        $message = "Order confirmed and shipped successfully.";

   }

   if(isset($_POST['decline'])) {

        $conn->query("UPDATE cart SET status='decline' WHERE cart_id='$cart_id' ");

        $message = "Order canceled successfully.";

   }
}

$sql = "SELECT c.cart_id, c.customer_id, c.quantity, c.status, p.name AS product_name, p.price,(p.price * c.quantity) AS total_price FROM cart c JOIN products p ON c.product_id = p.product_id WHERE p.seller_id = '$seller_id' AND c.status = 'pending' ";

$result = $conn->query($sql);
$orders = [];
while($row = $result->fetch_assoc()) {
    $orders[] = $row;
}


include("../html/orders.php");
