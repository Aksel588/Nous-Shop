<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "ooplogin";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$idToDelete = isset($_POST['id']) ? intval($_POST['id']) : 0;

// Check if the ID is valid
if ($idToDelete <= 0) {
    echo "Invalid or missing ID.";
    exit();
}

$sql = "DELETE FROM `users` WHERE users_id = ?";
$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("Error in preparing statement: " . $conn->error);
}

$stmt->bind_param("i", $idToDelete);

if (!$stmt->execute()) {
    die("Error executing query: " . $stmt->error);
}

echo "Record deleted successfully!";

$stmt->close();
$conn->close();
?>
