<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "ooplogin";

$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

if (isset($_POST['search'])) {
    $searchTerm = '%' . $_POST['search'] . '%';

    $query = "SELECT * FROM users WHERE users_uid LIKE ?";
    $stmt = $connection->prepare($query);
    $stmt->bind_param("s", $searchTerm);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo '<tr>' .
            '<th>Id</th>' .
            '<th>Name</th>' .
            '<th>Password</th>' .
            '<th>Email</th>' .
            '<th>Action</th>' .
            '</tr>';
        while ($user = $result->fetch_assoc()) {
            echo
                '<tr>' .
                '<td>' . $user['users_id'] . '</td>' .
                '<td>' . $user['users_uid'] . '</td>' .
                '<td>' . $user['users_pwd'] . '</td>' .
                '<td>' . $user['users_email'] . '</td>' .
                '<td>' .
                '<a class="editUser" data-users-id="' . $user['users_id'] . '" href="#">' .
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
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);

    if ($result) {
        while ($user = mysqli_fetch_assoc($result)) {
            echo
                '<tr>' .
                '<td>' . $user['users_id'] . '</td>' .
                '<td>' . $user['users_uid'] . '</td>' .
                '<td>' . $user['users_pwd'] . '</td>' .
                '<td>' . $user['users_email'] . '</td>' .
                '<td>' .
                '<a class="editUser" data-users-id="' . $user['users_id'] . '" href="#">' .
                '<i class="fa-solid fa-trash"></i>' .
                '</a>' .
                '</td>' .
                '</tr>';
        }
    }
}

$connection->close();
?>
