<!DOCTYPE html>
<html>
<head>
    <title>Product Moderation</title>
    <link rel="stylesheet" href="dashboard.css">
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
                <li class="active"><a href="products.php">Product Moderation</a></li>
                <li><a href="activity.php">Activity Monitor</a></li>
            </ul>
        </div>

            <div class="main-content">
            <h2>Product Moderation</h2>
            
            <div class="simple-table">
                <table>
                    <thead>
                        <tr>
                            <th>Product ID</th>
                            <th>Product Name</th>
                            <th>Seller</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
                <tbody>
                        <tr>
                            <td>P5001</td>
                            <td>Fresh Rice</td>
                            <td>Green Farm</td>
                            <td>$12.50</td>
                            <td><span class="status pending">Pending</span></td>
                            <td>
                                <a href="#" class="action-btn">Approve</a>
                                <a href="#" class="action-btn delete">Reject</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>