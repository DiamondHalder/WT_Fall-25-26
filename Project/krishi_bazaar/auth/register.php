<?php
$error = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $shop = trim($_POST['shop']);
    $address = trim($_POST['address']);
    $password = $_POST['password'];
    $confirm = $_POST['confirm_password'];

    if ($name == "" || $email == "" || $phone == "" || $shop == "" || $address == "" || $password == "" || $confirm == "") {
        $error = "All fields are required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email format.";
    } elseif (!is_numeric($phone) || strlen($phone) < 10) {
        $error = "Invalid phone number.";
    } elseif (strlen($password) < 6) {
        $error = "Password must be at least 6 characters";
    } elseif ($password !== $confirm) {
        $error = "Password doesn't match.";
    } else {
        $success = "Registration successful. You can now login.";
    }
}

?>


<!DOCTYPE html>
<html>

<head>
    <?php include("../includes/head.php"); ?>
</head>

<body>


    <div class="navbar">
        <div class="nav-left">
            <img src="../assets/images/plogo.png" alt="Krishi Bazaar Logo">
            <strong>Krishi Bazaar</strong>
        </div>

    </div>

    <div class="container">
        <div class="profile-box_3">
            <h2>Seller Registration</h2>

            <?php if ($error): ?>
                <p style="color:red;"><?= $error ?></p>
            <?php endif; ?>

            <?php if ($success): ?>
                <p style="color:green;"><?= $success ?></p>
            <?php endif; ?>

            <form method="post" class="profile-form">
                <div class="profile-grid">
                    <div>
                        <label>Name</label>
                        <input type="text" name="name">
                    </div>

                    <div>
                        <label>Email</label>
                        <input type="email" name="email">
                    </div>
                    <div>

                        <label>Phone</label>
                        <input type="text" name="phone">
                    </div>
                    <div>
                        <label>Shop Name</label>
                        <input type="text" name="shop">
                    </div>
                    <div>
                        <label>Password</label>
                        <input type="password" name="password">
                    </div>
                    <div>

                        <label>Address</label>
                        <textarea name="address"></textarea>
                    </div>
                    
                    <div>
                        <label>Confirm Password</label>
                        <input type="password" name="confirm_password">
                    </div>
                </div>

                <button type="submit">Register</button>


            </form>

        </div>

    </div>


    <?php include("../includes/footer.php"); ?>
</body>

</html>