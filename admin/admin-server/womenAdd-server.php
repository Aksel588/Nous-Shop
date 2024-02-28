<?php
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

    $connection = new mysqli($servername, $username, $password, $dbname);

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    $query = "INSERT INTO `women` (`id`,`name`, `images`, `price`, `sizeWomen`, `company`) VALUES (NULL, ?, ?, ?, ?, ?)";
    $statement = $connection->prepare($query);

    $statement->bind_param("ssdss", $name, $img, $num, $size, $com);

    // Execute the statement
    $result = $statement->execute();

    if ($result) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . $statement->error;
    }

    $statement->close();
    $connection->close();

    header('location: ../women-edit.php');
} else {
    echo "hello";
}
?>
