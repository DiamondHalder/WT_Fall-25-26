<?php
session_start();
session_destroy(); 

echo "Logged out successfully!";
echo "<br><a href='dashboard.php'>Back to Dashboard</a>";
?>