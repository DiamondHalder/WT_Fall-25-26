

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
            <h2>My Cart</h2><br>
           <?php 
           if($_SERVER["REQUEST_METHOD"]=="POST"){
            if(isset($_POST['remove'])){
                $product_id = $_POST['product_id'];
                echo "<p style='color:red; margin:8px;'>Product ID $product_id removed from cart.</p>";

            }

             if(isset($_POST['update_qty'])){
                $qty = $_POST['quantity'];
                echo "<p style='color:white; margin:8px;'>Quantity updated to $qty.</p>";

            }
           }
           ?>

           <table>
             <tr>               
                <th>Product</td>
                <th>Price</td>
                <th>Quantity </td>
                <th>Subtotal</td>
                <th>Action</td>
             </tr>
             <tr>
                <td>Rice</td>
                <td>৳50</td>
                <td>
                    <form method="post" style="display: inline;">
                        <input type="number" name="quantity" value="5" min="1" style="width: 60px;">
                        <input type="submit" name="update_qty" value="update"">
                    </form>
                </td>
                <td>৳250</td>
                
                <td>
                 <form method="post">
                    <input type="hidden" name="product_id" value="201">
                    <input type="submit" name="remove" value="Remove">
                 </form>
                </td>
             </tr>

             <tr>
                
                <td>Potato</td>
                <td>৳30</td>
                <td>
                    <form method="post" style="display: inline;">
                       <input type="number" name="quantity" value="10" min="1" style="width: 60px;">
                        <input type="submit" name="update_qty" value="update""> 
                    </form>
                </td>
                <td>৳300</td>
                <td>
                    <form method="post">
                    <input type="hidden" name="product_id" value="202">
                    <input type="submit" name="remove" value="Remove">
                 </form>

                </td>
                
             </tr>
             
           </table>

           <br><h3>Total Amount:৳500</h3><br>

           <form >
            <input type="submit" value="Proceed to Checkout" >
            <small></small>
           </form>
            
           
            

        </div>

    </div>

    <?php include("../includes/footer.php"); ?>

</body>

</html>