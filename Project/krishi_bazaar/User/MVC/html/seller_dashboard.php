<?php 
require_once("../php/seller_auth.php");
?>

<!DOCTYPE html>
<html>

<head>
    <?php include("includes/head.php"); ?>
</head>

<body>

    <?php include("includes/header.php"); ?>

    <div class="container">

        <div class="sidebar">
            <a href="../php/seller_dashboard.php">Dashboard</a>
            <a href="../php/add_product.php">Add Product</a>
            <a href="../php/my_products.php">My Products</a>
            <a href="../php/seller_orders.php">Orders</a>
            <a href="../php/earnings.php">Seller Earnings</a>
            <a href="../php/profile.php">Profile</a>
        </div>

        <div class="content">
            <h2>Seller Dashboard</h2><br>

            <div class="card-container">
                <div class="card">
                    <h3>Total Orders</h3>
                    <p>---</p>
                </div>

                <div class="card">
                    <h3>Pending Orders</h3>
                    <p>---</p>
                </div>

                <div class="card">
                    <h3>Total Sales</h3>
                    <p>---</p>
                </div>
            </div>
        </div>

    </div>

    <?php include("includes/footer.php"); ?>

</body>
</html>
