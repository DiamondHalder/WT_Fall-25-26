
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
            <a href="add_product.php"></a>
            <a href="my_products.php">My Products</a>
            <a href="orders.php">Orders</a>
            <a href="profile.php">Profile</a>
        </div>

        <div class="content">
            <h2>Edit Product</h2><br>

            <?php
            $product_id=$_GET['product_id']?? '';
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                
                echo "<p style='color:green; margin:8px; '>Product Id updated successfully.</p>";
                
            } 
             ?>

            <form method="post">
                <label>Product Name</label>
                <input type="text" name="name" value="Rice">

                <label>Price (<em>per kg</em>)</label>
                <input type="text" name="price" value="50">

                <label>Stock</label>
                <input type="number" name="stock" value="Update Product">
                <br><br>
                <input type="submit" value="Update Product">
            </form>
               


        </div>

    </div>

    <?php include("../includes/footer.php"); ?>

</body>

</html>