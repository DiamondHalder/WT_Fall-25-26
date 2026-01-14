<?php
session_start();
session_unset();
session_destroy(); // সেশন মুছে ফেলা 
header("Location: login.php"); // লগইন পেজে ফেরত পাঠানো 
exit();
?>