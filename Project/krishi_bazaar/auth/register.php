<!DOCTYPE html>
<html>
    <head>
        <?php include("../includes/head.php"); ?>
    </head>
    <body>
        <?php include("../includes/header.php"); ?>

        <div class="container">
            <div class="content">
                <h2>Login</h2>

                <?php if ($error): ?>
                    <p style="color:red;"><?= $error ?>></p>
                    <?php endif; ?>

                    <form method="post">
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
                            Don't have an accout?
                            <a href="register.php">Register here</a>
                        </p>
                    </form>

            </div>

        </div>

        <script>
            function toggleRegister(){
                
            }
        </script>
    </body>
</html>