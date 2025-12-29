<?php 
require_once("../includes/seller_auth.php");
include("../includes/header.php"); 

?>

<!DOCTYPE html>
<html>

<head>

    <?php include("../includes/head.php"); ?>

</head>

<body>
    

    <div class="container">

        <div class="sidebar">
            <a href="dashboard.php">Dashboard</a>
            <a href="add_product.php">Add Product</a>
            <a href="my_products.php">My Products</a>
            <a href="orders.php">Orders</a>
            <a href="earnings.php">Seller Earnings</a>
            <a href="profile.php">Profile</a>
        </div>

        <div class="profile-box">
            <h2>Edit Product</h2><br>

            <?php
            $product_id=$_GET['product_id']?? '';
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                
                echo "<p style='color:green; margin:8px; '>Product Id updated successfully.</p>";
                
            } 
             ?>

            <form method="post" class="profile-form">

                <label>Product Name</label>
                <input type="text" name="name" value="Rice">

                <label>Category</label>
                <select name="category">
                    <option>Grains</option>
                     <option>Vegetables</option>
                <option>Fruits</option>
                </select>

                <label>Price (per kg)</label>
                <input type="text" name="price" value="50">

                <label>Quantity (kg)</label>
                <input type="number" name="quantity" value="100">
                <br><br>
                <input type="submit" value="Update Product">
            </form>
               


        </div>

    </div>

    <?php include("../includes/footer.php"); ?>

</body>

</html>