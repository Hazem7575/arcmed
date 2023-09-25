$(document).ready(function() {

    $(window).scroll(function() {
        console.log($(window).scrollTop() , $('#section-header').height())
        if ($(window).scrollTop() >= 75 && $(window).scrollTop() < $('#section-header').height()) { // Check if scrolled 55px or more
            $("nav").addClass("fixed").removeClass("fixed2");
        }else if ($(window).scrollTop() >= $('#section-header').height()) {
            $("nav").addClass("fixed2");
        } else {
            $("nav").removeClass("fixed").removeClass("fixed2"); // Remove the class when scrolling back up
        }
    });
});