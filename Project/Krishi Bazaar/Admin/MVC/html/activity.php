<!DOCTYPE html>
<html>
<head>
    <title>Activity Monitor</title>
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="../css/statistics.css">
</head>
<body class="dashboard-page">
    <div class="header">
        <div class="user-info">
            <span>Welcome, Admin</span>
            <a href="login.php" class="logout-btn">Logout</a>
        </div>
    </div>
    <div class="container">
        <div class="sidebar">
            <h3>Menu</h3>
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="statistics.php">Statistics</a></li>
                <li><a href="orders.php">Manage Orders</a></li>
                <li><a href="users.php">Manage Users & Sellers</a></li>
                <li><a href="products.php">Product Moderation</a></li>
                <li class="active"><a href="activity.php">Activity Monitor</a></li>
            </ul>
        </div>
        <div class="main-content">
            <h2>Activity Monitor</h2>
            <div class="simple-table">
                <table>
                    <tr>
                        <th>Time</th>
                        <th>User</th>
                        <th>Activity</th>
                        <th>Details</th>
                    </tr>
                    <tr>
                        <td>10:30 AM</td>
                        <td>Admin</td>
                        <td>Logged In</td>
                        <td>From IP: 192.168.1.1</td>
                    </tr>
                    <tr>
                        <td>10:25 AM</td>
                        <td>User: U1001</td>
                        <td>Placed Order</td>
                        <td>Order #10025</td>
                    </tr>
                    <tr>
                        <td>10:15 AM</td>
                        <td>Seller: S2001</td>
                        <td>Added Product</td>
                        <td>Product: Fresh Rice</td>
                    </tr>
                    <tr>
                        <td>09:45 AM</td>
                        <td>System</td>
                        <td>User Registered</td>
                        <td>New user: Faiyad Hoque</td>
                    </tr>
                    <tr>
                        <td>Yesterday</td>
                        <td>Admin</td>
                        <td>Blocked User</td>
                        <td>User ID: U887 blocked</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
</html>