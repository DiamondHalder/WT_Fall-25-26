<!DOCTYPE html>
<html>
    <head>
        <title>Contact Form</title>
        <style>
            body { font-family: sans-serif; margin: 50px; }
            .error { color: red; }
            form { border: 1px solid #ccc; padding: 20px; width: 500px; border-radius: 5px; }
            .success-box { border: 1px solid green; padding: 15px; background: #eaffea; width: 490px; margin-bottom: 20px; }
        </style>
    </head>
    <body>

        <?php
        $name = ""; $nameerror = "";
        $email = ""; $emailerror = "";
        $subject = ""; $subjecterror = "";
        $message = ""; $messageerror = "";
        $attachment_msg = "";
        $is_valid = false;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $is_valid = true;

            // Name validation
            if (empty($_POST["name"])) {
                $nameerror = "Name is Required";
                $is_valid = false;
            } else {
                $name = htmlspecialchars($_POST["name"]);
            }

            // Email validation
            if (empty($_POST["email"])) {
                $emailerror = "Email is Required";
                $is_valid = false;
            } else {
                $email = $_POST["email"];
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailerror = "Invalid email format";
                    $is_valid = false;
                } else {
                    $email = htmlspecialchars($email);
                }
            }

            // Subject validation
            if (empty($_POST["subject"])) {
                $subjecterror = "Please select a subject";
                $is_valid = false;
            } else {
                $subject = $_POST["subject"];
            }

            // Message validation (min 10 chars)
            if (empty($_POST["message"])) {
                $messageerror = "Message is Required";
                $is_valid = false;
            } else {
                $message = htmlspecialchars($_POST["message"]);
                if (strlen($message) < 10) {
                    $messageerror = "Message must be at least 10 characters";
                    $is_valid = false;
                }
            }

            // Optional File validation
            if (!empty($_FILES["attachment"]["name"])) {
                $file_size = $_FILES["attachment"]["size"];
                if ($file_size > 2000000) { // 2MB limit
                    $attachment_msg = "File is too large (max 2MB)";
                    $is_valid = false;
                } else {
                    $attachment_msg = "File uploaded: " . $_FILES["attachment"]["name"];
                }
            }
        }
        ?>

        <h2>Contact Form</h2>

        <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && $is_valid): ?>
            <div class="success-box">
                <h3 style="color:green;">Email Sent Successfully!</h3>
                <strong>Name:</strong> <?php echo $name; ?><br>
                <strong>Email:</strong> <?php echo $email; ?><br>
                <strong>Subject:</strong> <?php echo $subject; ?><br>
                <strong>Message:</strong> <?php echo $message; ?><br>
                <strong>File:</strong> <?php echo (!empty($attachment_msg)) ? $attachment_msg : "No file"; ?>
            </div>
            <?php 
                // Clear form data after successful submission
                $name = $email = $subject = $message = ""; 
            ?>
        <?php endif; ?>

        <form method="post" action="" enctype="multipart/form-data">
            Name: <br>
            <input type="text" name="name" value="<?php echo $name; ?>">
            <span class="error"><?php echo $nameerror; ?></span><br><br>

            Email: <br>
            <input type="text" name="email" value="<?php echo $email; ?>">
            <span class="error"><?php echo $emailerror; ?></span><br><br>

            Subject: <br>
            <select name="subject">
                <option value="">--Select--</option>
                <option value="General" <?php if($subject=="General") echo "selected"; ?>>General</option>
                <option value="Support" <?php if($subject=="Support") echo "selected"; ?>>Support</option>
                <option value="Feedback" <?php if($subject=="Feedback") echo "selected"; ?>>Feedback</option>
            </select>
            <span class="error"><?php echo $subjecterror; ?></span><br><br>

            Message: <br>
            <textarea name="message" rows="4" cols="40"><?php echo $message; ?></textarea><br>
            <span class="error"><?php echo $messageerror; ?></span><br><br>

            Attachment (Optional): <br>
            <input type="file" name="attachment">
            <span class="error"><?php echo $attachment_msg; ?></span><br><br>

            <button type="submit">Send Message</button>
        </form>

    </body>
</html>