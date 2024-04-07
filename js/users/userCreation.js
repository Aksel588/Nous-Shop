$('.next').click(function (e) {
    e.preventDefault(); 

    let uid = $('.uid').val(); 
    let pwd = $('.pwd').val(); 
    let email = $('.email').val(); 

    $.ajax({
        type: "POST",
        url: "/Nous-Shop/users/Creation/userCreation.php",
        data: {
            uid: uid,
            pwd: pwd, 
            email: email 
        },
        success: function (response) {
            window.location.href = '/Nous-Shop/index.php';
            // alert(response);
        },        
        error: function (xhr, status, error) {
            console.log("Hi")
        }
    });
});
