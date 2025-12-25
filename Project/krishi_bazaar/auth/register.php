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
        $error = "Password must be at least 6 characters";
    }elseif($password !=== $confirm){
        $error = "Password doesn't match.";
    }else{
        $success="Registration successful. You can now login.";
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
            <h2>Seller Registration</h2>

            <?php if ($error): ?>
                <p style="color:red;"><?= $error ?></p>
            <?php endif; ?>

             <?php if ($success): ?>
                <p style="color:green;"><?= $success ?></p>
            <?php endif; ?>

            <form method="post" class="profile-form">
                <label>Name</label>
                <input type="text" name="name">
                

                <label>Email</label>
                <input type="email" name="email">

                <label>Phone</label>
                <input type="text" name="phone">

                <label>Shop Name</label>
                <input type="text" name="shop">
                

                <label>Address</label>
                <textarea name="address"></textarea>

                <label>Password</label>
                <input type="password" name="password">

                <label>Confirm Password</label>
                <input type="password" name="confirm_password">

                <button type="submit">Register</button>

               
            </form>

        </div>

    </div>

    
    <?php include("../includes/footer.php"); ?>
</body>

</html>