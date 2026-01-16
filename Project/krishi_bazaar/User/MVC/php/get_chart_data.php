<?php
require_once("seller_auth.php");
include("../db/db.php");

$seller_id = $_SESSION['seller_id'];
//pie
$pieQuery = $conn->query("SELECT p.name, SUM(o.total_price) AS total_value
                          FROM orders o
                          JOIN products p ON o.product_id = p.product_id
                          WHERE o.seller_id='$seller_id'
                          GROUP BY p.product_id");
                          
$pieRes=$conn->query($pieQuery);
$pieData = [];

while ($row = $pieQuery->fetch_assoc()) {
    $pieData[] = $row;
}

//bar
$barQuery = $conn->query("SELECT name, price FROM products WHERE seller_id='$seller_id'");
$barRes = $conn->query($barQuery);
$barData = [];