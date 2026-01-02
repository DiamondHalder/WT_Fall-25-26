<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../css/dashboard.css">
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
                <li class="active"><a href="dashboard.php">Dashboard</a></li>
                <li><a href="statistics.php">Statistics</a></li>
                <li><a href="orders.php">Manage Orders</a></li>
                <li><a href="users.php">Manage Users & Sellers</a></li>
                <li><a href="products.php">Product Moderation</a></li>
                <li><a href="activity.php">Activity Monitor</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h2>Dashboard Overview</h2>
            
            <div class="cards-container">
                <div class="card">
                    <h3>Total Users</h3>
                    <p class="number">1,245</p>
                </div>
                
                <div class="card">
                    <h3>Total Sellers</h3>
                    <p class="number">356</p>
                </div>
                
                <div class="card">
                    <h3>Total Products</h3>
                    <p class="number">5,820</p>
                </div>
                
                <div class="card">
                    <h3>Total Orders</h3>
                    <p class="number">8,940</p>
                </div>
            </div>

            <div class="recent-activity">
                <h3>Recent Activities</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Time</th>
                            <th>Activity</th>
                            <th>Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>10:30 AM</td>
                            <td>New Order</td>
                            <td>Order #10025 placed</td>
                        </tr>
                        <tr>
                            <td>09:45 AM</td>
                            <td>Seller Registered</td>
                            <td>Ayesha Khatun joined</td>
                        </tr>
                        <tr>
                            <td>09:15 AM</td>
                            <td>Product Added</td>
                            <td>New rice variety listed</td>
                        </tr>
                        <tr>
                            <td>Yesterday</td>
                            <td>User Blocked</td>
                            <td>User ID: U887 blocked</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>