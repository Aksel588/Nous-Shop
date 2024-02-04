<?php

function getProducts()
{
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "arcada";
    $connection = new mysqli($servername, $username, $password, $dbname);

    $number = 18;
    $query = "SELECT * FROM men LIMIT $number";
    $result = mysqli_query($connection, $query);

    if ($result) {
        $products = array();
        while ($product = mysqli_fetch_assoc($result)) {
            $products[] = $product;
        }
        return $products;
    } else {
        return array();
    }
}

function showAll()
{
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "arcada";
    $connection = new mysqli($servername, $username, $password, $dbname);

    $query = "SELECT * FROM showAll ORDER BY id DESC";

    $result = mysqli_query($connection, $query);

    if (!$result) {
        die("Error in SQL query: " . mysqli_error($connection));
    }

    if ($result) {
        $products = array();
        while ($product = mysqli_fetch_assoc($result)) {
            $products[] = $product;
        }
        return $products;
    } else {
        return array();
    }
}

function men()
{
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "arcada";
    $connection = new mysqli($servername, $username, $password, $dbname);

    $query = "SELECT * FROM men ORDER BY id DESC";

    $result = mysqli_query($connection, $query);

    if (!$result) {
        die("Error in SQL query: " . mysqli_error($connection));
    }

    if ($result) {
        $products = array();
        while ($product = mysqli_fetch_assoc($result)) {
            $products[] = $product;
        }
        return $products;
    } else {
        return array();
    }
}

function women()
{
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "arcada";
    $connection = new mysqli($servername, $username, $password, $dbname);

    $query = "SELECT * FROM women ORDER BY id DESC";

    $result = mysqli_query($connection, $query);

    if (!$result) {
        die("Error in SQL query: " . mysqli_error($connection));
    }

    if ($result) {
        $products = array();
        while ($product = mysqli_fetch_assoc($result)) {
            $products[] = $product;
        }
        return $products;
    } else {
        return array();
    }
}

?>
