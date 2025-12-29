<?php 
require_once("../includes/seller_auth.php");
include("../includes/header.php"); 

?>

<?php
$orders= [
['order_id'=>501,'customer'=>'Rabbi','product'=>'Rice','quantity'=>5,'total'=>250,'status'=>'pending'],
['order_id'=>502,'customer'=>'Rajib','product'=>'Potato','quantity'=>10,'total'=>300,'status'=>'buy request'],
['order_id'=>503,'customer'=>'Karim','product'=>'Onion','quantity'=>3,'total'=>180,'status'=>'shipped'],
['order_id'=>504,'customer'=>'Jamal','product'=>'Rice','quantity'=>2,'total'=>100,'status'=>'none']
];


if($_SERVER["REQUEST_METHOD"]=="POST"){
    $order_id=$_POST['order_id'];
    foreach($orders as &$order){
        if($order['order_id']==$order_id){
            if(isset($_POST['confirm'])){
                $order['status']='shipped';
                $message="Order Id $order_id confirmed and shipped.";

            }elseif (isset($_POST['decline'])){
                $order['status']='none';
                $message="Order Id $order_id declined.";
            }
            break;
        }
    }
    unset($order);
}
?>


<!DOCTYPE html>
<html>

<head>

    <?php include("../includes/head.php"); ?>

</head>

<body>
    

    <div class="container">

        <div class="sidebar">
            <a href="dashboard.php">Dashboard</a>
            <a href="add_product.php">Add Product</a>
            <a href="my_products.php">My Products</a>
            <a href="orders.php">Orders</a>
            <a href="earnings.php">Seller Earnings</a>
            <a href="profile.php">Profile</a>
        </div>

        <div class="content">
            <h2>Customer Orders</h2><br>

            <?php
            
                
                if(isset($message)) echo "<p style='color:green; margin:8px; '>$message</p>"; ?>

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
                <?php foreach($orders as $order): ?>
                <tr>
                    <td><?= $order['order_id'] ?></td>
                    <td><?= $order['customer'] ?></td>
                    <td><?= $order['product'] ?></td>
                    <td><?= $order['quantity'] ?></td>
                    <td>৳<?= $order['total'] ?></td>
                    <td class="status-<?= str_replace(' ','-', $order['status']) ?>">
                        <?= ucfirst($order['status']) ?>
                    </td>
                    <td>
                        <?php if($order['status']== 'buy request'): ?>
                            <form method="post" style="display: inline;">
                                <input type="hidden" name="order_id" value="<?= $order['order_id'] ?>">
                                <input type="submit" name="confirm" value="Confirm">
                            </form>

                            <form method="post" style="display: inline;">
                                <input type="hidden" name="order_id" value="<?= $order['order_id'] ?>">
                                <input type="submit" name="decline" value="Decline">
                            </form>
                            <?php else: ?>
                                <em>No Action</em>
                                <?php endif; ?>
                    </td>

                    
                    
                    
                </tr>
                <?php endforeach; ?>

                
            </table>
             


        </div>

    </div>

    <?php include("../includes/footer.php"); ?>

</body>

</html>