document.addEventListener("DOMContentLoaded", function () {
    var elWrapper = document.querySelectorAll(".el-wrapper");
    var btn = document.querySelector(".load-more");
    var currentImg = 15;

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

        currentImg += 6;
        if (currentImg >= elWrapper.length) {
            btn.style.display = "none";
        }
    });
});


$(".buttonOne, .buttonTwo").on("click", function () {
    var currentDisplay = $(".filterSecondDiv").css("display");

    if (currentDisplay == "block") {
        $(".filterSecondDiv").css("display", "none");
        $(".buttonTwo").css("display", "none");
        $(".buttonOne").css("display", "block");
    } else {
        $(".filterSecondDiv").css("display", "block");
        $(".buttonTwo").css("display", "block");
        $(".buttonOne").css("display", "none");
    }
});
