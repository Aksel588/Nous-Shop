<?php

$server = "localhost";
$user = "root";
$pass = "root";
$db = "arcada";

$conn = new mysqli($server, $user, $pass, $db);

if ($conn->connect_error) {
    die("Sorry, can't connect to the MySQL: " . $conn->connect_error);
}
$conn->close();

?>
