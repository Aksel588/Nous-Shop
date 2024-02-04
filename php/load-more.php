<?php
session_start();
include "./product.php";

// Get the current page from the AJAX request
$page = isset($_POST['page']) ? $_POST['page'] : 1;

// Number of products to display per page
$productsPerPage = 5;

// Calculate the starting index for products on the current page
$startIndex = ($page - 1) * $productsPerPage;

// Get the products for the current page
$products = getProductsSlice($startIndex, $productsPerPage);

// Return the products as JSON
echo json_encode($products);

error_reporting(E_ALL);
ini_set('display_errors', 1);
