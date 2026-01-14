<?php
session_start();

// Products Array
$products = [
    ["id" => 1, "name" => "Laptop", "price" => 50000],
    ["id" => 2, "name" => "Phone", "price" => 20000],
    ["id" => 3, "name" => "Headphones", "price" => 2000],
    ["id" => 4, "name" => "Mouse", "price" => 500],
    ["id" => 5, "name" => "Keyboard", "price" => 1000],
    ["id" => 6, "name" => "Monitor", "price" => 10000]
];

// Handle Add to Cart
if (isset($_POST['add_to_cart'])) {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];

    $item = [
        'id' => $product_id,
        'name' => $product_name,
        'price' => $product_price,
        'quantity' => 1
    ];

    // Store in Session
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // Check if item already exists in cart
    $found = false;
    foreach ($_SESSION['cart'] as &$cart_item) {
        if ($cart_item['id'] == $product_id) {
            $cart_item['quantity'] += 1;
            $found = true;
            break;
        }
    }

    if (!$found) {
        $_SESSION['cart'][] = $item;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Product Catalog</title>
    <style>
        body { font-family: sans-serif; margin: 30px; }
        .product-list { display: flex; flex-wrap: wrap; gap: 20px; }
        .product-card { border: 1px solid #ccc; padding: 15px; width: 200px; text-align: center; border-radius: 5px; }
        nav { margin-bottom: 20px; }
    </style>
</head>
<body>
    <nav>
        <a href="index.php">Catalog</a> | <a href="cart.php">View Cart (<?php echo isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0; ?>)</a>
    </nav>

    <h2>Product Catalog</h2>
    <div class="product-list">
        <?php foreach ($products as $p): ?>
            <div class="product-card">
                <h3><?php echo $p['name']; ?></h3>
                <p>Price: <?php echo $p['price']; ?> BDT</p>
                <form method="post" action="">
                    <input type="hidden" name="product_id" value="<?php echo $p['id']; ?>">
                    <input type="hidden" name="product_name" value="<?php echo $p['name']; ?>">
                    <input type="hidden" name="product_price" value="<?php echo $p['price']; ?>">
                    <button type="submit" name="add_to_cart">Add to Cart</button>
                </form>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>