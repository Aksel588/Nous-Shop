<?php
if (isset($_POST["submit"])) {
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "arcada";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $textarea = $_POST["textArea"];

    $sql = "UPDATE `aboutUs` SET `text` = ? WHERE 1";
    $stmt = $conn->prepare($sql);

    $stmt->bind_param("s", $textarea);

    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "Update successful!";
    } else {
        echo "Update failed!";
    }

    $stmt->close();
    $conn->close();
    header("location:../../php/profile.php");
}
?>
