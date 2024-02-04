<?php
session_start();

include "./admin/admin-server/webSite-server.php";
include "./php/product.php";
$products = getProducts();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://kit.fontawesome.com/45ca86891d.js" crossorigin="anonymous"></script>
    <title>NOUS</title>
</head>

<body>
<?php
include "../myNewWebSite/php/header.php";
?>

<div class="box">
    <div class="freeShipping">
        <div class="freeShippingText">
            <div class="aboutUsText">
                <?php


                $data = webIndex();

                if (isset($data['titleBox']) && is_array($data['titleBox'])) {
                    foreach ($data['titleBox'] as $title) {
                        echo "<p>$title</p>";
                    }
                } else {
                    echo "<p>Error: Missing or invalid 'titleBox' data</p>";
                }

                if (isset($data['textBox']) && is_array($data['textBox'])) {
                    foreach ($data['textBox'] as $text1) {
                        echo "<p>$text1</p>";
                    }
                } else {
                    echo "<p>Error: Missing or invalid 'titleText' data</p>";
                }
                ?>
            </div>
        </div>
        <div class="freeShippingBottom">
            <button>
                <a href="./php/women-product.php">Shop Women</a>
            </button>
            <button>
                <a href="./php/showAll.php">Shop All</a>
            </button>

            <button>
                <a href="./php/men-product.php">Shop Men</a>
            </button>

        </div>
    </div>
    <div class="freeShippingImages">
        <div>
            <img src="./Images/girl.webp" alt="">
        </div>
        <div>
            <img src="./Images/boy.webp" alt="">
        </div>
        <div class="div">
            <img src="./Images/couple.webp" alt="">
        </div>
    </div>

    <?php


    ?>

    <div class="divImage">
        <div>

        </div>
        <div>

        </div>
        <div>

        </div>
    </div>

    <div class="newArrivals">
        <div>
            <p>new arrivals</p>
        </div>
    </div>


    <div class="projectClub">

        <?php foreach ($products as $product) : ?>
            <div class="el-wrapper">
                <div class="box-up">
                    <img class="img" src="./Images/product/men/<?php echo $product['images']; ?>" alt="">
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


<div class="shopAll">
    <div class="shopAllText">
        <a href="./php/showAll.php">
            <button class="shopAllText-Bottom">
                <p>SUBMIT</p>
            </button>
        </a>

        <a href="" class="shopAllText-a">
            <button class="shopAllText-i" id="shopAllText-i">
                <i class="fa-solid fa-right-long"></i>
            </button>
        </a>
    </div>
</div>
<?php
include "php/footer.php";
?>
</div>


<a href="./chatBotYanna/bot.php" class="botLink">
    <button class="botButton">
        <p>Let's Chat!</p>
    </button>
</a>
<?php
include "./php/botButton.php";
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="./js/product.js"></script>
<!--<script src="./js/script.js"></script>-->
</body>

</html>