<?php
session_start();

function calculateTotalPrice($cart) {
    $totalPrice = 0;

    foreach ($cart as $product) {
        $totalPrice += $product['priceH'];
    }

    return $totalPrice;
}

if (isset($_POST["delete"]) && isset($_SESSION['cart'])) {
    $deleteData = $_POST["delete"];

    if (isset($_SESSION['cart'][$deleteData])) {
        // Получение цены товара для вычитания из общей суммы
        $deletedProductPrice = $_SESSION['cart'][$deleteData]['price'];

        // Удаление товара из массива
        unset($_SESSION['cart'][$deleteData]);

        // Переиндексация массива после удаления элемента
        $_SESSION['cart'] = array_values($_SESSION['cart']);

        // Обновление общей суммы в сессии
        $_SESSION['totalAmount'] -= $deletedProductPrice;

        // Обновление количества товаров в корзине
        $_SESSION['countBasket'] = count($_SESSION['cart']);

        // Ваш код для ответа на удаление товара
        $response = array(
            "totalPrice" => $_SESSION['totalAmount'],
            "cartItemCount" => count($_SESSION['cart']),
            "deletedKey" => $deleteData
        );

        // Вывод в консоль для отладки
        error_log("Deleted product key: " . $deleteData);
        error_log("Updated cart: " . print_r($_SESSION['cart'], true));

        // Ensure the session data is written and closed
        session_write_close();

        // Stop further processing after sending the response
        echo json_encode($response);
        exit();
    }
}
?>
