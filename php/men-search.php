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
    $menSearch = '%' . $_POST['search'] . '%';

    $query = "SELECT * FROM men WHERE name LIKE ?";
    $stmt = $connection->prepare($query);
    $stmt->bind_param("s", $menSearch);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
//        echo "hello";
        while ($product = $result->fetch_assoc()) {
            echo '
            <div class="el-wrapper" id="el-wrapper">
                <div class="box-up">
                    <img class="img" src="../Images/product/men/' . $product['images'] . '" alt="">
                    <div class="img-info">
                        <div class="info-inner">
                            <span class="p-name">' . $product['name'] . '</span>
                            <span class="p-company">' . $product['company'] . '</span>
                        </div>
                        <div class="a-size">Available sizes: <span class="size">' . $product['size'] . '</span></div>
                    </div>
                </div>
                <div class="box-down">
                    <div class="h-bg">
                        <div class="h-bg-inner"></div>
                    </div>
                    <a class="cart"
                       data-product-name="' . $product['name'] . '"
                       data-product-company-name="' . $product['company'] . '"
                       data-product-size="' . $product['size'] . '"
                       data-product-price="' . $product['price'] . '">
                        <span class="price">' . $product['price'] . '$</span>
                        <span class="add-to-cart">
                            <span class="txt">Add in cart</span>
                        </span>
                    </a>
                </div>
            </div>
';
        }
    } else {
        echo '<p>No products found</p>';
    }
    $stmt->close();
} else {
    $query = "SELECT * FROM men";
    $result = $connection->query($query);

    if ($result->num_rows > 0) {
        while ($product = $result->fetch_assoc()) {
            echo '
            <div class="el-wrapper" id="el-wrapper">
                <div class="box-up">
                    <img class="img" src="../Images/product/men/' . $product['images'] . '" alt="">
                    <div class="img-info">
                        <div class="info-inner">
                            <span class="p-name">' . $product['name'] . '</span>
                            <span class="p-company">' . $product['company'] . '</span>
                        </div>
                        <div class="a-size">Available sizes: <span class="size">' . $product['size'] . '</span></div>
                    </div>
                </div>
                <div class="box-down">
                    <div class="h-bg">
                        <div class="h-bg-inner"></div>
                    </div>
                    <a class="cart"
                       data-product-name="' . $product['name'] . '"
                       data-product-company-name="' . $product['company'] . '"
                       data-product-size="' . $product['size'] . '"
                       data-product-price="' . $product['price'] . '">
                        <span class="price">' . $product['price'] . '$</span>
                        <span class="add-to-cart">
                            <span class="txt">Add in cart</span>
                        </span>
                    </a>
                </div>
            </div>';
        }
    } else {
        echo '<p>No products found</p>';
    }
}

$connection->close();
?>
