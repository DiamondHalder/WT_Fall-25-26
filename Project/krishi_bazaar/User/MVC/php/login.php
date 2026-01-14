<?php
session_start();
include("../db/db.php");

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if ($email == "" || $password == "") {
        $error = "Email and Password required.";
     
    } else {
        $sql = "SELECT * FROM sellers WHERE email ='$email'";
        $result = $conn->query($sql);

        if($result->num_rows ==1){
            $seller = $result->fetch_assoc();

            if 
        }

        

        
    }
}


$_SESSION['login_error'] = $error;
header("Location: ../html/login.php");
exit();
?>
