

<!DOCTYPE html>
<html>

<head>

    <?php include("../includes/head.php"); ?>

</head>

<body>
    <?php include("../includes/header.php"); ?>

    <div class="container">

        <div class="sidebar">
            <a href="dashboard.php">Dashboard</a>
            <a href="browse_products.php">Browse Products</a>
            <a href="my_orders.php">My Orders</a>
            <a href="cart.php">Cart</a>
            <a href="profile.php">Profile</a>
        </div>

        <div class="content">
            <h2>My Orders</h2><br>
           <?php 
           if($_SERVER["REQUEST_METHOD"]=="POST"){
            if(isset($_POST['cancel_order'])){
                $order_id = $_POST['order_id'];
                echo "<p style='color:red; margin:5px;'>Order ID $order_id has been cancelled.</p>";

            }
           }
           ?>

           <table>
             <tr>
                <th>Order ID</td>
                <th>Product Name</td>
                <th>Quantity</td>
                <th>Total Price</td>
                <th>Status</td>
                <th>Action</td>
             </tr>
             <tr>
                <td>501</td>
                <td>Rice</td>
                <td>5 kg</td>
                <td>৳250</td>
                <td>Pending</td>
                <td>
                 <form method="post">
                    <input type="hidden" name="order_id" value="501">
                    <input type="submit" name="cancel_order" value="Cancel">
                 </form>
                </td>
             </tr>

             <tr>
                <td>502</td>
                <td>Potato</td>
                <td>10 kg</td>
                <td>৳300</td>
                <td>Confirmed</td>
                <td>
                    <em>Processing</em>
                </td>
             </tr>

             <tr>
                <td>503</td>
                <td>Onion</td>
                <td>3 kg</td>
                <td>৳180</td>
                <td>Delivered</td>
                <td>
                    <em>Completed</em>
                </td>
             </tr>
             
           </table>
            
           
            

        </div>

    </div>

    <?php include("../includes/footer.php"); ?>

</body>

</html>