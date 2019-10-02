
if (document.querySelector('.slick-slider')) {

    $(document).ready(function () {
        $('.slick-slider').slick({
            autoplay: true,
            autoplaySpeed: 4000,
            arrows: false,

        });
    });

    var popup_ue = new ScrollMagic.Controller();

    var scene = new ScrollMagic.Scene({
        triggerElement: 'window',
        triggerHook: 0,
        duration: 10,
    })

        .setClassToggle('.popup-ue', 'popup-ue-show')
        .addTo(popup_ue);


    var popup_ue_close = document.querySelector('.popup-ue-close');

    popup_ue_close.addEventListener('click', function () {

        scene = scene.destroy(true);

    }, false);


    var slider_button = document.querySelector('.slider-button');
    var rekrutacja = document.getElementById('rekrutacja');

    slider_button.addEventListener('click', function () {

        $("#rekrutacja").addClass("d-block");
        setTimeout(function () {
            $("#rekrutacja").addClass("opacity1");
        }, 200);


    }, false);


    rekrutacja.addEventListener('click', function () {
        $("#rekrutacja").removeClass("opacity1");
        setTimeout(function () {
            $("#rekrutacja").removeClass("d-block");
        }, 200);
    }, false);


}












/*

jQuery(document).ready(function ($) {

    var menu_item = $(".menu > .menu-item-has-children");
    $(menu_item).hover(function () {
        $(menu_item).children('ul').css("display", "none");
        $(this).children('ul').css("display", "block");
    });

    var menu_item2 = $(".sub-menu > .menu-item-has-children");
    $(menu_item2).hover(function () {
        $(menu_item2).children('ul').css("display", "none");
        $(this).children('ul').css("display", "block");
    });

    var mb_test = 0;
    $("#menu_button").click(function () {
        if (mb_test == 0) {

            $(".header-nav").fadeIn();
            mb_test = 1;
        } else {
            $(".header-nav").css("display", "none");
            mb_test = 0;
        }

    });

});

*/


$(document).ready(function () {
    var mb_test = 0;
    $("#menu_button").click(function () {
        if (mb_test == 0) {

            $(".header-nav").fadeIn();
            mb_test = 1;
        } else {
            $(".header-nav").css("display", "none");
            mb_test = 0;
        }

    });
    if ($(window).width() >= 992) {
        $('.firstnav li').hover(function (e) {
            if (!$(this).children('ul').length) {
                $('.firstnav').find('li').removeClass('current');
                $('.firstnav').find('.disable-click').removeClass('opening');
                return;
            }

            $('.firstnav').find('.disable-click').removeClass('opening');
            $('.firstnav').find('li').removeClass('current');
            $(this).addClass('current');
            $(this).show();

            if ($(this).has('ul')) {
                //console.log($(this).find('.disable-click'));
                $(this).children('ul').fadeIn();
                $(this).find('.disable-click').addClass('opening');
            } else {
                $('.firstnav li').children('ul').fadeOut();
                return;
            }

            $('ul').removeClass('subopen');
            $('.firstnav').addClass('subopen');

            if ($(window).width() < 992) {
                $("li:not(.current)").hide();
            }
        });
    } else {
        $('.firstnav li').click(function () {
            if ($(this).children('ul').length) {
                if ($(this).children('ul').hasClass('item_menu_show_mob')) {
                    $(this).children('ul').removeClass('item_menu_show_mob');
                    $(this).children('.disable-click').removeClass('opening');
                } else {
                    $('.firstnav').find('li').find('ul').removeClass('item_menu_show_mob');
                    $('.firstnav').find('.disable-click').removeClass('opening');
                    $(this).children('ul').addClass('item_menu_show_mob');
                    $(this).children('.disable-click').addClass('opening');
                }
            }
        });
    }

});