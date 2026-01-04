<!DOCTYPE html>
<html>
<head>
    <title>Manage Users & Sellers</title>
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="../css/statistics.css">
    <link rel="stylesheet" href="../css/orders.css">
    <link rel="stylesheet" href="../css/users.css">
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
                <li class="active"><a href="users.php">Manage Users & Sellers</a></li>
                <li><a href="products.php">Product Moderation</a></li>
                <li><a href="activity.php">Activity Monitor</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h2>Manage Users & Sellers</h2>
            
            <div class="section">
                <h3>Users (Customers)</h3>
                <div class="simple-table">
                    <table>
                        <thead>
                            <tr>
                                <th>User ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1001</td>
                                <td>Ayesha</td>
                                <td>ayesha@gmail.com</td>
                                <td><span class="status active">Active</span></td>
                                <td>
                                    <a href="#" class="action-btn">Edit</a>
                                    <a href="#" class="action-btn delete">Block</a>
                                </td>
                            </tr>
                            <tr>
                                <td>1002</td>
                                <td>Ayesha</td>
                                <td>ayesha@gmail.com</td>
                                <td><span class="status active">Active</span></td>
                                <td>
                                    <a href="#" class="action-btn">Edit</a>
                                    <a href="#" class="action-btn delete">Block</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <div class="section">
                <h3>Sellers (Farmers)</h3>
                <div class="simple-table">
                    <table>
                        <thead>
                            <tr>
                                <th>Seller ID</th>
                                <th>Shop Name</th>
                                <th>Owner</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>S2001</td>
                                <td>Green Farm</td>
                                <td>Rahman</td>
                                <td><span class="status active">Active</span></td>
                                <td>
                                    <a href="#" class="action-btn">Edit</a>
                                    <a href="#" class="action-btn delete">Block</a>
                                </td>
                            </tr>
                            <tr>
                                <td>S2002</td>
                                <td>Fresh Harvest</td>
                                <td>Ali</td>
                                <td><span class="status active">Active</span></td>
                                <td>
                                    <a href="#" class="action-btn">Edit</a>
                                    <a href="#" class="action-btn delete">Block</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>