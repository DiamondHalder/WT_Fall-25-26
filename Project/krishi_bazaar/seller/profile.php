<?php 
require_once("../includes/seller_auth.php");
include("../includes/header.php"); 

?>

<?php
$seller = $_SESSION['seller'] ?? [
    'name' => 'Sagor',
    'email' => 'Sagor@gmail.com',
    'phone' => '123452341234',
    'shop_name' => 'Sagor shop',
    'address' => 'Barishal',
    'password' => '1234'

];

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_profile'])) {
    $seller['name'] = $_POST['name'];
    $seller['email'] = $_POST['email'];
    $seller['phone'] = $_POST['phone'];
    $seller['shop_name'] = $_POST['shop_name'];
    $seller['address'] = $_POST['address'];
    $seller['password'] = $_POST['password'];

    $message = "Profile updated successfully";
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

        <div class="profile-box">
            <h2>My Profile</h2><br>

            <?php if (isset($message)) echo "<div class='message' style='color: green;' >$message</div>"; ?>

            <form method="post" class="profile-form">

                <div class="profile-grid">
                    <div>
                        <label for="name">Name</label>
                        <input type="text" name="name" value="<?= $seller['name'] ?>">
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <input type="email" name="email" value="<?= $seller['email'] ?>">
                    </div>
                    <div>
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" value="<?= $seller['phone'] ?>">
                    </div>
                    <div>
                        <label for="shop_name">Shop_name</label>
                        <input type="text" name="shop_name" value="<?= $seller['shop_name'] ?>">
                    </div>
                    <div>
                        <label for="address">Address</label>
                        <textarea name="address"><?= $seller['address'] ?></textarea>

                    </div>
                    <div>
                        <label for="password">Password</label>
                        <input type="password" name="password" value="<?= $seller['password'] ?>">

                    </div>

                </div>

                <div style="margin-top:10px;text-align:center;">
                    <button type="submit" name="update_profile" style="width: 100%;">Update Profile</button>
                </div>


            </form>


        </div>

    </div>

    <?php include("../includes/footer.php"); ?>

</body>

</html>