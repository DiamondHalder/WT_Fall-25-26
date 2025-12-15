<!DOCTYPE html>
<html>
    <head>
        <title>Admin Dashboard</title>
        <link rel="icon" type="image/jpeg" href="../assets/images/logo.png">
        <link rel="stylesheet" href="../assets/css/style.css">
    </head>
    <body>
        <?php include("../includes/header.php"); ?>
        <div class="container">

        <div class="sidebar">
            <a href="dashboard.php">Dashboard</a>
            <a href="manage_users.php">Manage Users</a>
            <a href="orders.php">Orders</a>
            <a href="approve_products">Approve Products</a>
            <a href="activity_log.php">Activity</a>
        </div>

        <div class="content">
            <h2>Dashboard</h2><br>
            <div class="card-container">
                <div class="card">
                    <h3>Total Users</h3>
                    <p>--</p>
                </div>
                <div class="card">
                    <h3>Total Sellers</h3>
                    <p>--</p>
                </div>
                <div class="card">
                    <h3>Total Products</h3>
                    <p>--</p>
                </div>
                <div class="card">
                    <h3>Total Orders</h3>
                    <p>--</p>
                </div>
            </div>

        </div>
</div>
        <?php include("../includes/footer.php"); ?>
    </body>
</html>