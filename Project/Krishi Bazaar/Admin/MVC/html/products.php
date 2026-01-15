<?php

if (!isset($data)) {
    header("Location: ../php/login_controller.php");
    exit();
}

$products = $data['products'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Product Moderation</title>
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="../css/statistics.css">
    <link rel="stylesheet" href="../css/orders.css">
    <link rel="stylesheet" href="../css/users.css">
    <link rel="stylesheet" href="../css/products.css">
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
        <li><a href="../php/orders_controller.php">Manage Orders</a></li>
        <li><a href="../php/users_controller.php">Manage Users & Sellers</a></li>
        <li class="active"><a href="../php/products_controller.php">Product Moderation</a></li>
        <li><a href="../php/activity_controller.php">Activity Monitor</a></li>
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
                            <th>Price (৳)</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($products as $product): ?>
                            <tr>
                                <td>P<?php echo $product['id']; ?></td>
                                <td><?php echo $product['name']; ?></td>
                                <td><?php echo $product['seller_name']; ?></td>
                                <td><?php echo $product['price']; ?></td>
                                <td>
                                    <?php if ($product['status'] == 'pending'): ?>
                                        <span class="status pending">Pending</span>
                                    <?php elseif ($product['status'] == 'approved'): ?>
                                        <span class="status approved">Approved</span>
                                    <?php else: ?>
                                        <span class="status rejected">Rejected</span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if ($product['status'] == 'pending'): ?>
                                        <a href="#" class="action-btn">Approve</a>
                                        <a href="#" class="action-btn delete">Reject</a>
                                        <?php else: ?>
                                            <a href="#" class="action-btn">View</a>
                                        <?php if ($product['status'] == 'approved'): ?>
                                            <a href="#" class="action-btn delete">Remove</a>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>