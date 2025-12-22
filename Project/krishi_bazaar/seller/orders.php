<?php
$orders= [
['order_id'=>501,'customer'=>'Rabbi','product'=>'Rice','quantity'=>5,'total'=>250,'status'=>'pending'],
['order_id'=>502,'customer'=>'Rajib','product'=>'Potato','quantity'=>10,'total'=>300,'status'=>'buy request'],
['order_id'=>503,'customer'=>'Karim','product'=>'Onion','quantity'=>3,'total'=>180,'status'=>'shipped'],
['order_id'=>504,'customer'=>'Jamal','product'=>'Rice','quantity'=>2,'total'=>100,'status'=>'none']
];
?>


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
            <a href="add_product.php">Add Product</a>
            <a href="my_products.php">My Products</a>
            <a href="orders.php">Orders</a>
            <a href="profile.php">Profile</a>
        </div>

        <div class="content">
            <h2>Customer Orders</h2><br>

            <?php
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                
                if(isset($_POST['accept'])){
                    $order_id=$_POST['order_id'];
                    echo "<p style='color:green; margin:8px; '>Order Id $order_id accepted.</p>";
                }

                 if(isset($_POST['ship'])){
                    $order_id=$_POST['order_id'];
                    echo "<p style='color:orange; margin:8px; '>Order Id $order_id shipped.</p>";
                }

                 if(isset($_POST['deliver'])){
                    $order_id=$_POST['order_id'];
                    echo "<p style='color:green; margin:8px; '>Order Id $order_id delivered.</p>";
                }
                
            } 
             ?>

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
                <tr>
                    <td>501</td>
                    <td>Rabbi</td>
                    <td>Rice</td>
                    <td>5</td>
                    <td>৳250</td>
                    <td style="color: orange;">Pending</td>
                    
                    <td>
                        <form method="post" style="display: inline;">
                            <input type="hidden" name="order_id" value="501">
                            <input type="submit" name="accept" value="Accept">
                        </form>
              
                    </td>
                </tr>

                <tr>
                    <td>502</td>
                    <td>Rajib</td>
                    <td>Potato</td>
                    <td>10</td>
                    <td>৳300</td>
                    <td>Accepted</td>
                    <td>
                        <form method="post" style="display: inline;">
                            <input type="hidden" name="order_id" value="502">
                            <input type="submit" name="ship" value="Ship">
                        </form>
              
                    </td>
                </tr>

                 <tr>
                    <td>503</td>
                    <td>Karim</td>
                    <td>Onion</td>
                    <td>3</td>
                    <td>৳180</td>
                    <td>Shipped</td>
                    <td>
                        <form method="post" style="display: inline;">
                            <input type="hidden" name="order_id" value="503">
                            <input type="submit" name="deliver" value="Deliver">
                        </form>
              
                    </td>
                </tr>

                 <tr>
                    <td>504</td>
                    <td>Jamal</td>
                    <td>Rice</td>
                    <td>2</td>
                    <td>৳100</td>
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