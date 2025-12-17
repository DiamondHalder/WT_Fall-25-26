# <?php
    # include("../includes/auth_check.php");
    # 
    ?>

<!DOCTYPE html>
<html>

<head>
    <title>Approve Products</title>
    <?php include("../includes/head.php"); ?>

</head>

<body>
    <?php include("../includes/header.php"); ?>

    <div class="container">
        <div class="sidebar">
            <a href="dashboard.php">Dashboard</a>
            <a href="manage_users.php">Manage Users</a>
            <a href="orders.php">Orders</a>
            <a href="approve_products.php">Approve Products</a>
            <a href="activity_log.php">Activity</a>
        </div>

        <div class="content">
            <h2>Approve Products</h2><br>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_POST["approve"])) {
                    $product_id = $_POST["product_id"];
                    echo "<p style='color:green;'>Product Id $product_id had been approved.</p>";
                }

                if (isset($_POST["reject"])) {
                    $product_id = $_POST["product_id"];
                    echo "<p style='color:red;'>Product Id $product_id had been rejected.</p>";
                }

                
            }
            ?>

            <table>
                <tr>
                    <th>Product ID</th>
                    <th>Product Name</th>
                    <th>Seller</th>
                    <th>Price</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td>501</td>
                    <td>Rice</td>
                    <td>Diamond</td>
                    <td>৳50/kg</td>
                    <td>pending</td>
                    
                    <td>
                        <form method="post" style="display:inline;">
                            <input type="hidden" name="product_id" value="501">
                            <input type="submit" name="approve" value="Approve">
                        </form>

                        <form method="post" style="display:inline;">
                            <input type="hidden" name="product_id" value="501">
                            <input type="submit" name="reject" value="Reject">
                        </form>
                    </td>
                </tr>

                <tr>
                    <td>502</td>
                    <td>Potato</td>
                    <td>Rifat</td>
                    <td>৳30/kg</td>
                    <td>Approved</td>
                    <td>
                        <em>No Acction</em>
                    </td>
                </tr>

                <tr>
                    <td>503</td>
                    <td>Onion</td>
                    <td>Diamond</td>
                    <td>৳60/kg</td>
                    <td>Pending</td>
                    <td>
                        <form method="post" style="display:inline;">
                            <input type="hidden" name="product_id" value="503">
                            <input type="submit" name="approve" value="Approve">
                        </form>

                        <form method="post" style="display:inline;">
                            <input type="hidden" name="product_id" value="503">
                            <input type="submit" name="reject" value="Reject">
                        </form>
                       
                    </td>
                </tr>


            </table>


        </div>

    </div>
    <?php include("../includes/footer.php"); ?>
</body>

</html>