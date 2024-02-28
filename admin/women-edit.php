<?php
session_start();

if ($_SESSION["userid"] === "11" || $_SESSION["useruid"] === "Axel886" || $_SESSION["useruid"] === "Axel886@gmail.com") {
function getWoenProducts()
{
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "arcada";

    $connection = new mysqli($servername, $username, $password, $dbname);

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    $query = "SELECT * FROM women ORDER BY id DESC";

    $result = mysqli_query($connection, $query);

    if (!$result) {
        die("Error in SQL query: " . mysqli_error($connection));
    }

    $products = array();
    while ($product = mysqli_fetch_assoc($result)) {
        $products[] = $product;
    }

    if (!$products) {
        die("Error in fetching products");
    }

    return $products;
}

$products = getWoenProducts();

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
    <title>Women Edite</title>
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
            height: 50px;
        }

        .register input {
            width: 100%;
            height: 50px;
            font-size: 17px;
            border: solid 3px #dddddd;
            font-size: 19px;
            padding-left: 13px;
            border-radius: 11px;
        }

        .register button {
            width: 100%;
            height: 40px;
            font-size: 17px;
            background: #EF6136;
            border: none;
            border-radius: 5px;
            transition: .8s;
        }

        .register button:hover {
            border-radius: 20px;
        }

        .register .text {
            font-family: fontThree;
        }


        .register {
            width: 100%;
            height: 70px;
            /*border: solid 3px black;*/
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
            border: solid 3px #dddddd;
            font-size: 20px;
            padding-left: 18px;
            border-radius: 11px;
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
            text-align: left;
            padding: 8px;
        }

    </style>
</head>
<body>
<?php
include "headerAdmin.php";
?>

<div class="register">
    <div>
        <input type="text" name="search" id="searchProductWomen" placeholder="User name">
    </div>
</div>
<table id="productTable">
    <form action="./admin-server/womenAdd-server.php" method="post">
        <tr class="register">
            <td>
                <p class="text">Register</p>
            </td>
            <td>
                <input type="text" placeholder="Name" name="name" id="name">
            </td>
            <td>
                <input type="text" placeholder="Images" id="img" name="img">
            </td>
            <td>
                <input type="number" placeholder="Price" id="num" name="num">
            </td>
            <td>
                <input type="text" placeholder="Size" id="size" name="size">
            </td>
            <td>
                <input type="text" placeholder="Company" id="com" name="com">
            </td>
            <td>
                <button type="submit" name="submit" class="send">Send</button>
            </td>
        </tr>
    </form>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Images</th>
        <th>Price</th>
        <th>Size</th>
        <th>Company</th>
        <th>Edit</th>
    </tr>
    <?php foreach ($products as $product) : ?>
        <tr>
            <td><?php echo $product['id']; ?></td>
            <td><?php echo $product['name']; ?></td>
            <td><?php echo $product['images']; ?></td>
            <td><?php echo $product['price']?>$</td>
            <td><?php echo $product['sizeWomen']; ?></td>
            <td><?php echo $product['company']; ?></td>
            <td>
                <a class="editWomen" data-product-id="<?php echo $product['id']; ?>" href="#">
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