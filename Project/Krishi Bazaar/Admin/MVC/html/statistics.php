<!DOCTYPE html>
<html>
<head>
    <title>Platform Statistics</title>
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
                <li class="active"><a href="statistics.php">Statistics</a></li>
                <li><a href="orders.php">Manage Orders</a></li>
                <li><a href="users.php">Manage Users & Sellers</a></li>
                <li><a href="products.php">Product Moderation</a></li>
                <li><a href="activity.php">Activity Monitor</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h2>Platform Statistics</h2>
            
            <div class="simple-table">
                <table>
                    <thead>
                        <tr>
                            <th>Category</th>
                            <th>Count</th>
                            <th>Last Updated</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Active Users</td>
                            <td>890</td>
                            <td>Today</td>
                        </tr>
                        <tr>
                            <td>Active Sellers</td>
                            <td>210</td>
                            <td>Today</td>
                        </tr>
                        <tr>
                            <td>Products Listed</td>
                            <td>1,450</td>
                            <td>Yesterday</td>
                        </tr>
                        <tr>
                            <td>Pending Orders</td>
                            <td>45</td>
                            <td>Today</td>
                        </tr>
                        <tr>
                            <td>Completed Orders</td>
                            <td>8,895</td>
                            <td>This Month</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>