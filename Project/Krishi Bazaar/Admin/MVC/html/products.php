<!DOCTYPE html>
<html>
<head>
    <title>Product Moderation</title>
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="../css/statistics.css">
    <link rel="stylesheet" href="../css/orders.css">
    <link rel="stylesheet" href="../css/userss.css">
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
                        <tr>
                            <td>P5002</td>
                            <td>Organic Potatoes</td>
                            <td>Fresh Harvest</td>
                            <td>$8.75</td>
                            <td><span class="status approved">Approved</span></td>
                            <td>
                                <a href="#" class="action-btn">View</a>
                                <a href="#" class="action-btn delete">Remove</a>
                            </td>
                        </tr>
                                                <tr>
                            <td>P5003</td>
                            <td>Local Tomatoes</td>
                            <td>Farmer Akhtar</td>
                            <td>$6.20</td>
                            <td><span class="status pending">Pending</span></td>
                            <td>
                                <a href="#" class="action-btn">Approve</a>
                                <a href="#" class="action-btn delete">Reject</a>
                            </td>
                        </tr>
                        <tr>
                            <td>P5004</td>
                            <td>Fresh Onions</td>
                            <td>Green Farm</td>
                            <td>$5.90</td>
                            <td><span class="status rejected">Rejected</span></td>
                            <td>
                                <a href="#" class="action-btn">View</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>