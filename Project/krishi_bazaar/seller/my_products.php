
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
            <a href="add_product.php"></a>
            <a href="my_products.php">My Products</a>
            <a href="orders.php">Orders</a>
            <a href="profile.php">Profile</a>
        </div>

        <div class="content">
            <h2>My Products</h2><br>

            <?php
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                
                if(isset($_POST['delete_product'])){
                    $product_id=$_POST['product_id'];
                    echo "<p style='color:red; margin:8px; '>Product Id $product_id deleted.</p>";
                }

                 if(isset($_POST['edit_product'])){
                    $product_id=$_POST['product_id'];
                    echo "<p style='color:green; margin:8px;'>Edit request for Product Id $product_id.</p>";
                }
                
            } 
             ?>

            <table>
                <tr>
                    <th>Product ID</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td>301</td>
                    <td>Rice</td>
                    <td>৳50/kg</td>
                    <td>100</td>
                    <td style="color:orange;">Pending</td>
                    <td>
                        <form method="get" style="display: inline;" action="edit_product.php">
                            <input type="hidden" name="product_id" value="301">
                            <input type="submit" name="edit_product" value="Edit">
                        </form>

                         <form method="post" style="display: inline;">
                            <input type="hidden" name="product_id" value="301">
                            <input type="submit" name="delete_product" value="Delete">
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>302</td>
                    <td>Potato</td>
                    <td>৳30/kg</td>
                    <td>200</td>
                    <td style="color:green;">Approved</td>
                    <td>
                        <form method="get" style="display: inline;" action="edit_product.php">
                            <input type="hidden" name="product_id" value="302">
                            <input type="submit" name="edit_product" value="Edit">
                        </form>

                         <form method="post" style="display: inline;">
                            <input type="hidden" name="product_id" value="302">
                            <input type="submit" name="delete_product" value="Delete">
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>303</td>
                    <td>Onion</td>
                    <td>৳60/kg</td>
                    <td>0</td>
                    <td style="color:red;">Rejected</td>
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