<?php
session_start();

function userProfile()
{
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "ooplogin";

    $connection = new mysqli($servername, $username, $password, $dbname);

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    $query = "SELECT * FROM users";

    // Check if the search term is provided
    if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['search'])) {
        $searchTerm = trim($_GET['search']);

        // Use prepared statement to prevent SQL injection
        $query = $connection->prepare("SELECT * FROM users WHERE users_uid LIKE ? OR users_email LIKE ?");
        $searchPattern = "%$searchTerm%";
        $query->bind_param("ss", $searchPattern, $searchPattern);
        $query->execute();
        $result = $query->get_result();

        if ($result) {
            $products = $result->fetch_all(MYSQLI_ASSOC);
            return $products;
        }
    } else {
        $result = $connection->query($query);
        if ($result) {
            $products = $result->fetch_all(MYSQLI_ASSOC);
            return $products;
        }
    }

    return array();
}


