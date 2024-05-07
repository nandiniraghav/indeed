(function ($) {
    "use strict";
    $('.nav-menu').superfish({
        animation: {
            opacity: 'show'
        },
        speed: 400
    });
//mobile nav 

if ($('#nav-menu-container').length) {
    var $mobile_nav = $('#nav-menu-container').clone().prop({
        id: 'mobile-nav'
    });
    $mobile_nav.find('> ul').attr({
        'class': '',
        'id': ''
    });
    $('body').append($mobile_nav);
    $('body').prepend('<button type="button" id="mobile-nav-toggle"><i class="ion-md-menu"></i></button>');
    $('body').append('<div id="mobile-body-overly"></div>');
    $('#mobile-nav').find('.menu-has-children').prepend('<i class="ion-md-arrow-dropdown"></i>');

    $(document).on('click', '.menu-has-children i', function (e) {
        $(this).next().toggleClass('menu-item-active');
        $(this).nextAll('ul').eq(0).slideToggle();
        $(this).toggleClass("ion-md-arrow-dropup ion-md-arrow-dropdown");
    });

    $(document).on('click', '#mobile-nav-toggle', function (e) {
        $('body').toggleClass('mobile-nav-active');
        $('#mobile-nav-toggle i').toggleClass('ion-md-close ion-md-menu');
        $('#mobile-body-overly').toggle();
    });

    $(document).click(function (e) {
        var container = $("#mobile-nav, #mobile-nav-toggle");
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            if ($('body').hasClass('mobile-nav-active')) {
                $('body').removeClass('mobile-nav-active');
                $('#mobile-nav-toggle i').toggleClass('ion-md-close ion-md-menu');
                $('#mobile-body-overly').fadeOut();
            }
        }
    });
} else if ($("#mobile-nav, #mobile-nav-toggle").length) {
    $("#mobile-nav, #mobile-nav-toggle").hide();
}





//     // Header scroll
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.header').addClass('header-scrolled');
        } else {
            $('.header').removeClass('header-scrolled');
        }
    });

    if ($(window).scrollTop() > 100) {
        $('.header').addClass('header-scrolled');
    }


//     // Carousel
    var carousel = $(".carousel");
    var carouselIndicators = $(".carousel-indicators");
    carousel.find(".carousel-inner").children(".carousel-item").each(function (index) {
        (index === 0) ?
                carouselIndicators.append("<li data-target='#carousel' data-slide-to='" + index + "' class='active'></li>") :
                carouselIndicators.append("<li data-target='#carousel' data-slide-to='" + index + "'></li>");

        $(this).css("background-image", "url('" + $(this).children('.carousel-background').children('img').attr('src') + "')");
        $(this).children('.carousel-background').remove();
    });

    $(".carousel").swipe({
        swipe: function (event, direction, distance, duration, fingerCount, fingerData) {
            if (direction == 'left')
                $(this).carousel('next');
            if (direction == 'right')
                $(this).carousel('prev');
        },
        allowPageScroll: "vertical"
    });
$('[data-toggle="counter-up"]').counterUp({
    delay: 10,
    time: 1000
});


})(jQuery);


function validateNumber(e){
    const pattern = /^[0-9]$/;
    return pattern.test(e.key)
}


let hamburger = document.querySelector(".hamburger")
let ham = document.querySelector(".ham")
let cross_segment = document.querySelector(".cross_segment")



hamburger.onclick = function(){
    ham.style.display="block";
    hamburger.style.display="none"
}

cross_segment.onclick = function(){
    hamburger.style.display="block";
    ham.style.display="none"
}




// let navbar = document.querySelector('.header .navbar_n');

// document.querySelector('#menu-btn').onclick = () =>{
//     navbar.classList.toggle('active');
// }

// window.onscroll = () => {
//     navbar.classList.remove('active')
// }
