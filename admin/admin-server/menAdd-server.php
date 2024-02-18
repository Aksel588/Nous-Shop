<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $img = $_POST['img'];
    $num = $_POST['num'];
    $size = $_POST['size'];
    $com = $_POST['com'];

    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "arcada";

    // Create connection
    $connection = new mysqli($servername, $username, $password, $dbname);

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    // Use prepared statement to prevent SQL injection
    $query = "INSERT INTO `men` (`id`,`name`, `images`, `price`, `sizeMen`, `company`) VALUES (NULL, ?, ?, ?, ?, ?)";
    $statement = $connection->prepare($query);

    // Bind parameters
    $statement->bind_param("ssdss", $name, $img, $num, $size, $com);

    // Execute the statement
    $result = $statement->execute();

    // Check for success
    if ($result) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . $statement->error;
    }

    // Close statement and connection
    $statement->close();
    $connection->close();

    header('location: ../men-edit.php');
} else {
    echo "hello";
}
?>
