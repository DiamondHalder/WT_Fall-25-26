# <?php
# include("../includes/auth_check.php");
# ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Manage Orders</title>
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
                <h2>Manage Orders</h2><br>

                <?php
                    if($_SERVER["REQUEST_METHOD"]=="POST"){
                        if(isset($_POST["confirm"])){
                            $order_id = $_POST["order_id"];
                            echo "<p style='color:green;'>Order Id $order_id had been confirmed.</p>";
                        }

                        if(isset($_POST["cancel"])){
                            $order_id = $_POST["order_id"];
                            echo "<p style='color:red;'>Order Id $order_id has been cancelled.</p>";
                        }

                        
                    }
                ?>

                <table>
                    <tr>
                        <th>Order ID</th>
                        <th>Customer</th>
                        <th>Seller</th>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td>101</td>
                        <td>Rabbi</td>
                        <td>Diamond</td>
                        <td>Rice</td>
                        <td>5</td>
                        <td>Pending</td>
                        <td>
                            <form method="post" style="display:inline;">
                                <input type="hidden" name="order_id" value="101">
                                <input type="submit" name="confirm" value="Confirm">
                            </form>

                            <form method="post" style="display:inline;">
                                <input type="hidden" name="order_id" value="101">
                                <input type="submit" name="cancel" value="Cancel">
                            </form>
                        </td>
                    </tr>

                    <tr>
                        <td>102</td>
                        <td>Sadia</td>
                        <td>Rifat</td>
                        <td>Potato</td>
                        <td>10</td>
                        <td>Confirmed</td>
                        <td>
                            <form method="post" style="display:inline;">
                                <input type="hidden" name="order_id" value="102">
                                <input type="submit" name="cancel" value="Cancel">
                            </form>
                        </td>
                    </tr>

                    <tr>
                        <td>103</td>
                        <td>Karim</td>
                        <td>Diamond</td>
                        <td>Onion</td>
                        <td>3</td>
                        <td>Delivered</td>
                        <td>
                           <em>No Action</em>
                        </td>
                    </tr>


                </table>


            </div>

        </div>
        <?php include("../includes/footer.php"); ?>
    </body>
</html>