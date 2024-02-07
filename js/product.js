$(".cart").click(function (e) {
    e.preventDefault();
    var $click = $(this);
    var productName = $click.data("product-name");
    var productCompany = $click.data("product-company-name");
    var productSize = $click.data("product-size");
    var productPrice = $click.data("product-price");


    console.log("Product Name: " + productName);
    console.log("Company: " + productCompany);
    console.log("Size: " + productSize);
    console.log("Price: " + productPrice);


    $.ajax({
        type: "POST",
        url: "/Nous-Shop/php/product-server.php",
        data: {
            name: productName,
            company: productCompany,
            size: productSize,
            price: productPrice,
        },
        success: function (response) {
            console.log("AJAX request successful:");
            var updatedCart = JSON.parse(response);

            $("#cartDisplay").html("Cart Items: " + updatedCart.items + " Total Price: " + updatedCart.totalPrice);
        },
        error: function (xhr, status, error) {
            console.error("AJAX request failed:", status, error);
        }
    });
});
$(".deleteButton").click(function () {
    var $clickedButton = $(this);
    var deleteData = $clickedButton.data("product-id");

    console.log("deleteData:", deleteData);

    $.ajax({
        type: "POST",
        url: "/Nous-Shop/php/product-delete-server.php",
        data: {delete: deleteData},
        success: function (response) {
            console.log(response);

            if (response.cartItemCount !== undefined && response.totalPrice !== undefined) {
                var cartItemCount = response.cartItemCount;
                var totalPrice = response.totalPrice;

                var productRowToRemove = document.querySelector('[data-product-id="' + response.deletedKey + '"]');

                if (productRowToRemove) {
                    productRowToRemove.remove();
                }


                $(".totalAmount").text(totalPrice + "$");

                console.log("Cart Item Count:", cartItemCount);
                console.log("Total Price:", totalPrice);
            }

            console.log("Delete Response:", response);
            location.reload();
        },
        error: function (xhr, status, error) {
            console.error("AJAX request failed:", status, error);
        }
    });
});





