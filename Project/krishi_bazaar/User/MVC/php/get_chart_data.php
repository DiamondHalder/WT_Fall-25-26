<?php
require_once("seller_auth.php");
include("../db/db.php");

$seller_id = $_SESSION['seller_id'];
// Orders Bar
$orderQuery = "SELECT p.name, SUM(o.total_price) as total_income 
               FROM orders o 
               JOIN products p ON o.product_id = p.product_id 
               WHERE o.seller_id = '$seller_id' 
               GROUP BY p.product_id";
$orderRes = $conn->query($orderQuery);
$orderData = [];
while($row = $orderRes->fetch_assoc()){
    $orderData[] = $row;
}

// Product Line Graph
$productQuery = "SELECT name, price FROM products WHERE seller_id = '$seller_id' LIMIT 10";
$productRes = $conn->query($productQuery);
$productData = [];
while($row = $productRes->fetch_assoc()){
    $productData[] = $row;
}

$response = [
    "orderStats" => $orderData,
    "productInfo" => $productData
];

header('Content-Type: application/json');
echo json_encode($response);
?>