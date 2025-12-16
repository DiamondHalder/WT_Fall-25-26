# <?php
# include("../includes/auth_check.php");
# ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Manage Users</title>
        <link rel="stylesheet" href="../assets/css/style.css">
    </head>
    <body>
        <?php include("../include/header/php"); ?>

        <div class="container">
            <div class="sidebar">
            <a href="dashboard.php">Dashboard</a>
            <a href="manage_users.php">Manage Users</a>
            <a href="orders.php">Orders</a>
            <a href="approve_products">Approve Products</a>
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
                    </tr>
                </table>

            </div>
        </div>
    </body>
</html>