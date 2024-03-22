$("#buttonOne").click(function (e) {
    e.preventDefault();
    // alert("hello!");

    var womenSearch = $("#womenSearch").val();

    var selectedSize = $("#womenSize").val();

    var minNum = $("#womenMin").val();
    var maxNum = $("#womenMax").val();


    $.ajax({
        type: 'POST',
        url: "search-server/women-search.php",
        data: {
            search: womenSearch,
            selectSize: selectedSize,
            minNum: minNum,
            maxNum: maxNum
        },
        dataType: 'html',
        success: function (response) {
            $('#projectClub').html(response); // Update the target element to replace the search results
        },
        error: function (error) {
            console.error('Ajax request failed:', error);
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    var elWrapper = document.querySelectorAll(".el-wrapper");
    var btn = document.querySelector(".load-more");
    var currentImg = 18;

    function toggleImages(start, end, displayValue) {
        for (let i = start; i < end; i++) {
            if (elWrapper[i]) {
                elWrapper[i].style.display = displayValue;
            }
        }
    }

    toggleImages(0, currentImg, "block");

    btn.addEventListener("click", function () {

        toggleImages(currentImg, currentImg + 9, "block");

        currentImg += 9;
        if (currentImg >= elWrapper.length) {
            btn.style.display = "none";
        }
    });
});

$(document).on('click', '.cart', function (e) {
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


