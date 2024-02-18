<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "arcada";

$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

if (isset($_POST['search'])) {
    $searchTerm = '%' . $_POST['search'] . '%';

    $query = "SELECT * FROM men WHERE name LIKE ?";
    $stmt = $connection->prepare($query);
    $stmt->bind_param("s", $searchTerm);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo '<form action="./admin-server/menAdd-server.php" method="post">' .

            '<tr class="register">' .
            '<td>' .
            '<p class="text">Register</p>' .
            '</td>' .
            '<td>' .
            '<input type="text" placeholder="Name product" name="name" id="name">' .
            '</td>' .
            '<td>' .
            '<input type="text" placeholder="Link your Image" id="img" name="img">' .
            '</td>' .
            '<td>' .
            '<input type="number" placeholder="Price" id="num" name="num">' .
            '</td>' .
            '<td>' .
            '<input type="text" placeholder="Size" id="size" name="size">' .
            '</td>' .
            '<td>' .
            '<input type="text" placeholder="Company name" id="com" name="com">' .
            '</td>' .
            '<td>' .
            '<button type="submit" name="submit" class="send">Send</button>' .
            '</td>' .
            '</tr>' .
            '</form>';

        echo
            '<tr>' .
            '<th>Id</th>' .
            '<th>Name</th>' .
            '<th>Images</th>' .
            '<th>Price</th>' .
            '<th>Size</th>' .
            '<th>Company</th>' .
            '<th>Edit</th>' .
            '</tr>';


        while ($user = $result->fetch_assoc()) {
            echo
                '<tr>' .
                '<td>' . $user['id'] . '</td>' .
                '<td>' . $user['name'] . '</td>' .
                '<td>' . $user['images'] . '</td>' .
                '<td>' . $user['price'] . '</td>' .
                '<td>' . $user['sizeMen'] . '</td>' .
                '<td>' . $user['company'] . '</td>' .
                '<td>' .
                '<a class="editUser" data-users-id="' . $user['id'] . '" href="#">' .
                '<i class="fa-solid fa-trash"></i>' .
                '</a>' .
                '</td>' .
                '</tr>';
        }
    } else {
        echo '<tr><td colspan="5">No results found</td></tr>';
    }

    $stmt->close();
} else {
    $query = "SELECT * FROM men";
    $result = mysqli_query($connection, $query);

    if ($result) {
        while ($user = mysqli_fetch_assoc($result)) {

            echo '<form action="./admin-server/menAdd-server.php" method="post">' .
                '<table>' .
                '<tr class="register">' .
                '<td>' .
                '<p class="text">Register</p>' .
                '</td>' .
                '<td>' .
                '<input type="text" placeholder="Name product" name="name" id="name">' .
                '</td>' .
                '<td>' .
                '<input type="text" placeholder="Link your Image" id="img" name="img">' .
                '</td>' .
                '<td>' .
                '<input type="number" placeholder="Price" id="num" name="num">' .
                '</td>' .
                '<td>' .
                '<input type="text" placeholder="Size" id="size" name="size">' .
                '</td>' .
                '<td>' .
                '<input type="text" placeholder="Company name" id="com" name="com">' .
                '</td>' .
                '<td>' .
                '<button type="submit" name="submit" class="send">Send</button>' .
                '</td>' .
                '</tr>' .
                '</table>' .
                '</form>';

            echo
                '<tr>' .
                '<th>Id</th>' .
                '<th>Name</th>' .
                '<th>Images</th>' .
                '<th>Price</th>' .
                '<th>Size</th>' .
                '<th>Company</th>' .
                '<th>Edit</th>' .
                '</tr>';

            echo
                '<tr>' .
                '<td>' . $user['id'] . '</td>' .
                '<td>' . $user['name'] . '</td>' .
                '<td>' . $user['images'] . '</td>' .
                '<td>' . $user['price'] . '</td>' .
                '<td>' . $user['sizeMen'] . '</td>' .
                '<td>' . $user['company'] . '</td>' .
                '<td>' .
                '<a class="editUser" data-users-id="' . $user['id'] . '" href="#">' .
                '<i class="fa-solid fa-trash"></i>' .
                '</a>' .
                '</td>' .
                '</tr>';
        }
    }
}

$connection->close();
?>
