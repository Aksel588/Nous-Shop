<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/basket.css">
    <script src="https://kit.fontawesome.com/45ca86891d.js" crossorigin="anonymous"></script>
    <title>Basket</title>
</head>

<body>

<?php
include "header.php";
?>


<div class="container">
    <div class="text">

        <p>
            Website Shopping Basket
        </p>

    </div>

    <hr>

    <div class="cardDiv">
        <table id="cardDiv">
            <tr>
                <th>Name</th>
                <th>Company Name</th>
                <th>Price</th>
                <th>Action</th>
                <th>Button</th>
            </tr>

            <?php foreach ($_SESSION['cart'] as $key => $cart): ?>
                <tr data-product-id="<?php echo $key; ?>">
                    <td><?php echo $cart['name']; ?></td>
                    <td><?php echo $cart['company']; ?></td>
                    <td><?php echo $cart['size']; ?></td>
                    <td><?php echo $cart['price'] . "$" ?></td>
                    <td>
                        <button class="deleteButton" data-product-id="<?php echo $key; ?>">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </td>
                </tr>
            <?php endforeach; ?>


            <tr class="cart-display">
                <td colspan="4">
                    <?php
                    echo "Items in Cart: " . count($_SESSION['cart']);
                    ?>
                </td>

                <td>Total:
                    <span class="totalAmount">
            <?php
            echo $_SESSION['totalAmount'] . "$";
            ?>
        </span>
                </td>
            </tr>

        </table>
    </div>
</div>


<?php
include "footer.php";
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="../js/product.js"></script>
</body>

</html>
