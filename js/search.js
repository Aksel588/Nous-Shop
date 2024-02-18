$(document).ready(function () {
    $('#searchInput').on('input', function () {
        var searchTerm = $(this).val();

        $.ajax({
            type: 'POST',
            url: './admin-server/search-server.php',
            data: {search: searchTerm},
            dataType: 'html',
            success: function (response) {
                $('#userTable').html(response);
            },
            error: function (error) {
                console.error('Ajax request failed:', error);
            }
        });
    });


    $("#searchProduct").on('input', function () {
        var searchProduct = $(this).val();

        $.ajax({
            type: 'POST',
            url: './admin-server/menProduct-server.php',
            data: {search: searchProduct},
            dataType: 'html',
            success: function (response) {
                $('#productTable').html(response);
            },
            error: function (error) {
                console.error('Ajax request failed:', error);
            }
        });
    });


    $("#searchProductWomen").on('input', function () {
        var searchProduct = $(this).val();

        $.ajax({
            type: 'POST',
            url: './admin-server/womenProduct-server.php',
            data: {search: searchProduct},
            dataType: 'html',
            success: function (response) {
                $('#productTable').html(response);
            },
            error: function (error) {
                console.error('Ajax request failed:', error);
            }
        });
    });
});
