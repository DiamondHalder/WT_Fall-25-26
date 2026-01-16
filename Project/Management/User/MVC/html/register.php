<?php include("../html/includes/header.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <?php include("../html/includes/head.php"); ?>
</head>
<body>

<div class="container">

    <div class="profile-box">
        <h2 align="center">Seller Registration</h2><br>

        <?php if (!empty($success)): ?>
            <div class="message" style="color:green; margin:8px; border: 1px solid green; padding: 5px;">
                <?php echo $success; ?>
            </div>
        <?php endif; ?>

        <?php if (!empty($error)): ?>
            <div class="message" style="color:red; margin:8px; border: 1px solid red; padding: 5px;">
                <?php echo $error; ?>
            </div>
        <?php endif; ?>

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
            <a href="../html/login.php">Login</a>
        </p>

    </div>

</div>

<?php include("../html/includes/footer.php"); ?>
</body>
</html>
