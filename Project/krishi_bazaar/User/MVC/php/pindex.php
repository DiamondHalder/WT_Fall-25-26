<?php
session_start();
if (isset($_SESSION['seller_id'])) {
    header("Location: seller_dashboard.php");
    exit();
} else {
    header("Location: login.php");
    exit();
}

include("../html/hindex.php");
?>