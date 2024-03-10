<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "arcada";

$connection = new mysqli($servername, $username, $password, $dbname);


if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

if (isset($_POST['search']) || isset($_POST['selectSize']) || (isset($_POST['minNum']) && isset($_POST['maxNum']))) {

    $query = "SELECT * FROM showAll WHERE 1=1";

    $conditions = array();
    $params = array();

    if (isset($_POST['search']) && $_POST['search'] !== "") {
        $search = '%' . $_POST['search'] . '%';
        $conditions[] = "name LIKE ?";
        $params[] = $search;
    }
    if (isset($_POST['minNum']) && isset($_POST['maxNum'])) {
        $minPrice = $_POST['minNum'];
        $maxPrice = $_POST['maxNum'];

        if ($minPrice !== "" && $maxPrice !== "") {
            $conditions[] = "price BETWEEN ? AND ?";
            $params[] = $minPrice;
            $params[] = $maxPrice;
        } elseif ($minPrice === "" && $maxPrice !== "") {
            $conditions[] = "price <= ?";
            $params[] = $maxPrice;
        } elseif ($minPrice !== "" && $maxPrice === "") {
            $conditions[] = "price >= ?";
            $params[] = $minPrice;
        }
    }


    if (isset($_POST['selectSize']) && $_POST['selectSize'] != "None") {
        $size = '%' . $_POST['selectSize'] . '%';
        $conditions[] = "showsize LIKE ?";
        $params[] = $size;
    }

    if (!empty($conditions)) {
        $query .= " AND " . implode(" AND ", $conditions);
    }

    $stmt = $connection->prepare($query);
    if ($stmt) {
        if (!empty($params)) {
            $types = str_repeat("s", count($params));
            $stmt->bind_param($types, ...$params);
        }

        $stmt->execute();

        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            while ($product = $result->fetch_assoc()) {
                outputProductCard($product);
            }
        } else {
            echo '<p>No products found</p>';
        }
        $stmt->close();
    } else {
        echo "Query preparation failed";
    }

}


$connection->close();

function outputProductCard($product)
{
    echo '
    <div class="el-wrapper" id="el-wrapper">
        <div class="box-up">
            <img class="img" src="../Images/product/showAll/' . $product['images'] . '" alt="">
            <div class="img-info">
                <div class="info-inner">
                    <span class="p-name">' . $product['name'] . '</span>
                    <span class="p-company">' . $product['company'] . '</span>
                </div>
                <div class="a-size">Available sizes: <span class="size">' . $product['showsize'] . '</span></div>
            </div>
        </div>
        <div class="box-down">
            <div class="h-bg">
                <div class="h-bg-inner"></div>
            </div>
            <a class="cart" 
               data-product-name="' . $product['name'] . '"
               data-product-company-name="' . $product['company'] . '"
               data-product-size="' . $product['showsize'] . '"
               data-product-price="' . $product['price'] . '">
                <span class="price">' . $product['price'] . '$</span>
                <span class="add-to-cart">
                    <span class="txt">Add in cart</span>
                </span>
            </a>
        </div>
    </div>';
}

?>
