<?php
session_start();
include "product.php";
$products = showAll();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/showAll.css">
    <script src="https://kit.fontawesome.com/45ca86891d.js" crossorigin="anonymous"></script>
    <title>Show All</title>
</head>
<body>
<?php
include "header.php";
?>

<div class="newArrivals">
    <div>
        <p>Show All</p>
    </div>
</div>
<div class="content">
    <div class="projectClub">

        <?php foreach ($products as $product) : ?>
            <div class="el-wrapper">
                <div class="box-up">
                    <img class="img" src="../Images/product/showAll/<?php echo $product['images']; ?>" alt="">
                    <div class="img-info">
                        <div class="info-inner">
                            <span class="p-name"><?php echo $product['name']; ?></span>
                            <span class="p-company"><?php echo $product['company']; ?></span>
                        </div>
                        <div class="a-size">Available sizes: <span class="size"><?php echo $product['size']; ?></span>
                        </div>
                    </div>
                </div>

                <div class="box-down">
                    <div class="h-bg">
                        <div class="h-bg-inner"></div>
                    </div>

                    <a class="cart"
                       data-product-name="<?php echo $product['name']; ?>"
                       data-product-company-name="<?php echo $product['company']; ?>"
                       data-product-size="<?php echo $product['size']; ?>"
                       data-product-price="<?php echo $product['price']; ?>">
                        <span class="price"><?php echo $product['price'] . "$" ?></span>
                        <span class="add-to-cart">
                    <span class="txt">Add in cart</span>
                </span>
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<div class="more">
    <button class="load-more">
        <p>More</p>
    </button>
</div>
<?php
include "footer.php";
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="../js/GenderProduct/showAll.js"></script>
</body>
</html>