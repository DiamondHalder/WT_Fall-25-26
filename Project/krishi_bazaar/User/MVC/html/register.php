<?php include("includes/header.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <?php include("includes/head.php"); ?>
</head>
<body>

<div class="container">

    <div class="profile-box">
        <h2>Seller Registration</h2><br>

        <?php if (!empty($message)) echo "<div class='message' style='color:green; margin:8px;'>$message</div>"; ?>

       <form method="post" action="../php/register.php" class="profile-form">

            <div class="profile-grid">
                <div>
                    <label>Name</label>
                    <input type="text" name="name" required>
                </div>

                <div>
                    <label>Email</label>
                    <input type="email" name="email" required>
                </div>

                <div>
                    <label>Phone</label>
                    <input type="text" name="phone" required>
                </div>

                <div>
                    <label>Shop Name</label>
                    <input type="text" name="shop_name" required>
                </div>

                <div>
                    <label>Address</label>
                    <textarea name="address" required></textarea>
                </div>

                <div>
                    <label>Password</label>
                    <input type="password" name="password" required>
                </div>
            </div>

            <div style="margin-top:10px;text-align:center;">
                <button type="submit" name="register" style="width: 100%;">Register</button>
            </div>

        </form>

        <p style="text-align:center; margin-top:10px;">
            Already have an account?
            <a href="../php/login.php">Login</a>
        </p>

    </div>

</div>

<?php include("includes/footer.php"); ?>
</body>
</html>
