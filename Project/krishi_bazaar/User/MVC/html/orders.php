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

        <?php if (!empty($message)): ?>
            <p style="color:green; margin:8px;"><?php echo $message; ?></p>
        <?php endif; ?>

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
            <?php if (!empty($orders)): ?>

            <?php foreach($orders as $order): ?>

                <tr>
                    <td><?php echo htmlspecialchars($order['cart_id']); ?></td>
                    <td><?php echo htmlspecialchars($order['customer_name']); ?></td>
                    <td><?php echo htmlspecialchars($order['product_name']); ?></td>
                    <td><?php echo htmlspecialchars($order['quantity']); ?></td>
                    <td>
                            ৳<?php echo htmlspecialchars($order['total_price']); ?>
                    </td>
                    <td><?php echo ucfirst($order['status']); ?></td>
                    <td>
                        
                    </td>

                </tr>
            
            <?php endforeach; ?>
        </table>

    </div>

</div>

<?php include("includes/footer.php"); ?>
</body>
</html>
