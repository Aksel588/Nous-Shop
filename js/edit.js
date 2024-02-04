$(".editWomen").click(function (e) {
    e.preventDefault();
    var $click = $(this);
    var productId = $click.data("product-id");

    $.ajax({
        type: "POST",
        url: "/myNewWebSite/admin/admin-server/womenEdit-server.php",
        data: {id: productId},
        success: function (response) {
            console.log(response);
            $click.closest("tr").remove();
        }
    });
});

$(".editMen").click(function (e) {
    e.preventDefault();
    var $click = $(this);
    var productId = $click.data("product-id");

    $.ajax({
        type: "POST",
        url: "/myNewWebSite/admin/admin-server/menEdit-edit-server.php",
        data: {id: productId},
        success: function (response) {
            console.log(response);
            $click.closest("tr").remove();
        }
    });
});


$(".editUser").click(function (e) {
    e.preventDefault();

    var $clickedElement = $(this);

    var userId = $clickedElement.data("users-id");
    console.log(userId);

    $.ajax({
        type: "POST",
        url: "/myNewWebSite/admin/admin-server/userProfiles-delete-server.php",
        data: {id: userId},
        success: function (response) {
            console.log(response);
            $clickedElement.closest("tr").remove();
        }
    });
});





