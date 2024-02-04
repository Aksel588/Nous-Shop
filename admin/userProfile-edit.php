<?php
session_start();
if ($_SESSION["userid"] === "11" || $_SESSION["useruid"] === "Axel886" || $_SESSION["useruid"] === "Axel886@gmail.com") {
function userProfile()
{
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "ooplogin";

    $connection = new mysqli($servername, $username, $password, $dbname);

    $query = "SELECT * FROM users";
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

$users = userProfile();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/admin.css">
    <script src="https://kit.fontawesome.com/45ca86891d.js" crossorigin="anonymous"></script>
    <title>Profile Users</title>
</head>
<style>
    @font-face {
        font-family: fontThree;
        src: url(../Font/fontThree);
    }

    @font-face {
        font-family: fontFour;
        src: url(../Font/fontFour);
    }

    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        font-family: fontThree;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }

    td a i {
        color: #EF6136;
        font-size: 20px;
    }

    .register {
        width: 100%;
        height: 70px;
        border: solid 3px black;
        font-family: fontThree;
        padding: 5px;
    }

    .register div {
        width: 400px;
        height: 100%;
        /*border: solid 3px black;*/
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0px auto;
        gap: 10px;
    }

    .register div input {
        width: 350px;
        height: 100%;
        font-size: 20px;
    }

    .register div button {
        width: 60px;
        height: 100%;
        border: none;
        background: #dedede;
        border-radius: 20px;
        font-size: 25px;
        cursor: pointer;
        color: #EF6136;
    }

    #userTable tr.search-result td {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }


</style>

<?php
include "headerAdmin.php";
?>

<table id="userTable">
    <div class="register">
        <div>
                <input type="text" name="search" id="searchInput" placeholder="User name">
        </div>
    </div>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Password</th>
        <th>Email</th>
        <th>Email</th>
    </tr>
    <?php foreach ($users as $user) : ?>
        <tr>
            <td><?php echo $user['users_id']; ?></td>
            <td><?php echo $user['users_uid']; ?></td>
            <td><?php echo $user['users_pwd']; ?></td>
            <td><?php echo $user['users_email']; ?></td>
            <td>
                <a class="editUser" data-users-id="<?php echo $user['users_id']; ?>" href="#">
                    <i class="fa-solid fa-trash"></i>
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="../js/edit.js"></script>
<script src="../js/search.js"></script>
<?php
} else {
    header("location: ../index.php?error404");
}
?>
</body>
</html>