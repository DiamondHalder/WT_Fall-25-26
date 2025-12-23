
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
            <a href="earnings.php">Seller Earnings</a>
            <a href="profile.php">Profile</a>
        </div>

        <div class="content">
            <h2>Add New Product</h2><br>

            <?php
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                $name=trim($_POST["name"]);
                $category=trim($_POST["category"]);
                $price=trim($_POST["price"]);
                $quantity=trim($_POST["quantity"]);
                
                if($name=="" || $category=="" || $price=="" || $quantity=="" ){
                    echo "<p style='color:red;'>All fields are required.</p>";
                }elseif (!is_numeric($price) || $price<=0){
                    echo "<p style='color:red;'>Enter a valid price.</p>";
                }elseif (!is_numeric($quantity) || $quantity<1){
                    echo "<p style='color:red;'>Enter a valid quantity.</p>";
                }else {
                    echo "<p style='color:green;'>Product added successfully.</p>";
                }
            } 
             ?>

             <div class="profile-box">
                <form method="post" class="profile-form">
                    <label>Product Name</label>
                    <input type="text" name="name">

                    <label>Category</label>
                    <select name="category" >
                        <option value="">Select</option>
                        <option value="Vegetables">Vegetables</option>
                        <option value="Fruits">Fruits</option>
                        <option value="Grains">Grains</option>
                    </select>

                    <label>Price (per kg)</label>
                    <input type="number" name="price">

                    <label>Quantity (kg)</label>
                    <input type="number" name="quantity">

                    

                    <br>
                    <button type="submit">Add Product</button>

                </form>
             </div>


        </div>

    </div>

    <?php include("../includes/footer.php"); ?>

</body>

</html>