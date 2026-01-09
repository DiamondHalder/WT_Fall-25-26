<!DOCTYPE html>
<html>
    <head>
        <title>User Registration Form</title>
        <style>
            
            body { font-family: sans-serif; margin: 50px; }
            .error { color: red; }
            .success { color: green; font-weight: bold; }
            form { border: 1px solid #ccc; padding: 20px; width: 500px; border-radius: 5px; }
        </style>
    </head>
    <body>

        <?php
       
        $name = ""; $nameerror = "";
        $email = ""; $emailerror = "";
        $password = ""; $passerror = "";
        $confirm_password = ""; $confpasserror = "";
        $success_message = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          

            
            if (empty($_POST["name"])) {
                $nameerror = "Name is Required";
               
            } else {
                $name = htmlspecialchars($_POST["name"]); 
            }

            
            if (empty($_POST["email"])) {
                $emailerror = "Email is Required";
               
            } else {
                $email = $_POST["email"];
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailerror = "Invalid email format";
                    
                } else {
                    $email = htmlspecialchars($email);  
                }
            }

          
            if (empty($_POST["password"])) {
                $passerror = "Password is Required";
                
            }

           
            if (empty($_POST["confirm_password"])) {
                $confpasserror = "Please confirm your password";
               
            } else {
                if ($_POST["password"] !== $_POST["confirm_password"]) {
                    $confpasserror = "Passwords do not match";
                    
                }
            }

           
           
        }
        ?>

        <h2>Registration Form</h2>

        <?php 
             if (empty($nameerror) && empty($emailerror) && empty($passerror) && empty($confpasserror)) {
            echo "<h3 style='color:green;'>Registration Successful!</h3>";
           
        }
        ?>

        <form method="post" action="">
            Name: <br>
            <input type="text" name="name" value="<?php echo $name; ?>">
            <span class="error"><?php echo $nameerror; ?></span><br><br>

            Email: <br>
            <input type="text" name="email" value="<?php echo $email; ?>">
            <span class="error"><?php echo $emailerror; ?></span><br><br>

            Password: <br>
            <input type="password" name="password">
            <span class="error"><?php echo $passerror; ?></span><br><br>

            Confirm Password: <br>
            <input type="password" name="confirm_password">
            <span class="error"><?php echo $confpasserror; ?></span><br><br>

            <button type="submit">Register</button>
        </form>

        <?php
        
        if (empty($nameerror) && empty($emailerror) && empty($passerror) && empty($confpasserror)) {
            echo "<h3>Your Submitted Data:</h3>";
            echo "Name: " . $name . "<br>";
            echo "Email: " . $email . "<br>";
        }
        ?>

    </body>
</html>