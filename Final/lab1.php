<?php
$fruits = [
    "Apple" => 120,
    "Banana" => 80,
    "Orange" => 150,
    "Mango" => 95,
    "Grapes" => 300
];
echo "<h2>Fruit Store</h2>";
echo "<ul>";
foreach ($fruits as $fruit_name => $price)
{
    echo "<li>$fruit_name: $$price";
    if($price<100)
    {
        echo " <span style='color:red;'>(On Sale!)</span>";
    }
    echo "</li>";
}
echo "</ul>";

$total=0;
foreach($fruits as $price)
{
    $total += $price;
}
echo "<p><strong>Total cost of all fruits: $$total</strong></p>";
$sale_count=0;
foreach($fruits as $price)
{
    if($price<100)
    {
        $sale_count++;
    }
}
echo "<p>Number of fruits on sale: $sale_count</p>";
?>