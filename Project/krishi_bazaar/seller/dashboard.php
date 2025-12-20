
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
            <a href="add_product.php">Add Product</a>
            <a href="my_products.php">My Products</a>
            <a href="orders.php">Orders</a>
            <a href="profile.php">Profile</a>
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

    <?php include("../includes/footer.php"); ?>

</body>

</html>