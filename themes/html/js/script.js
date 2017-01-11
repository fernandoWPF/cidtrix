var portifolioIndex = 1;
function portifolioAtual(index) {
    showPortifolio(portifolioIndex = index);
}

$(document).ready(inputs(), showPortifolio(portifolioIndex));

$(window).bind("resize", function () {
    inputs();
});
function inputs() {
    if (window.innerWidth < 992) {

        $(".form-email").addClass("input-group-sm");
        $(".div-form-email").addClass("form-group-sm");
        $(".form-email").removeClass("input-group-lg");
        $(".div-form-email").removeClass("form-group-lg");
        $(".form-email").removeClass("input-group-md");
        $(".div-form-email").removeClass("form-group-md");

    } else {
        $(".form-email").addClass("input-group-lg");
        $(".div-form-email").addClass("form-group-lg");
        $(".form-email").removeClass("input-group-sm");
        $(".div-form-email").removeClass("form-group-sm");
        $(".form-email").removeClass("input-group-md");
        $(".div-form-email").removeClass("form-group-md");
    }
}
;
function showPortifolio() {
    var i;
    var divs = document.getElementsByClassName("portifolio-item");
    var btns = document.getElementsByClassName("btn-portifolio");
    for (i = 0; i < divs.length; i++) {
        divs[i].style.display = "none";
    }
    for (i = 0; i < btns.length; i++) {
        btns[i].className = btns[i].className.replace(" active", "");
    }
    divs[portifolioIndex - 1].style.display = "block";
    btns[portifolioIndex - 1].className += " active";
}