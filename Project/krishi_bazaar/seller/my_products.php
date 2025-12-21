
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
            <h2>My Products</h2><br>

            <?php
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                
                if(isset($_POST['delete_product'])){
                    $product_id=$_POST['product_id'];
                    echo "<p style='color:red; '>Product Id $product_id deleted.</p>";
                }

                 if(isset($_POST['edit_product'])){
                    $product_id=$_POST['product_id'];
                    echo "<p style='color:green; '>Edit request for Product Id $product_id.</p>";
                }
                
            } 
             ?>

             


        </div>

    </div>

    <?php include("../includes/footer.php"); ?>

</body>

</html>