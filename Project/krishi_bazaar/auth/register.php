<?php
$error = "";
$success= "";

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
    } elseif(!is_numeric($phone) || strlen($phone)<10){
        $error = "Invalid phone number.";
        
    }elseif (strlen($password)<6){
        $error = "";
    }

        if ($role === "seller" || $role === "customer") {
            if ($role === "seller") {
                header("Location: ../seller/dashboard.php");
                exit;
            } else {
                header("Location: ../customer/dashboard.php");
                exit;
            }
        }
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

    <div class="profile-box_2">
        <div class="content">
            <h2>Login</h2>

            <?php if ($error): ?>
                <p style="color:red;"><?= $error ?></p>
            <?php endif; ?>

            <form method="post" class="profile-form">
                <label>User Type</label>
                <select name="role" id="role" onchange="toggleRegister()" required>
                    <option value="">Select</option>
                    <option value="admin">Admin</option>
                    <option value="customer">Customer</option>
                    <option value="seller">Seller</option>
                </select>

                <label>Email</label>
                <input type="email" name="email" required>

                <label>Password</label>
                <input type="password" name="password" required>

                <button type="submit">Login</button>

                <p id="registerLink" style="display: none; margin-top:10px;">
                    Don't have an account?
                    <a href="register.php">Register here</a>
                </p>
            </form>

        </div>

    </div>

    <script>
        function toggleRegister() {
            let role = document.getElementById("role").value;
            let link = document.getElementById("registerLink");

            if (role === "seller" || role === "customer") {
                link.style.display = "block";
            } else {
                link.style.display = "none";
            }
        }
    </script>
    <?php include("../includes/footer.php"); ?>
</body>

</html>