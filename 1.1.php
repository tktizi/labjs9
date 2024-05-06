<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product = $_POST['product'];
    $material = $_POST['material'];
    $quantity = $_POST['quantity'];
    echo "<h2>Your order is submitted!</h2>";
    echo "<p>Product ordered: " . $product . "</p>";
    echo "<p>Material: " . $material . "</p>";
    echo "<p>Quantity: " . $quantity . "</p>";
}
?>