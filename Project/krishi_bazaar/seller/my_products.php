
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
                

                
            } 
             ?>

             


        </div>

    </div>

    <?php include("../includes/footer.php"); ?>

</body>

</html>