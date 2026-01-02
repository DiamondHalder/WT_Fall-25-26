<?php include("includes/header.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <?php include("includes/head.php"); ?>
</head>
<body>

<div class="container">

    <div class="sidebar">
        <a href="seller_dashboard.php">Dashboard</a>
        <a href="add_product.php">Add Product</a>
        <a href="my_products.php">My Products</a>
        <a href="orders.php">Orders</a>
        <a href="earnings.php">Seller Earnings</a>
        <a href="profile.php">Profile</a>
    </div>

    <div class="content">
        <h2>My Products</h2><br>

        <?php if($error) echo "<p style='color:red; margin:8px;'>$error</p>"; ?>
        <?php if($message) echo "<p style='color:green; margin:8px;'>$message</p>"; ?>

        <table>
            <tr>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Category</th>
                <th>Price</th>
                <th>Quantity (kg)</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            <tr>
                <td>301</td>
                <td>Rice</td>
                <td>Grains</td>
                <td>50</td>
                <td>100</td>
                <td style="color:orange;">Pending</td>
                <td>
                    <form method="post" style="display:inline;">
                        <input type="hidden" name="product_id" value="301">
                        <input type="submit" name="edit_product" value="Edit">
                    </form>
                    <form method="post" style="display:inline;">
                        <input type="hidden" name="product_id" value="301">
                        <input type="submit" name="delete_product" value="Delete">
                    </form>
                </td>
            </tr>
            <tr>
                <td>302</td>
                <td>Potato</td>
                <td>Vegetables</td>
                <td>30</td>
                <td>200</td>
                <td style="color:green;">Approved</td>
                <td>
                    <form method="post" style="display:inline;">
                        <input type="hidden" name="product_id" value="302">
                        <input type="submit" name="edit_product" value="Edit">
                    </form>
                    <form method="post" style="display:inline;">
                        <input type="hidden" name="product_id" value="302">
                        <input type="submit" name="delete_product" value="Delete">
                    </form>
                </td>
            </tr>
            <tr>
                <td>303</td>
                <td>Onion</td>
                <td>Vegetables</td>
                <td>60</td>
                <td>0</td>
                <td style="color:red;">Rejected</td>
                <td><em>No Action</em></td>
            </tr>
        </table>

    </div>
</div>

<?php include("includes/footer.php"); ?>
</body>
</html>
