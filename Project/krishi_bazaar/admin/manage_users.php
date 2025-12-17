# <?php
# include("../includes/auth_check.php");
# ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Manage Users</title>
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
                <h2>Manage Users</h2><br>

                <?php
                    if($_SERVER["REQUEST_METHOD"]=="POST"){
                        if(isset($_POST["block"])){
                            $user_id = $_POST["user_id"];
                            echo "<p style='color:red;'>User Id $user_id had been blocked (UI only).</p>";
                        }

                        if(isset($_POST["unblock"])){
                            $user_id = $_POST["user_id"];
                            echo "<p style='color:green;'>User Id $user_id had been unblocked (UI only).</p>";
                        }

                        if(isset($_POST["delete"])){
                            $user_id = $_POST["user_id"];
                            echo "<p style='color:red;'>User Id $user_id had been deleted (UI only).</p>";
                        }
                    }
                ?>

                <table>
                    <tr>
                        <th>User ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Diamond</td>
                        <td>dia@gmail.com</td>
                        <td>Seller</td>
                        <td>Active</td>
                        <td>
                            <form method="post" style="display:inline;">
                                <input type="hidden" name="user_id" value="1">
                                <input type="submit" name="block" value="Block">
                            </form>

                            <form method="post" style="display:inline;">
                                <input type="hidden" name="user_id" value="1">
                                <input type="submit" name="delete" value="Delete">
                            </form>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Rabbi</td>
                        <td>ria@gmail.com</td>
                        <td>Customer</td>
                        <td>Blocked</td>
                        <td>
                            <form method="post" style="display:inline;">
                                <input type="hidden" name="user_id" value="2">
                                <input type="submit" name="unblock" value="Unblock">
                            </form>

                            <form method="post" style="display:inline;">
                                <input type="hidden" name="user_id" value="2">
                                <input type="submit" name="delete" value="Delete">
                            </form>
                        </td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>Rifat</td>
                        <td>rrrra@gmail.com</td>
                        <td>Seller</td>
                        <td>Active</td>
                        <td>
                            <form method="post" style="display:inline;">
                                <input type="hidden" name="user_id" value="3">
                                <input type="submit" name="block" value="Block">
                            </form>

                            <form method="post" style="display:inline;">
                                <input type="hidden" name="user_id" value="3">
                                <input type="submit" name="delete" value="Delete">
                            </form>
                        </td>
                    </tr>


                </table>
            </div>

        </div>
        <?php include("../includes/footer.php"); ?>
    </body>
</html>