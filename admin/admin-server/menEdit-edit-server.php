<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "arcada";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$idToDelete = isset($_POST['id']) ? intval($_POST['id']) : 0;

if ($idToDelete <= 0) {
    echo "Invalid or missing ID.";
    exit();
}

$sql = "DELETE FROM `men` WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $idToDelete);

if ($stmt->execute()) {
    echo "Record deleted successfully!";
} else {
    echo "Error deleting record: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
