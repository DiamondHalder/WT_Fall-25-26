<?php

if (!isset($_SESSION)) {
    session_start();
}
$admin_name = isset($_SESSION["admin_name"]) ? $_SESSION["admin_name"] : "Admin";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Orders</title>
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="../css/statistics.css">
    <link rel="stylesheet" href="../css/orders.css">
</head>
<body class="dashboard-page">
    <div class="header">
        <div class="user-info">
            <span>Welcome, <?php echo $admin_name; ?></span>
            <a href="../php/logout_controller.php" class="logout-btn">Logout</a>
        </div>
    </div>

    <div class="container">
        <div class="sidebar">
    <h3>Menu</h3>
    <ul>
        <li><a href="../php/dashboard_controller.php">Dashboard</a></li>
        <li><a href="../php/statistics_controller.php">Statistics</a></li>
        <li class="active"><a href="../php/orders_controller.php">Manage Orders</a></li>
        <li><a href="../php/users_controller.php">Manage Users & Sellers</a></li>
        <li><a href="../php/products_controller.php">Product Moderation</a></li>
        <li><a href="../php/activity_controller.php">Activity Monitor</a></li>
    </ul>
</div>
        
        <div class="main-content">
            <h2>Manage Orders</h2>
            
            <div class="simple-table">
                <table>
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Customer</th>
                            <th>Amount (Tk.)</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#10025</td>
                            <td>Customer A</td>
                            <td>450</td>
                            <td><span class="status pending">Pending</span></td>
                            <td>15-02-2025</td>
                            <td><a href="#" class="action-btn">View</a></td>
                        </tr>
                        <tr>
                            <td>#10024</td>
                            <td>Customer B</td>
                            <td>120</td>
                            <td><span class="status delivered">Delivered</span></td>
                            <td>14-02-2025</td>
                            <td><a href="#" class="action-btn">View</a></td>
                        </tr>
                        <tr>
                            <td>#10023</td>
                            <td>Customer C</td>
                            <td>800</td>
                            <td><span class="status confirmed">Confirmed</span></td>
                            <td>14-02-2025</td>
                            <td><a href="#" class="action-btn">View</a></td>
                        </tr>
                        <tr>
                            <td>#10022</td>
                            <td>Customer D</td>
                            <td>200</td>
                            <td><span class="status cancelled">Cancelled</span></td>
                            <td>13-03-2025</td>
                            <td><a href="#" class="action-btn">View</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>