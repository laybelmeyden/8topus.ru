$(document).ready(function() {
    $('.sidenav').sidenav();
    $('.parallax').parallax();
    $('.modal').modal();
});
// const navItem = document.querySelector('nav');
// document.querySelector('#mobile-menu').onclick = () => {
//     if (navItem.classList.contains('hideMenu') === true) {
//         navItem.classList.remove("hideMenu");
//     } else {
//         navItem.classList.add("hideMenu");
//     }
// }
$(document).ready(function() {




    $(".main-navigation__dropdown").click(function(e) {

        e.preventDefault();

        if ($(this).hasClass('dropdown_opened')) {

            $(this).removeClass('dropdown_opened');

        } else {

            $(this).addClass('dropdown_opened');

        }

    });



    $(document).click(function(event) {

        if ($(event.target).closest('.main-navigation__dropdown').length)

            return;

        $('.main-navigation__dropdown').removeClass('dropdown_opened');

        event.stopPropagation();

    });


    $('.header__slider').slick({

        dots: true,

        arrow: true

    });



    if ($(window).width() < 577) {

        $('html body .ducklett-widget .ducklett-widget-wrapper--slider').slick({

            dots: true,

            arrows: false,

            slidesToShow: 1,

            slidesToScroll: 1,

        });

    }




    $('.mewtwo-tabs_list').append('<li class="mewtwo-tabs-tabs_list__item mewtwo-tabs-tabs_list__item--count6 mewtwo-tabs-tabs_list__item"><a href="#" class="widget-click-tur"><span>Туры</span></a></li><li class="mewtwo-tabs-tabs_list__item mewtwo-tabs-tabs_list__item--count3 mewtwo-tabs-tabs_list__item"><a href="#" class="widget-click"><span>Ж/д билеты</span</a></li><li class="mewtwo-tabs-tabs_list__item mewtwo-tabs-tabs_list__item--count4 mewtwo-tabs-tabs_list__item"><a href="#" class="widget-click-st"><span>Страховка</span</a></li><li class="mewtwo-tabs-tabs_list__item mewtwo-tabs-tabs_list__item--count5 mewtwo-tabs-tabs_list__item"><a href="#" class="widget-click-tr"><span>Трансферы</span></a></li><li class="mewtwo-tabs-tabs_list__item mewtwo-tabs-tabs_list__item--count7 mewtwo-tabs-tabs_list__item"><a href="#" class="widget-click-ex"><span>Экскурсии</span</a></li><li class="mewtwo-tabs-tabs_list__item mewtwo-tabs-tabs_list__item--count8 mewtwo-tabs-tabs_list__item"><a href="#" class="widget-click-ex1"><span>Круизы</span></a></li><li class="mewtwo-tabs-tabs_list__item mewtwo-tabs-tabs_list__item--count9 mewtwo-tabs-tabs_list__item"><a href="" class="widget-click-ex2"><span>Аренда яхт</span></a></li><li class="mewtwo-tabs-tabs_list__item mewtwo-tabs-tabs_list__item--count10 mewtwo-tabs-tabs_list__item"><a href="" class="widget-click-ex3"><span>Визы</span></a></li>');

    $('.widget-block').appendTo('.mewtwo-widget');

    $('.widget-block-st').appendTo('.mewtwo-widget');

    $('.widget-block-tr').appendTo('.mewtwo-widget');

    $('.widget-block-tur').appendTo('.mewtwo-widget');

    $('.widget-block-ex').appendTo('.mewtwo-widget');

    $('.widget-block-ex1').appendTo('.mewtwo-widget');
    $('.widget-block-ex2').appendTo('.mewtwo-widget');
    $('.widget-block-ex3').appendTo('.mewtwo-widget');

    $('.mewtwo-tabs-tabs_list__item--flights').click(function(e) {

        e.preventDefault();



        $('.sob__all').hide();

        $('.sob__avia').show();



        $('.widget-block').hide();

        $('.widget-block-st').hide();

        $('.widget-block-tr').hide();

        $('.widget-block-tur').hide();

        $('.widget-block-ex').hide();
        $('.widget-block-ex1').hide();
        $('.widget-block-ex2').hide();
        $('.widget-block-ex3').hide();

        $('.TPWL-front-content-special_offers-title').removeClass('m25');

        $('.mewtwo-flights').removeClass('remove-w');

        $('.mewtwo-hotels').removeClass('remove-w');

        $('.mewtwo-tabs-tabs_list__item--count3').removeClass('mewtwo-tabs-tabs_list__item--active');
        $('.mewtwo-tabs-tabs_list__item--count9').removeClass('mewtwo-tabs-tabs_list__item--active');
        $('.mewtwo-tabs-tabs_list__item--count10').removeClass('mewtwo-tabs-tabs_list__item--active');

        $('.mewtwo-tabs-tabs_list__item--count4').removeClass('mewtwo-tabs-tabs_list__item--active');

        $('.mewtwo-tabs-tabs_list__item--count5').removeClass('mewtwo-tabs-tabs_list__item--active');

        $('.mewtwo-tabs-tabs_list__item--count6').removeClass('mewtwo-tabs-tabs_list__item--active');

        $('.mewtwo-tabs-tabs_list__item--count7').removeClass('mewtwo-tabs-tabs_list__item--active');
        $('.mewtwo-tabs-tabs_list__item--count8').removeClass('mewtwo-tabs-tabs_list__item--active');

    });

    $('.mewtwo-tabs-tabs_list__item--hotels').click(function(e) {

        e.preventDefault();



        $('.sob__all').hide();

        $('.sob__otel').show();



        $('.widget-block').hide();

        $('.widget-block-st').hide();

        $('.widget-block-tr').hide();

        $('.widget-block-tur').hide();
        $('.widget-block-ex2').hide();
        $('.widget-block-ex3').hide();
        $('.widget-block-ex').hide();
        $('.widget-block-ex1').hide();
        $('.TPWL-front-content-special_offers-title').removeClass('m25');

        $('.mewtwo-flights').removeClass('remove-w');

        $('.mewtwo-hotels').removeClass('remove-w');
        $('.mewtwo-tabs-tabs_list__item--count9').removeClass('mewtwo-tabs-tabs_list__item--active');
        $('.mewtwo-tabs-tabs_list__item--count10').removeClass('mewtwo-tabs-tabs_list__item--active');
        $('.mewtwo-tabs-tabs_list__item--count7').removeClass('mewtwo-tabs-tabs_list__item--active');

        $('.mewtwo-tabs-tabs_list__item--count6').removeClass('mewtwo-tabs-tabs_list__item--active');

        $('.mewtwo-tabs-tabs_list__item--count5').removeClass('mewtwo-tabs-tabs_list__item--active');

        $('.mewtwo-tabs-tabs_list__item--count4').removeClass('mewtwo-tabs-tabs_list__item--active');

        $('.mewtwo-tabs-tabs_list__item--count3').removeClass('mewtwo-tabs-tabs_list__item--active');

        $('.mewtwo-tabs-tabs_list__item--count1').removeClass('mewtwo-tabs-tabs_list__item--active');

        $('.mewtwo-tabs-tabs_list__item--count8').removeClass('mewtwo-tabs-tabs_list__item--active');
        $('mewtwo-tabs-tabs_list__item--hotels').addClass('mewtwo-tabs-tabs_list__item--active');

    });

    $('.widget-click').click(function(e) {

        e.preventDefault();


        $('.sob__all').hide();

        $('.sob__zd').show();



        $('.widget-block').show();

        $('.widget-block-st').hide();

        $('.widget-block-tr').hide();

        $('.widget-block-tur').hide();

        $('.widget-block-ex').hide();
        $('.widget-block-ex1').hide();
        $('.widget-block-ex2').hide();
        $('.widget-block-ex3').hide();
        $('.TPWL-front-content-special_offers-title').removeClass('m25');

        $('.mewtwo-flights').addClass('remove-w');

        $('.mewtwo-hotels').addClass('remove-w');
        $('.mewtwo-tabs-tabs_list__item--count8').removeClass('mewtwo-tabs-tabs_list__item--active');
        $('.mewtwo-tabs-tabs_list__item--count3').addClass('mewtwo-tabs-tabs_list__item--active');
        $('.mewtwo-tabs-tabs_list__item--count9').removeClass('mewtwo-tabs-tabs_list__item--active');
        $('.mewtwo-tabs-tabs_list__item--count10').removeClass('mewtwo-tabs-tabs_list__item--active');
        $('.mewtwo-tabs-tabs_list__item--count7').removeClass('mewtwo-tabs-tabs_list__item--active');

        $('.mewtwo-tabs-tabs_list__item--count6').removeClass('mewtwo-tabs-tabs_list__item--active');

        $('.mewtwo-tabs-tabs_list__item--count5').removeClass('mewtwo-tabs-tabs_list__item--active');

        $('.mewtwo-tabs-tabs_list__item--count4').removeClass('mewtwo-tabs-tabs_list__item--active');

        $('.mewtwo-tabs-tabs_list__item--count2').removeClass('mewtwo-tabs-tabs_list__item--active');

        $('.mewtwo-tabs-tabs_list__item--count1').removeClass('mewtwo-tabs-tabs_list__item--active');

    });

    $('.widget-click-st').click(function(e) {

        e.preventDefault();


        $('.sob__all').hide();

        $('.sob__str').show();



        $('.widget-block').hide();

        $('.widget-block-st').show();

        $('.widget-block-tr').hide();

        $('.widget-block-tur').hide();

        $('.widget-block-ex').hide();
        $('.widget-block-ex1').hide();
        $('.widget-block-ex2').hide();
        $('.widget-block-ex3').hide();
        $('.TPWL-front-content-special_offers-title').removeClass('m25');

        $('.mewtwo-flights').addClass('remove-w');

        $('.mewtwo-hotels').addClass('remove-w');
        $('.mewtwo-tabs-tabs_list__item--count8').removeClass('mewtwo-tabs-tabs_list__item--active');
        $('.mewtwo-tabs-tabs_list__item--count4').addClass('mewtwo-tabs-tabs_list__item--active');
        $('.mewtwo-tabs-tabs_list__item--count9').removeClass('mewtwo-tabs-tabs_list__item--active');
        $('.mewtwo-tabs-tabs_list__item--count10').removeClass('mewtwo-tabs-tabs_list__item--active');
        $('.mewtwo-tabs-tabs_list__item--count7').removeClass('mewtwo-tabs-tabs_list__item--active');

        $('.mewtwo-tabs-tabs_list__item--count6').removeClass('mewtwo-tabs-tabs_list__item--active');

        $('.mewtwo-tabs-tabs_list__item--count5').removeClass('mewtwo-tabs-tabs_list__item--active');

        $('.mewtwo-tabs-tabs_list__item--count3').removeClass('mewtwo-tabs-tabs_list__item--active');

        $('.mewtwo-tabs-tabs_list__item--count2').removeClass('mewtwo-tabs-tabs_list__item--active');

        $('.mewtwo-tabs-tabs_list__item--count1').removeClass('mewtwo-tabs-tabs_list__item--active');

    });

    $('.widget-click-tr').click(function(e) {

        e.preventDefault();

        $('.sob__all').hide();

        $('.sob__tr').show();



        $('.widget-block').hide();
        $('.widget-block-ex2').hide();
        $('.widget-block-ex3').hide();
        $('.widget-block-st').hide();

        $('.widget-block-tr').show();

        $('.widget-block-tur').hide();

        $('.widget-block-ex').hide();
        $('.widget-block-ex1').hide();
        $('.TPWL-front-content-special_offers-title').addClass('m25');

        $('.mewtwo-flights').addClass('remove-w');

        $('.mewtwo-hotels').addClass('remove-w');
        $('.mewtwo-tabs-tabs_list__item--count8').removeClass('mewtwo-tabs-tabs_list__item--active');
        $('.mewtwo-tabs-tabs_list__item--count5').addClass('mewtwo-tabs-tabs_list__item--active');
        $('.mewtwo-tabs-tabs_list__item--count9').removeClass('mewtwo-tabs-tabs_list__item--active');
        $('.mewtwo-tabs-tabs_list__item--count10').removeClass('mewtwo-tabs-tabs_list__item--active');
        $('.mewtwo-tabs-tabs_list__item--count7').removeClass('mewtwo-tabs-tabs_list__item--active');

        $('.mewtwo-tabs-tabs_list__item--count6').removeClass('mewtwo-tabs-tabs_list__item--active');

        $('.mewtwo-tabs-tabs_list__item--count4').removeClass('mewtwo-tabs-tabs_list__item--active');

        $('.mewtwo-tabs-tabs_list__item--count3').removeClass('mewtwo-tabs-tabs_list__item--active');

        $('.mewtwo-tabs-tabs_list__item--count2').removeClass('mewtwo-tabs-tabs_list__item--active');

        $('.mewtwo-tabs-tabs_list__item--count1').removeClass('mewtwo-tabs-tabs_list__item--active');

    });



    $('.widget-click-tur').click(function(e) {

        e.preventDefault();

        $('.sob__all').hide();

        $('.sob__tur').show();


        $('.widget-block-ex2').hide();
        $('.widget-block-ex3').hide();
        $('.widget-block').hide();

        $('.widget-block-st').hide();

        $('.widget-block-tr').hide();

        $('.widget-block-tur').show();

        $('.widget-block-ex').hide();
        $('.widget-block-ex1').hide();
        $('.TPWL-front-content-special_offers-title').removeClass('m25');

        $('.mewtwo-flights').addClass('remove-w');

        $('.mewtwo-hotels').addClass('remove-w');
        $('.mewtwo-tabs-tabs_list__item--count8').removeClass('mewtwo-tabs-tabs_list__item--active');
        $('.mewtwo-tabs-tabs_list__item--count6').addClass('mewtwo-tabs-tabs_list__item--active');
        $('.mewtwo-tabs-tabs_list__item--count9').removeClass('mewtwo-tabs-tabs_list__item--active');
        $('.mewtwo-tabs-tabs_list__item--count10').removeClass('mewtwo-tabs-tabs_list__item--active');
        $('.mewtwo-tabs-tabs_list__item--count7').removeClass('mewtwo-tabs-tabs_list__item--active');

        $('.mewtwo-tabs-tabs_list__item--count5').removeClass('mewtwo-tabs-tabs_list__item--active');

        $('.mewtwo-tabs-tabs_list__item--count4').removeClass('mewtwo-tabs-tabs_list__item--active');

        $('.mewtwo-tabs-tabs_list__item--count3').removeClass('mewtwo-tabs-tabs_list__item--active');

        $('.mewtwo-tabs-tabs_list__item--count2').removeClass('mewtwo-tabs-tabs_list__item--active');

        $('.mewtwo-tabs-tabs_list__item--count1').removeClass('mewtwo-tabs-tabs_list__item--active');

    });



    $('.widget-click-ex').click(function(e) {

        e.preventDefault();



        $('.sob__all').hide();

        $('.sob__ex').show();



        $('.widget-block').hide();

        $('.widget-block-st').hide();

        $('.widget-block-tr').hide();

        $('.widget-block-tur').hide();

        $('.widget-block-ex').show();
        $('.widget-block-ex1').hide();
        $('.widget-block-ex2').hide();
        $('.widget-block-ex3').hide();
        $('.TPWL-front-content-special_offers-title').removeClass('m25');

        $('.mewtwo-flights').addClass('remove-w');

        $('.mewtwo-hotels').addClass('remove-w');
        $('.mewtwo-tabs-tabs_list__item--count8').removeClass('mewtwo-tabs-tabs_list__item--active');
        $('.mewtwo-tabs-tabs_list__item--count7').addClass('mewtwo-tabs-tabs_list__item--active');
        $('.mewtwo-tabs-tabs_list__item--count9').removeClass('mewtwo-tabs-tabs_list__item--active');
        $('.mewtwo-tabs-tabs_list__item--count10').removeClass('mewtwo-tabs-tabs_list__item--active');
        $('.mewtwo-tabs-tabs_list__item--count6').removeClass('mewtwo-tabs-tabs_list__item--active');

        $('.mewtwo-tabs-tabs_list__item--count5').removeClass('mewtwo-tabs-tabs_list__item--active');

        $('.mewtwo-tabs-tabs_list__item--count4').removeClass('mewtwo-tabs-tabs_list__item--active');

        $('.mewtwo-tabs-tabs_list__item--count3').removeClass('mewtwo-tabs-tabs_list__item--active');

        $('.mewtwo-tabs-tabs_list__item--count2').removeClass('mewtwo-tabs-tabs_list__item--active');

        $('.mewtwo-tabs-tabs_list__item--count1').removeClass('mewtwo-tabs-tabs_list__item--active');

    });
    $('.widget-click-ex1').click(function(e) {

        e.preventDefault();



        $('.sob__all').hide();

        $('.sob__ex').show();

        $('.widget-block-ex2').hide();
        $('.widget-block-ex3').hide();

        $('.widget-block').hide();

        $('.widget-block-st').hide();

        $('.widget-block-tr').hide();

        $('.widget-block-tur').hide();
        $('.widget-block-ex').hide();
        $('.widget-block-ex1').show();

        $('.TPWL-front-content-special_offers-title').removeClass('m25');

        $('.mewtwo-flights').addClass('remove-w');

        $('.mewtwo-hotels').addClass('remove-w');
        $('.mewtwo-tabs-tabs_list__item--count8').addClass('mewtwo-tabs-tabs_list__item--active');
        $('.mewtwo-tabs-tabs_list__item--count7').removeClass('mewtwo-tabs-tabs_list__item--active');
        $('.mewtwo-tabs-tabs_list__item--count9').removeClass('mewtwo-tabs-tabs_list__item--active');
        $('.mewtwo-tabs-tabs_list__item--count10').removeClass('mewtwo-tabs-tabs_list__item--active');
        $('.mewtwo-tabs-tabs_list__item--count6').removeClass('mewtwo-tabs-tabs_list__item--active');

        $('.mewtwo-tabs-tabs_list__item--count5').removeClass('mewtwo-tabs-tabs_list__item--active');

        $('.mewtwo-tabs-tabs_list__item--count4').removeClass('mewtwo-tabs-tabs_list__item--active');

        $('.mewtwo-tabs-tabs_list__item--count3').removeClass('mewtwo-tabs-tabs_list__item--active');

        $('.mewtwo-tabs-tabs_list__item--count2').removeClass('mewtwo-tabs-tabs_list__item--active');

        $('.mewtwo-tabs-tabs_list__item--count1').removeClass('mewtwo-tabs-tabs_list__item--active');

    });
    $('.widget-click-ex2').click(function(e) {

        e.preventDefault();



        $('.sob__all').hide();

        $('.sob__ex').show();



        $('.widget-block').hide();

        $('.widget-block-st').hide();

        $('.widget-block-tr').hide();

        $('.widget-block-tur').hide();
        $('.widget-block-ex').hide();
        $('.widget-block-ex1').hide();
        $('.widget-block-ex3').hide();
        $('.widget-block-ex2').show();

        $('.TPWL-front-content-special_offers-title').removeClass('m25');

        $('.mewtwo-flights').addClass('remove-w');

        $('.mewtwo-hotels').addClass('remove-w');
        $('.mewtwo-tabs-tabs_list__item--count8').removeClass('mewtwo-tabs-tabs_list__item--active');
        $('.mewtwo-tabs-tabs_list__item--count9').addClass('mewtwo-tabs-tabs_list__item--active');
        $('.mewtwo-tabs-tabs_list__item--count7').removeClass('mewtwo-tabs-tabs_list__item--active');
        $('.mewtwo-tabs-tabs_list__item--count10').removeClass('mewtwo-tabs-tabs_list__item--active');
        $('.mewtwo-tabs-tabs_list__item--count6').removeClass('mewtwo-tabs-tabs_list__item--active');

        $('.mewtwo-tabs-tabs_list__item--count5').removeClass('mewtwo-tabs-tabs_list__item--active');

        $('.mewtwo-tabs-tabs_list__item--count4').removeClass('mewtwo-tabs-tabs_list__item--active');

        $('.mewtwo-tabs-tabs_list__item--count3').removeClass('mewtwo-tabs-tabs_list__item--active');

        $('.mewtwo-tabs-tabs_list__item--count2').removeClass('mewtwo-tabs-tabs_list__item--active');

        $('.mewtwo-tabs-tabs_list__item--count1').removeClass('mewtwo-tabs-tabs_list__item--active');

    });
    $('.widget-click-ex3').click(function(e) {

        e.preventDefault();



        $('.sob__all').hide();

        $('.sob__ex').show();



        $('.widget-block').hide();

        $('.widget-block-st').hide();

        $('.widget-block-tr').hide();

        $('.widget-block-tur').hide();
        $('.widget-block-ex').hide();
        $('.widget-block-ex1').hide();
        $('.widget-block-ex2').hide();
        $('.widget-block-ex3').show();

        $('.TPWL-front-content-special_offers-title').removeClass('m25');

        $('.mewtwo-flights').addClass('remove-w');

        $('.mewtwo-hotels').addClass('remove-w');
        $('.mewtwo-tabs-tabs_list__item--count10').addClass('mewtwo-tabs-tabs_list__item--active');
        $('.mewtwo-tabs-tabs_list__item--count7').removeClass('mewtwo-tabs-tabs_list__item--active');
        $('.mewtwo-tabs-tabs_list__item--count9').removeClass('mewtwo-tabs-tabs_list__item--active');
        $('.mewtwo-tabs-tabs_list__item--count8').removeClass('mewtwo-tabs-tabs_list__item--active');
        $('.mewtwo-tabs-tabs_list__item--count6').removeClass('mewtwo-tabs-tabs_list__item--active');

        $('.mewtwo-tabs-tabs_list__item--count5').removeClass('mewtwo-tabs-tabs_list__item--active');

        $('.mewtwo-tabs-tabs_list__item--count4').removeClass('mewtwo-tabs-tabs_list__item--active');

        $('.mewtwo-tabs-tabs_list__item--count3').removeClass('mewtwo-tabs-tabs_list__item--active');

        $('.mewtwo-tabs-tabs_list__item--count2').removeClass('mewtwo-tabs-tabs_list__item--active');

        $('.mewtwo-tabs-tabs_list__item--count1').removeClass('mewtwo-tabs-tabs_list__item--active');

    });

    $('.btn__slider_one').click(function(e) {

        e.preventDefault();

        $('.widget-click-st').click();

    });



    $('.btn__slider_two').click(function(e) {

        e.preventDefault();

        $('.widget-click-tur').click();

    });



    $('.header_link_tur').click(function(e) {

        e.preventDefault();

        $('.widget-click-tur').click();

    });

    $('.header_link_ex').click(function(e) {

        e.preventDefault();

        $('.widget-click-ex').click();

    });
    $('.header_link_ex1').click(function(e) {

        e.preventDefault();

        $('.widget-click-ex1').click();

    });

    $('.header_link_tr').click(function(e) {

        var link = $(this);

        var target = link.attr("target");

        window.open(link.attr("href"), target);

    });

    $('.header_link_zd').click(function(e) {

        e.preventDefault();

        $('.widget-click').click();

    });

    $('.header_link_avia').click(function(e) {

        e.preventDefault();
        $('.sob__all').hide();

        $('.sob__avia').show();

        $('.widget-block').hide();

        $('.widget-block-st').hide();

        $('.widget-block-tr').hide();

        $('.widget-block-tur').hide();

        $('.widget-block-ex').hide();
        $('.widget-block-ex1').hide();
        $('.mewtwo-flights').removeClass('remove-w');

        $('.mewtwo-hotels').removeClass('remove-w');

        $('.mewtwo-flights').removeClass('mewtwo-tabs-container--hidden');

        $('.mewtwo-flights').removeClass('mewtwo-tabs-container--transparent');

        $('.mewtwo-hotels').addClass('mewtwo-tabs-container--hidden');

        $('.mewtwo-hotels').addClass('mewtwo-tabs-container--transparent');
        $('.mewtwo-tabs-tabs_list__item--count8').removeClass('mewtwo-tabs-tabs_list__item--active');
        $('.mewtwo-tabs-tabs_list__item--flights').addClass('mewtwo-tabs-tabs_list__item--active');

        $('.mewtwo-tabs-tabs_list__item--hotels').removeClass('mewtwo-tabs-tabs_list__item--active');

        $('.mewtwo-tabs-tabs_list__item--count3').removeClass('mewtwo-tabs-tabs_list__item--active');

        $('.mewtwo-tabs-tabs_list__item--count4').removeClass('mewtwo-tabs-tabs_list__item--active');

        $('.mewtwo-tabs-tabs_list__item--count5').removeClass('mewtwo-tabs-tabs_list__item--active');

        $('.mewtwo-tabs-tabs_list__item--count6').removeClass('mewtwo-tabs-tabs_list__item--active');

        $('.mewtwo-tabs-tabs_list__item--count7').removeClass('mewtwo-tabs-tabs_list__item--active');

    });

    $('.header_link_otel').click(function(e) {
        e.preventDefault();
        $('.sob__all').hide();

        $('.sob__otel').show();

        $('.widget-block').hide();

        $('.widget-block-st').hide();

        $('.widget-block-tr').hide();

        $('.widget-block-tur').hide();

        $('.widget-block-ex').hide();
        $('.widget-block-ex1').hide();
        $('.mewtwo-flights').removeClass('remove-w');

        $('.mewtwo-hotels').removeClass('remove-w');

        $('.mewtwo-hotels').removeClass('mewtwo-tabs-container--hidden');

        $('.mewtwo-hotels').removeClass('mewtwo-tabs-container--transparent');

        $('.mewtwo-flights').addClass('mewtwo-tabs-container--hidden');

        $('.mewtwo-flights').addClass('mewtwo-tabs-container--transparent');
        $('.mewtwo-tabs-tabs_list__item--count8').removeClass('mewtwo-tabs-tabs_list__item--active');
        $('.mewtwo-tabs-tabs_list__item--hotels').addClass('mewtwo-tabs-tabs_list__item--active');

        $('.mewtwo-tabs-tabs_list__item--flights').removeClass('mewtwo-tabs-tabs_list__item--active');

        $('.mewtwo-tabs-tabs_list__item--count7').removeClass('mewtwo-tabs-tabs_list__item--active');

        $('.mewtwo-tabs-tabs_list__item--count6').removeClass('mewtwo-tabs-tabs_list__item--active');

        $('.mewtwo-tabs-tabs_list__item--count5').removeClass('mewtwo-tabs-tabs_list__item--active');

        $('.mewtwo-tabs-tabs_list__item--count4').removeClass('mewtwo-tabs-tabs_list__item--active');

        $('.mewtwo-tabs-tabs_list__item--count3').removeClass('mewtwo-tabs-tabs_list__item--active');

        $('.mewtwo-tabs-tabs_list__item--count1').removeClass('mewtwo-tabs-tabs_list__item--active');
    });
});