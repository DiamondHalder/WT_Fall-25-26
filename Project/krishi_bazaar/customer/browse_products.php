<?php
// include("../includes/auth_check.php"); // enable later for customer
?>

<!DOCTYPE html>
<html>

<head>

    <?php include("../includes/head.php"); ?>

</head>

<body>
    <?php include("../includes/header.php"); ?>

    <div class="container">

        <div class="sidebar">
            <a href="dashboard.php">Dashboard</a>
            <a href="browse_products.php">Browse Products</a>
            <a href="my_orders.php">My Orders</a>
            <a href="cart.php">Cart</a>
            <a href="profile.php">Profile</a>
        </div>

        <div class="content">
            <h2>Browse Products</h2><br>
           <?php 
           if($_SERVER["REQUEST_METHOD"]=="POST"){
            if(isset($_POST['add_to_cart'])){
                $product_id = $_POST['product_id'];
                echo "<p style='color:green;'>Product ID $product_id added to cart.</p>";

            }
           }

           <table>
             <tr>
                <th>Product ID</td>
                <th>Product Name</td>
                <th>Seller</td>
                <th>Price</td>
                <th>Available</td>
                <th>Action</td>
             </tr>
             <tr>
                <td>201</td>
                <td>Rice</td>
                <td>Diamond</td>
                <td>৳50/kg</td>
                <td>100</td>
                <td></td>
             </tr>
             <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
             </tr>
             <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
             </tr>
           </table>
            
           
            ?>

        </div>

    </div>

    <?php include("../includes/footer.php"); ?>

</body>

</html>