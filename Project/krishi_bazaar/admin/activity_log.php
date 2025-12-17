# <?php
    # include("../includes/auth_check.php");
    # 
    ?>

<!DOCTYPE html>
<html>

<head>
    <title>Activity Log</title>
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
            <h2>Activity</h2><br>

            <table>
                <tr>
                    <th>Log ID</th>
                    <th>Action</th>
                    <th>Performed By</th>
                    <th>Target</th>
                    <th>Date & Time</th>
                    
                </tr>
                <tr>
                    <td>1</td>
                    <td>User Blocked</td>
                    <td>Admin</td>
                    <td>User ID:2</td>
                    <td>2025-01-05 10:30 AM</td>                                       
                </tr>

                <tr>
                    <td>2</td>
                    <td>Order Confirmed</td>
                    <td>Admin</td>
                    <td>User ID:101</td>
                    <td>2025-01-05 11:15 AM</td>                                       
                </tr>

                <tr>
                    <td>3</td>
                    <td>Product Approved</td>
                    <td>Admin</td>
                    <td>Product ID:55</td>
                    <td>2025-01-05 12:00 PM</td>                                       
                </tr>

                <tr>
                    <td>4</td>
                    <td>User Deleted</td>
                    <td>Admin</td>
                    <td>User ID:3</td>
                    <td>2025-01-05 12:30 PM</td>                                       
                </tr>

                

                


            </table>


        </div>

    </div>
    <?php include("../includes/footer.php"); ?>
</body>

</html>