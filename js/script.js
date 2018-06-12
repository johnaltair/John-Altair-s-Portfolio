/**
 * Created by ASUS on 3/13/2018.
 */

// $(window).load(function() {
//     $(".page").show();
//     $(".loader").hide(500);
// });

$(function() {
    $('.loader').fadeOut();

    $('.mobile-menu-toggle').click(function () {
        if ($(this).hasClass('inactive')) {
            $('.navigation').removeClass('inactive').addClass('active');
            $('.mobile-menu-toggle').removeClass('inactive').addClass('active');
        } else {
            $('.navigation').removeClass('active').addClass('inactive');
            $('.mobile-menu-toggle').removeClass('active').addClass('inactive');
        }
    });

    $(".owl-carousel").owlCarousel({
        items: 1,
        loop: true,
        autoplay: true
    });
});