<?php
session_start();

$name = ""; $email = "";
$order_placed = false;

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_SESSION['cart'])) {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $order_placed = true;
    
    // Clear cart after order
    unset($_SESSION['cart']);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Checkout</title>
    <style>
        body { font-family: sans-serif; margin: 30px; }
        form { border: 1px solid #ccc; padding: 20px; width: 400px; border-radius: 5px; }
        .summary { background: #f9f9f9; padding: 15px; border: 1px solid #ddd; margin-bottom: 20px; }
    </style>
</head>
<body>
    <h2>Checkout</h2>

    <?php if ($order_placed): ?>
        <div style="color: green; font-weight: bold;">
            Thank you, <?php echo $name; ?>! Your order has been placed successfully.
        </div>
        <p>A confirmation email will be sent to: <?php echo $email; ?></p>
        <a href="index.php">Back to Catalog</a>
    <?php else: ?>
        <form method="post" action="">
            Name: <br>
            <input type="text" name="name" required><br><br>

            Email: <br>
            <input type="email" name="email" required><br><br>

            <button type="submit">Place Order</button>
        </form>
    <?php endif; ?>
</body>
</html>