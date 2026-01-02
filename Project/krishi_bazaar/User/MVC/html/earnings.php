<?php include("includes/header.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <?php include("includes/head.php"); ?>
</head>
<body>

<div class="container">

    <div class="sidebar">
        <a href="../php/seller_dashboard.php">Dashboard</a>
        <a href="../php/add_product.php">Add Product</a>
        <a href="../php/my_products.php">My Products</a>
        <a href="../php/orders.php">Orders</a>
        <a href="../php/earnings.php">Seller Earnings</a>
        <a href="../php/profile.php">Profile</a>
    </div>

    <div class="content">
        <h2>Seller Earnings</h2><br>

        <?php if(count($orders) > 0): ?>
        <table>
            <tr>
                <th>Order Id</th>
                <th>Customer</th>
                <th>Product</th>
                <th>Quantity</th>
                <th>Total (৳)</th>
            </tr>
            <?php foreach($orders as $e): ?>
            <tr>
                <td><?= $e['order_id'] ?></td>
                <td><?= $e['customer'] ?></td>
                <td><?= $e['product'] ?></td>
                <td><?= $e['quantity'] ?></td>
                <td>৳<?= $e['total'] ?></td>
            </tr>
            <?php endforeach; ?>
            <tr class="total-row">
                <td colspan="4">Total Earnings</td>
                <td>৳<?= $total_earnings ?></td>
            </tr>                
        </table>
        <?php else: ?>
            <p>No Earnings Yet.</p>
        <?php endif; ?>
    </div>

</div>

<?php include("includes/footer.php"); ?>
</body>
</html>
