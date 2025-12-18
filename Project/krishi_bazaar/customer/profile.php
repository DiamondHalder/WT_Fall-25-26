
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
            <h2>My Profile</h2><br>
           <?php 
           if($_SERVER["REQUEST_METHOD"]=="POST"){
            $name=trim($_POST["name"]);
            $email=trim($_POST["email"]);
            $age=($_POST["gender"]);
            $gender=trim($_POST["address"]);
            $phone=trim($_POST["phone"]);
            $address=trim($_POST["address"]);

            if($name==""||$email==""||$age==""||$gender==""||$phone==""||$address==""){
                echo "<p style='color:red;'>All fields are required.</p>";
            }

           }
            ?>


        </div>

    </div>

    <?php include("../includes/footer.php"); ?>

</body>

</html>