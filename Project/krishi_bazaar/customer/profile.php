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

        <div class="profile-box">
            <h2>My Profile</h2><br>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = trim($_POST["name"]);
                $email = trim($_POST["email"]);
                $age = ($_POST["age"]);
                $gender = trim($_POST["gender"]);
                $phone = trim($_POST["phone"]);
                $address = trim($_POST["address"]);

                if ($name == "" || $email == "" || $age == "" || $gender == "" || $phone == "" || $address == "") {
                    echo "<p style='color:red;'>All fields are required.</p>";
                } elseif (!is_numeric($age) || $age < 1) {
                    echo "<p style='color:red;'>Please Enter a Valid Age.</p>";
                } else {
                    echo "<p style='color:green;'>Profile updated successfull</p>";
                }
            }
            ?>

            <form method="post" class="profile-form">

                <div class="profile-grid">


                    <div>


                        <label>Name</label>
                        <input type="text" name="name" value="Rabbi">
                        <label>Email</label>
                        <input type="email" name="email" value="a@gmail.com">
                        <label>Age</label>
                        <input type="number" name="age" value="22">
                    </div>
                    <div>
                        <label>Gender</label>
                        <select name="gender">
                            <option value="">Select</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        <label>Phone</label>
                        <input type="text" name="phone" value="0171111111111">
                        <label>Address</label>
                        <textarea name="address">Dhaka</textarea>
                    </div>
                </div>
                <button type="submit" value="Update Profie">Update Profile</button>
            </form>


        </div>

    </div>

    <?php include("../includes/footer.php"); ?>

</body>

</html>