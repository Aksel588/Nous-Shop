<?php
session_start();
if (empty($_SESSION['cart'])) {
    header("location: ./basket.php?noneProduct");

}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/45ca86891d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/pay.css">
    <title>Pay</title>
</head>
<body>
<?php
include "./header.php";
?>
<div class="container">
    <div class="divOne">
        <div class="textDiv">
            <div class="textTitle">
                <p>You have selected <?php echo count($_SESSION['cart']); ?> products and <span>Thank you for your purchases :)</span>
                </p>
            </div>

            <div class="textInfo">
                <h3><span>You have selected</span>

                    <?php foreach ($_SESSION['cart'] as $key => $cart): ?>
                        <td><?php echo $cart['name'] . ","; ?></td>
                    <?php endforeach; ?>
                    <span>these products</span></h3>
            </div>

            <div class="payInfo">
                <p>
                    You have to pay
                    <span>
                    <?php
                    echo $_SESSION['totalAmount'] . " " . "$";
                    ?>
             </span>
                </p>
            </div>
            <div class="buttonDiv">
                <a href="./php/showAll.php">
                    <button class="shopAllText-Bottom">
                        <p>SUBMIT</p>
                    </button>
                </a>
            </div>
        </div>

    </div>
    <div class="divTwo">
        <div class="div">

        </div>
    </div>
</div>

<?php
include "./footer.php";
?>
</body>
</html>
