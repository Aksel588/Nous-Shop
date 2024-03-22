<?php
session_start();
include "product.php";
$products = men();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/men-product.css">
    <script src="https://kit.fontawesome.com/45ca86891d.js" crossorigin="anonymous"></script>
    <title>Men</title>
</head>
<body id="body">
<?php
include "header.php";
?>

<div class="newArrivals">
    <div>
        <p>Men</p>
    </div>
</div>


<div class="content">


    <div class="filter">
        <div class="filterFirstDiv">
            <div class="menSearch">
                <input type="text" class="menSearch" id="menSearch" name="menSearch" placeholder="Search....">
            </div>
            <div class="menSize">

                <select name="size" id="menSize">
                    <option value="None">Select your size</option>
                    <option value="XL">XL</option>
                    <option value="S">S</option>
                    <option value="ML">ML</option>
                    <option value="XXL">XXL</option>
                </select>
            </div>
            <div class="menPrice">
                <input type="number" placeholder="Min" min="0"
                       max="1000000" id="menMin">
                <input type="number" placeholder="Max" min="0"
                       max="100000" id="menMax">
            </div>

            <div class="buttonClick">
                <button class="buttonOne" id="buttonOne">
                    <p>Go</p>
                </button>
            </div>
        </div>
    </div>

    <div class="projectClub" id="projectClub">

        <?php foreach ($products as $product) : ?>
            <div class="el-wrapper" id="el-wrapper">
                <div class="box-up">
                    <img class="img" src="../Images/product/men/<?php echo $product['images']; ?>" alt="">
                    <div class="img-info">
                        <div class="info-inner">
                            <span class="p-name"><?php echo $product['name']; ?></span>
                            <span class="p-company"><?php echo $product['company']; ?></span>
                        </div>
                        <div class="a-size">Available sizes: <span
                                    class="size"><?php echo $product['sizeMen']; ?></span>
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
                       data-product-size="<?php echo $product['sizeMen']; ?>"
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
<script src="../js/GenderProduct/men.js"></script>
<script src="../js/mobile.js"></script>

</body>
</html>