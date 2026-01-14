<?php
session_start();

// Remove Item
if (isset($_GET['remove'])) {
    $id = $_GET['remove'];
    foreach ($_SESSION['cart'] as $key => $item) {
        if ($item['id'] == $id) {
            unset($_SESSION['cart'][$key]);
        }
    }
    $_SESSION['cart'] = array_values($_SESSION['cart']); // Re-index array
    header("Location: cart.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Shopping Cart</title>
    <style>
        body { font-family: sans-serif; margin: 30px; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: center; }
        .total { font-weight: bold; font-size: 1.2em; text-align: right; margin-top: 20px; }
    </style>
</head>
<body>
    <nav>
        <a href="index.php">Back to Catalog</a>
    </nav>

    <h2>Your Shopping Cart</h2>

    <?php if (!empty($_SESSION['cart'])): ?>
        <table>
            <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Subtotal</th>
                <th>Action</th>
            </tr>
            <?php 
            $grand_total = 0;
            foreach ($_SESSION['cart'] as $item): 
                $subtotal = $item['price'] * $item['quantity'];
                $grand_total += $subtotal;
            ?>
                <tr>
                    <td><?php echo $item['name']; ?></td>
                    <td><?php echo $item['price']; ?></td>
                    <td><?php echo $item['quantity']; ?></td>
                    <td><?php echo $subtotal; ?></td>
                    <td><a href="cart.php?remove=<?php echo $item['id']; ?>" style="color:red;">Remove</a></td>
                </tr>
            <?php endforeach; ?>
        </table>

        <div class="total">Grand Total: <?php echo $grand_total; ?> BDT</div>
        <br>
        <a href="checkout.php" style="padding: 10px; background: green; color: white; text-decoration: none; border-radius: 5px;">Proceed to Checkout</a>

    <?php else: ?>
        <p>Your cart is empty.</p>
    <?php endif; ?>
</body>
</html>