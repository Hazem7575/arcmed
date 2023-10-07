$(document).ready(function() {

    $(window).on("scroll touchmove", function() {
        console.log($(window).scrollTop());

        if ($(window).scrollTop() >= 75 && $(window).scrollTop() < $('#section-header').height()) { // Check if scrolled 55px or more
            $(".wsmainwp").addClass("fixed").removeClass("fixed2");
        }else if ($(window).scrollTop() >= $('#section-header').height()) {
            $(".wsmainwp").addClass("fixed2");
        } else {
            $(".wsmainwp").removeClass("fixed").removeClass("fixed2"); // Remove the class when scrolling back up
        }
    });

});

const body = document.querySelector("body");
const modal = document.querySelector(".show-popup-modal");
const closeButton = document.querySelector(".close-button");
let isOpened = false;

closeButton.addEventListener("click", closeModal);

$('.modal-button').on('click' , function (e) {
    e.preventDefault();
    $('.show-popup-modal').addClass('is-open')
    $('.show-popup-modal .title-modal-info').text($(this).data('title'))
    $('body').addClass('no-scroll')
    $.ajax({
        url : $(this).data('href'),
        method : 'GET',
        dataType : 'html',
        success : function(result) {
            $('.show-popup-modal .content-modal').removeClass('loading')
            $('.show-popup-modal .content-modal .body-modal').html(result)
        }
    })
})

function closeModal() {
    $('body').removeClass('no-scroll')
    $('.show-popup-modal .content-modal').addClass('loading')
    $('.show-popup-modal .content-modal .body-modal').html('')
    $('.show-popup-modal').removeClass('is-open')
}
