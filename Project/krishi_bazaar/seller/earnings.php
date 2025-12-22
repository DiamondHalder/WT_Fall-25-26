<?php
$orders= [
['order_id'=>501,'customer'=>'Rabbi','product'=>'Rice','quantity'=>5,'total'=>250,'status'=>'shipped'],
['order_id'=>502,'customer'=>'Rajib','product'=>'Potato','quantity'=>10,'total'=>300,'status'=>'shipped'],
['order_id'=>503,'customer'=>'Karim','product'=>'Onion','quantity'=>3,'total'=>180,'status'=>'shipped'],

];


$total_earnings=0;
foreach($orders as $e){
    $total_earnings =$total_earnings + $e['total'];
}
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
            <h2>Seller Earnings</h2><br>

            <?php if(count($orders)>0): ?>

            <table>
                <tr>
                    <th>Order Id</th>
                    <th>Customer</th>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Total (৳)</th>
                    
                </tr>
                <?php foreach($orders as $e): ?>
                <tr>
                    <td><?= $e['order_id'] ?></td>
                    <td><?= $e['customer'] ?></td>
                    <td><?= $e['product'] ?></td>
                    <td><?= $e['quantity'] ?></td>
                    <td>৳<?= $e['total'] ?></td>
                </tr>
                <?php endforeach; ?>

                

                
            </table>
            <?php else: ?>
                <p>No Earnings Yet.</p>
                <?php endif?>
             


        </div>

    </div>

    <?php include("../includes/footer.php"); ?>

</body>

</html>