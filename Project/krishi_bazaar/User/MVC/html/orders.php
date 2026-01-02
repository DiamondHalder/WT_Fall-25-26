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
        <h2>Customer Orders</h2><br>

        <?php if(isset($message)) echo "<p style='color:green; margin:8px;'>$message</p>"; ?>

        <table>
            <tr>
                <th>Order Id</th>
                <th>Customer</th>
                <th>Product</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            <?php foreach($orders as $order): ?>
            <tr>
                <td><?= $order['order_id'] ?></td>
                <td><?= $order['customer'] ?></td>
                <td><?= $order['product'] ?></td>
                <td><?= $order['quantity'] ?></td>
                <td>৳<?= $order['total'] ?></td>
                <td class="status-<?= str_replace(' ','-', $order['status']) ?>">
                    <?= ucfirst($order['status']) ?>
                </td>
                <td>
                    <?php if($order['status']== 'buy request'): ?>
                        <form method="post" style="display: inline;">
                            <input type="hidden" name="order_id" value="<?= $order['order_id'] ?>">
                            <input type="submit" name="confirm" value="Confirm">
                        </form>
                        <form method="post" style="display: inline;">
                            <input type="hidden" name="order_id" value="<?= $order['order_id'] ?>">
                            <input type="submit" name="decline" value="Decline">
                        </form>
                    <?php else: ?>
                        <em>No Action</em>
                    <?php endif; ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>

    </div>

</div>

<?php include("includes/footer.php"); ?>
</body>
</html>
