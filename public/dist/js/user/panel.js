$(window).scroll(function () {
    if ($(window).scrollTop() > 120) {
       $(".navbar").addClass("navbar-coloring");
    } else {
       $(".navbar").removeClass("navbar-coloring");
    }
});