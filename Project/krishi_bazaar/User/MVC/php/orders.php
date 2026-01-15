<?php
require_once("seller_auth.php");
include("../db/db.php");


$seller_id = $_SESSION['seller_id'];
$message = "";
$error = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

     $cart_id = $_POST['cart_id'] ?? NULL;
     $product_id = $_POST['product_id'] ?? NULL;
     $quantity = $_POST['quantity'] ?? NULL;

     if (isset($_POST['confirm'])) {

          $priceRes = $conn->query("SELECT price FROM products WHERE product_id='$product_id' AND seller_id='$seller_id' ");

          $priceRow = $priceRes->fetch_assoc();

          if ($priceRow) {
              
               $amount = $priceRow['price'] * $quantity;
               //cart update
               $conn->query("UPDATE cart SET status='shipped' WHERE cart_id='$cart_id' ");
               //product quantity update
               $conn->query("UPDATE products SET quantity = quantity - $quantity WHERE product_id='$product_id' ");
               //insert earnings
                $insertEarnings = $conn->query("INSERT INTO earnings (seller_id, order_id, amount) VALUES ('$seller_id', '$cart_id', '$amount') ");

                if ($insertEarnings) {
                    $message = "Order confirmed";
                }else {
                    $error = "Failed: " . $conn->error;
                }
          } else {
                $error = "Price not found for product.";
          }

          

          
     }

     if (isset($_POST['decline'])) {

          $conn->query("UPDATE cart SET status='declined' WHERE cart_id='$cart_id' ");

          $message = "Order canceled successfully.";
     }
}

$sql = "SELECT c.cart_id, c.customer_id, c.quantity, c.status, p.product_id, p.name AS product_name, p.price,(p.price * c.quantity) AS total_price FROM cart c JOIN products p ON c.product_id = p.product_id WHERE p.seller_id = '$seller_id' AND c.status = 'pending' ";

$result = $conn->query($sql);
$orders = [];
while ($row = $result->fetch_assoc()) {
     $orders[] = $row;
}


include("../html/orders.php");
