<?php

session_start();

$name = $_POST["name"];
$company = $_POST["company"];
$size = $_POST["size"];
$price = $_POST["price"];

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

$newProduct = array(
    "name" => $name,
    "company" => $company,
    "size" => $size,
    "price" => $price,
);

// Add the new product to the cart array
$_SESSION['cart'][] = $newProduct;

// Recalculate total price for each product in the cart
$totalPrice = 0;
foreach ($_SESSION['cart'] as &$product) {
    $totalPrice += $product['price'];
}

// Update totalAmount in the session
$_SESSION['totalAmount'] = $totalPrice;

// Update the count of items in the shopping cart
$_SESSION['countBasket'] = count($_SESSION['cart']);

echo $totalPrice;

?>
