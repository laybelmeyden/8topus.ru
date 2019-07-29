@extends('layouts.master')
@section('content')




    <script>
        window.GEOIP = {
            "country_code": "ru"
        };
    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

    <script>
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
    </script>




    <!-- Google Tag Manager -->



    <!-- End Google Tag Manager -->







    <style type="text/css">
        .TPWL-wl_content {
            display: none;
        }
    </style>

    <!-- %%PAGE:front%% -->




    <link rel="dns-prefetch" href="//travelpayouts.com">

    <link rel="dns-prefetch" href="//google.com">

    <link rel="dns-prefetch" href="//photo.hotellook.com">

    <link rel="dns-prefetch" href="//mamka.aviasales.ru">



    <link rel="preconnect" href="//travelpayouts.com">

    <link rel="preconnect" href="//google.com">

    <link rel="preconnect" href="//photo.hotellook.com">

    <link rel="preconnect" href="//mamka.aviasales.ru">



    <title>Дешевые авиабилеты и отели</title>

    <meta name="description" content="Сравниваем цены с сотен сайтов и позволяем вым выбрать самый дешевый вариант перелета или лучшую цену на отель." />

    <meta property="og:title" content="Поиск дешевых авиабилетов и отелей" />

    <meta property="og:description" content="Сравниваем цены с сотен сайтов и позволяем вым выбрать самый дешевый вариант перелета или лучшую цену на отель." />

    <meta content="ru_RU" property="og:locale">

    <meta content="product.item" property="og:type">

    <meta content="http://kit.travel/images/og_front.png?currency=rub&host=kit.travel&locale=ru&page_type=front" property="og:image">



    <meta content="Поиск дешевых авиабилетов и отелей" name="twitter:title">

    <meta content="Сравниваем цены с сотен сайтов и позволяем вым выбрать самый дешевый вариант перелета или лучшую цену на отель." name="twitter:description">

    <meta content="summary_large_image" name="twitter:card">



    <link rel="stylesheet" type="text/css" href="https://kenwheeler.github.io/slick/slick/slick.css" />

    <link rel="stylesheet" type="text/css" href="https://kenwheeler.github.io/slick/slick/slick-theme.css" />





    <meta charset='utf-8' />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <meta name="smartbanner:enabled-platforms" content="none">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap&subset=cyrillic" rel="stylesheet">






    <style type="text/css">
        .TPWL-colors-body_background {
            background-color: #F7F7F7;
        }
        
        .TPWL-colors-blocks_background {
            background-color: #00AFDD;
        }
        
        .TPWL-colors-button_background {
            background-color: #FFA600;
        }
        
        .TPWL-colors-icons {
            background-color: #00AFDD;
        }
        
        .TPWL-colors-button_text {
            color: #FFFFFF;
        }
        
        .TPWL-colors-link {
            color: #00AFDD;
        }
        
        .TPWL-colors-blocks_text {
            color: #FFFFFF;
        }
        
         :root {
            --body_background: #F7F7F7;
            --blocks_background: #00AFDD;
            --button_background: #FFA600;
            --icons: #00AFDD;
            --button_text: #FFFFFF;
            --link: #00AFDD;
            --blocks_text: #FFFFFF;
        }
        
        body {
            position: relative;
            overflow-x: hidden;
            margin: 0;
            padding: 0;
            width: 100%;
            color: #444;
            font-family: "Open Sans", sans-serif;
            font-size: 11px;
            background-color: var(--body_background);
            text-rendering: optimizeLegibility;
        }
        
        body.TPWL_mobile.mobile_overflow--hidden {
            position: fixed;
            overflow: hidden;
            height: 100%;
        }
        
        body.overflow--hidden {
            overflow: hidden;
        }
        
        .ie-fixMinHeight {
            display: flex;
        }
        
        .page {
            display: -webkit-flex;
            display: -moz-flex;
            display: -ms-flex;
            display: -o-flex;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            width: 100%;
        }
        
        body.TPWL--iframe .page {
            min-height: 768px;
        }
        
        .user-settings-selector {
            visibility: hidden;
        }
        
        .TPWL-header-content__descrition {
            color: var(--blocks_text);
        }
        
        .TPWL-wrapper {
            background: #eee;
        }
        
        .TPWL-widget {
            flex-grow: 1;
            font: 100%/12px 'Open Sans', sans-serif;
            font-weight: 300;
        }
        
        .TPWL-widget div.application_loader {
            position: absolute;
            top: 50vh;
            left: 50%;
            margin-left: -23px;
            width: 46px;
            z-index: 10;
        }
        
        .TPWL-widget div.application_spinner {
            position: absolute;
            display: block;
            top: 50%;
            left: 50%;
            z-index: 10;
            margin-left: -22px;
            text-align: center;
        }
        
        .TPWL-widget div.application_spinner div {
            display: inline-block;
            width: 15px;
            height: 15px;
            border-radius: 50%;
            vertical-align: middle;
            font-size: 13px;
            background: #ccc;
            -webkit-animation: spinner_loader 1.1s linear infinite;
            animation: spinner_loader 1.1s linear infinite;
        }
        
        .TPWL-widget div.application_spinner div:nth-child(1) {
            -webkit-animation-delay: -0.32s;
            animation-delay: -0.32s;
        }
        
        .TPWL-widget div.application_spinner div:nth-child(2) {
            -webkit-animation-delay: -0.16s;
            animation-delay: -0.16s;
        }
        
        @-webkit-keyframes spinner_loader {
            0%,
            80%,
            100% {
                -webkit-transform: scale(0.0);
                transform: scale(0.0);
            }
            40% {
                -webkit-transform: scale(1.0);
                transform: scale(1.0);
            }
        }
        
        @keyframes spinner_loader {
            0%,
            80%,
            100% {
                -webkit-transform: scale(0.0);
                transform: scale(0.0);
            }
            40% {
                -webkit-transform: scale(1.0);
                transform: scale(1.0);
            }
        }
        
        .TPWL-widget div.TPWL-front-content p {
            line-height: 25px;
            font-size: 14px;
            margin: 10px 0;
        }
        
        .TPWL-widget div.TPWL-front-content h1 {
            font-size: 24px;
            line-height: 1.29;
            font-weight: 400;
            margin-bottom: 20px;
        }
        
        .TPWL-widget div.TPWL-front-content a {
            color: #4285f4;
        }
        
        .TPWL-widget div.TPWL-front-content h2 {
            font-size: 32px;
            line-height: 1.29;
            font-weight: 300;
            margin: 30px 0 15px;
        }
        
        .TPWL-widget div.TPWL-front-content table {
            border: 1px solid #808080;
            border-collapse: collapse;
            border-spacing: 0;
            font-size: 14px;
        }
        
        .TPWL-widget div.TPWL-front-content table th {
            background-color: #f5f5f5;
            text-align: left;
            border: 1px solid #eee;
            padding: 4px 12px;
            vertical-align: top;
            font-weight: 700;
        }
        
        .TPWL-widget div.TPWL-front-content table td {
            border: 1px solid #eee;
            padding: 4px 12px;
            vertical-align: top;
        }
        
        .TPWL-widget div.TPWL-front-content table tr {
            background-color: #fafafa;
        }
        
        .TPWL-widget div.TPWL-front-content table tr:nth-of-type(even) {
            background-color: #fff;
        }
        
        .TPWL-widget .TPWL-front-content .TPWL-front-content_attention {
            padding: 10px 10px;
            background-color: #f6f9ff;
            border: 1px solid #f8f6e6;
            color: #444;
            border-radius: 4px;
            margin-bottom: 20px;
            font-size: 16px;
            line-height: 25px;
            font-weight: 500;
        }
        
        .TPWL-widget .TPWL-front-content .TPWL-front-content_text-list {
            background-image: none;
            margin: 10px 10px 10px 30px;
            list-style-type: disc;
            color: #757575;
            font-size: 16px;
            line-height: 24px;
        }
        
        .TPWL-widget--front_page .TPWL-template-search-results {
            display: none;
        }
    </style>










<div class="TPWL-widget--front_page">

    <noscript>

    <iframe src="//www.googletagmanager.com/ns.html?id=GTM-M47KB56" height="0" width="0" style="display:none;visibility:hidden"></iframe>

</noscript>

    <div class="ie-fixMinHeight">
        <div class="page">

            
            <!-- слайдер с предложениями  -->

            <div class="slider__block header__slider">

                <div class="slide slide_1">

                    <div class="text__wrap_slider1">

                        <span class="title"><span>Оформите</span><br/>туристическую страховку<br/> не выходя из дома</span>



                    </div>

                </div>

                <div class="slide slide_2">

                    <div class="text__wrap_slider2">

                        <span class="img"><img src="https://cdn.travelpayouts.com/marketing/kit_travel/level-travel-logo.png" alt=""/></span>

                        <span class="title">Утомляет планирование отпуска?<br/>Пакетный тур — лучшее решение!</span>

                        <a href="#" class="btn__slider_two">Посмотреть туры</a>

                    </div>
                </div>

            </div>

            <!-- START виджет для Ж/Д вкладки-->

            <div class="widget-block" style="display:none;">
                <script src="https://c45.travelpayouts.com/content?promo_id=1655&shmarker=229849"></script>
            </div>

            <!-- END виджет для Ж/Д вкладки-->



            <!-- START виджет для вкладки Страховка-->

            <div class="widget-block-st" style="display:none;">
                <script src="//c24.travelpayouts.com/content?promo_id=1498&shmarker=229849&width=1180&background=%23ffffff&foreground=%23eeeeee&section=%23ffed74&highlight=%23e5d568&auto_start=false&country=%D0%A2%D0%B0%D0%B8%D0%BB%D0%B0%D0%BD%D0%B4&tourists=2&powered_by=true"
                    charset="utf-8"></script>
            </div>

            <!-- END виджет для вкладки Страховка-->



            <!-- START виджет для вкладки Трансфер-->

            <div class="widget-block-tr" style="display:none;">
                <script src="https://c1.travelpayouts.com/content?promo_id=1486&shmarker=229849&theme=1&language=ru&powered_by=false" charset="utf-8" async></script>
            </div>

            <!-- END виджет для вкладки Трансфер-->



            <!-- START виджет для вкладки Тур-->

            <div class="widget-block-tur" style="display:none;">

                <script src="https://c18.travelpayouts.com/content?promo_id=1492&shmarker=219987" charset="utf-8" async></script>
            </div>

            <!-- END виджет для вкладки Тур-->



            <!-- START виджет для вкладки Экскурсии-->

            <div class="widget-block-ex" style="display:none;">

                <div id="powered_by_1498" class="wbe__containe">

                    <a target="_blank" href="https://c11.travelpayouts.com/click?shmarker=229849&promo_id=1751&source_type=link&type=click">Необычные экскурсии в Риме</a>,

                    <a target="_blank" href="https://c11.travelpayouts.com/click?shmarker=229849&promo_id=1750&source_type=link&type=click">Париже</a>,

                    <a target="_blank" href="https://c11.travelpayouts.com/click?shmarker=229849&promo_id=1749&source_type=link&type=click">Санкт-Петербурге</a>,

                    <a target="_blank" href="https://c11.travelpayouts.com/click?shmarker=229849&promo_id=1748&source_type=link&type=click">Москве</a>,

                    <a target="_blank" href="https://c11.travelpayouts.com/click?shmarker=229849&promo_id=1747&source_type=link&type=click">Барселоне</a>,

                    <a target="_blank" href="https://c11.travelpayouts.com/click?shmarker=229849&promo_id=1746&source_type=link&type=click">Праге</a>

                </div>

            </div>
            <div class="widget-block-ex2" style="display:none;">
                <script src="//c92.travelpayouts.com/content?promo_id=3492&shmarker=219987" charset="utf-8"></script>

            </div>
            <div class="widget-block-ex3" style="display:none;">

                <div id="powered_by_1498" class="wbe__containe">

                    <a target="_blank" href="http://yanatom.visaglobal.promotionalurl.com/zakaz">Визы</a>


                </div>

            </div>



            <div class="widget-block-ex1" style="display:none;">

                <script src="//tp.media/content?promo_id=2717&shmarker=219987&campaign_id=81&locale=ru" charset="utf-8"></script>

            </div>

            <!-- END виджет для вкладки Экскурсии-->
            <div class="TPWL-widget" style="
    position: relative;
    margin-top: -27px;
">

                <div class="TPWL-wl_content" data-front="true" role="tpwl-content"> </div>

                <div class="TPWL-front-content">
                    <script charset="utf-8" src="//www.travelpayouts.com/widgets/ce85fdc1c95c1146e8c9aa7ed43fbe43.js?v=1771" async></script>
                </div>

                <div class="TPWL-widget">

                    <div class="TPWL-wl_content" data-front="true" role="tpwl-content"> </div>

                    <div class="TPWL-front-content">

                        <!-- специальные предложения -->

                        <div class="TPWL-front-content" style="margin: 0 auto;width: 1278px;">



                            <!-- секция списка партнеров -->

                            <div class="partners">

                                <h2 class="TPWL-front-content-special_offers-title partners__title">Наши партнёры</h2>

                                <p>Крупнейшие авиакассы, агентства бронирования, турооператоры, ж/д и автобусные перевеозчики</p>

                                <ul>

                                    <li>
                                        <a href="https://tripster.ru/" title="" target="_blank"><img src="https://cdn.travelpayouts.com/marketing/kit_travel/tripster.png" alt="" /></a>
                                    </li>

                                    <li>
                                        <a href="https://kiwitaxi.ru/" title="" target="_blank"><img src="https://cdn.travelpayouts.com/marketing/kit_travel/kiwitaxi.png" alt="" /></a>
                                    </li>

                                    <li>
                                        <a href="https://www.tutu.ru/" title="" target="_blank"><img src="https://cdn.travelpayouts.com/marketing/kit_travel/tutu.png" alt="" /></a>
                                    </li>

                                    <li>
                                        <a href="https://cherehapa.ru/" title="" target="_blank"><img src="https://cdn.travelpayouts.com/marketing/kit_travel/cherehapa.png" alt="" /></a>
                                    </li>

                                    <li>
                                        <a href="https://www.sputnik8.com/" title="" target="_blank"><img src="https://cdn.travelpayouts.com/marketing/kit_travel/sputnik.png" alt="" /></a>
                                    </li>

                                    <li>
                                        <a href="https://level.travel/" title="" target="_blank"><img src="https://cdn.travelpayouts.com/marketing/kit_travel/level.png" alt="" /></a>
                                    </li>

                                    <li>
                                        <a href="https://hotellook.ru/" title="" target="_blank"><img src="https://cdn.travelpayouts.com/marketing/kit_travel/hotellook.png" alt="" /></a>
                                    </li>

                                    <li>
                                        <a href="https://www.blablacar.ru/" title="" target="_blank"><img src="https://cdn.travelpayouts.com/marketing/kit_travel/blablacar.png" alt="" /></a>
                                    </li>

                                    <li>
                                        <a href="https://www.aviasales.ru/" title="" target="_blank"><img src="https://cdn.travelpayouts.com/marketing/kit_travel/aviasales.png" alt="" /></a>
                                    </li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- подвал сайта -->

               

                <!-- START подключаем библиотеку для обработки jquery  -->

                <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

                <!--  END подключаем библиотеку для обработки jquery -->

                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.css" type="text/css">

                <script src="https://kenwheeler.github.io/slick/slick/slick.js" crossorigin="anonymous"></script>





                <!-- START скрипт добавления вкладки с ссылкой для перехода -->



                <!-- END скрипт добавления вкладки с ссылкой для перехода -->



                <style>
                    /* стили табулятора с формами */
                    
                    .TPWL-widget #tpwl-main-form .mewtwo-placeholder-label,
                    .TPWL-widget #tpwl-preroll-form .mewtwo-placeholder-label,
                    .TPWL-widget #tpwl-side-form .mewtwo-placeholder-label {
                        color: #222 !important;
                        text-transform: unset !important;
                        letter-spacing: 0px!important;
                        font-size: 12px !important;
                        font-weight: normal !important;
                        top: -23px !important;
                    }
                    
                    .mewtwo-widget--whitelabel_ru .mewtwo-flights-header__link,
                    .mewtwo-widget--whitelabel_ru .mewtwo-flights-link_to_multi {
                        color: #888991 !important;
                    }
                    
                    .mewtwo-widget--whitelabel_ru .mewtwo-flights-link_to_multi:before {
                        background-image: url(data:image/svg+xml,%3Csvg%20width%3D%2217%22%20height%3D%2216%22%20viewBox%…%22%20fill%3D%22%23888991%22%20fill-rule%3D%22evenodd%22%2F%3E%3C%2Fsvg%3E) !important;
                    }
                    
                    .TPWL-widget .mewtwo-widget .mewtwo-tabs {
                        padding: 0 !important;
                        width: 100%!important;
                        background: #333647!important;
                    }
                    
                    .TPWL-widget.user-settings .user-settings-informer {
                        position: absolute;
                        z-index: 11;
                        right: 20px;
                        top: 11px;
                        background: #333647!important;
                    }
                    
                    .TPWL-widget.user-settings {
                        margin-right: 0 !important;
                    }
                    
                    .TPWL-widget #tpwl-main-form .mewtwo-tabs_list {
                        height: 58px!important;
                    }
                    
                    .TPWL-widget .mewtwo-widget .mewtwo-tabs {
                        border-radius: 10px 10px 0px 0px;
                    }
                    
                    .TPWL-widget #tpwl-main-form .mewtwo-tabs_list .mewtwo-tabs-tabs_list__item--active,
                    .TPWL-widget #tpwl-preroll-form .mewtwo-tabs_list .mewtwo-tabs-tabs_list__item--active,
                    .TPWL-widget #tpwl-side-form .mewtwo-tabs_list .mewtwo-tabs-tabs_list__item--active {
                        background: #fff !important;
                        border: 0 !important;
                        border-radius: 10px 10px 0px 0px !important;
                        height: auto !important;
                        padding: 15px 28px 10px !important;
                    }
                    
                    .TPWL-widget #tpwl-main-form .mewtwo-tabs_list .mewtwo-tabs-tabs_list__item--active span {
                        color: #262626 !important;
                        font-family: 'Roboto' !important;
                        font-weight: 500 !important;
                    }
                    
                    .TPWL-widget #tpwl-main-form .mewtwo-tabs-tabs_list__item span,
                    .TPWL-widget #tpwl-preroll-form .mewtwo-tabs-tabs_list__item span,
                    .TPWL-widget #tpwl-side-form .mewtwo-tabs-tabs_list__item span {
                        border: 0 !important;
                        border-radius: 0 !important;
                    }
                    
                    .TPWL-widget #tpwl-main-form .mewtwo-tabs-tabs_list__item:last-child,
                    .TPWL-widget #tpwl-preroll-form .mewtwo-tabs-tabs_list__item:last-child,
                    .TPWL-widget #tpwl-side-form .mewtwo-tabs-tabs_list__item:last-child {
                        border: 0 !important;
                        border-radius: 0 !important;
                        height: auto !important;
                        padding: 15px 28px 10px !important;
                        font-family: 'Roboto' !important;
                        font-weight: 500 !important;
                        border-radius: 10px 10px 0px 0px !important;
                    }
                    
                    .TPWL-widget .TPWL-template-header.TPWL-template-header--sticky {
                        position: relative !important;
                        box-shadow: none !important;
                        top: inherit !important;
                    }
                    
                    .TPWL-widget #tpwl-main-form .mewtwo-show_hotels label.mewtwo-show_hotels__label,
                    .TPWL-widget #tpwl-preroll-form .mewtwo-show_hotels label.mewtwo-show_hotels__label,
                    .TPWL-widget #tpwl-side-form .mewtwo-show_hotels label.mewtwo-show_hotels__label {
                        color: #888991 !important;
                    }
                    
                    .mewtwo-widget--whitelabel_ru .mewtwo-flights {
                        background: #fff !important;
                    }
                    
                    .mewtwo-widget--whitelabel_ru .mewtwo-flights .mewtwo-show_hotels-wrapper {
                        background: #fff !important;
                    }
                    
                    .mewtwo-widget--whitelabel_ru .mewtwo-tabs-tabs_list__item--active:after {
                        background-color: #fff !important;
                    }
                    
                    .mewtwo-widget--whitelabel_ru .mewtwo-flights-container input[type="text"],
                    .mewtwo-widget--whitelabel_ru .mewtwo-flights-trip_class {
                        border-color: #F1F4F7 !important;
                        background: #F1F4F7 !important;
                        color: #222 !important;
                    }
                    
                    .mewtwo-widget .mewtwo-flights-origin__iata {
                        color: #AAA!important;
                    }
                    
                    .mewtwo-widget .mewtwo-flights-destination .mewtwo-filled~.mewtwo-flights-destination-country:after,
                    .mewtwo-widget .mewtwo-flights-destination .mewtwo-filled~.mewtwo-hotels-city-location:after,
                    .mewtwo-widget .mewtwo-flights-destination .mewtwo-filled~.mewtwo-input-icons:after {
                        background: none !important;
                    }
                    
                    .mewtwo-widget .mewtwo-flights-origin .mewtwo-filled~.mewtwo-flights-origin-country:after {
                        background: none !important;
                    }
                    
                    .TPWL-widget #tpwl-main-form .mewtwo-flights-container--new .mewtwo-swap_button,
                    .TPWL-widget #tpwl-preroll-form .mewtwo-flights-container--new .mewtwo-swap_button,
                    .TPWL-widget #tpwl-side-form .mewtwo-flights-container--new .mewtwo-swap_button {
                        display: none;
                    }
                    
                    .mewtwo-widget .mewtwo-flights-dates-depart-icons:before,
                    .mewtwo-widget .mewtwo-flights-dates-return-icons:before,
                    .mewtwo-widget .mewtwo-flights-dates-return-iconsx:before {
                        background: none !important;
                    }
                    
                    .TPWL-widget .mewtwo-widget .mewtwo-flights-container,
                    .TPWL-widget .mewtwo-widget .mewtwo-flights-multi,
                    .TPWL-widget .mewtwo-widget .mewtwo-hotels-container {
                        padding: 40px 30px 30px 30px!important;
                    }
                    
                    .mewtwo-widget--whitelabel_ru .mewtwo-flights-submit_button button {
                        background: #3CA84F !important;
                    }
                    
                    .TPWL-widget #tpwl-main-form .mewtwo-flights-submit_button button,
                    .TPWL-widget #tpwl-main-form .mewtwo-flights-multi-submit_button button,
                    .TPWL-widget #tpwl-main-form .mewtwo-flights-submit_button button,
                    .TPWL-widget #tpwl-main-form .mewtwo-hotels-submit_button button,
                    .TPWL-widget #tpwl-preroll-form .mewtwo-flights-multi-submit_button button,
                    .TPWL-widget #tpwl-preroll-form .mewtwo-flights-submit_button button,
                    .TPWL-widget #tpwl-preroll-form .mewtwo-hotels-submit_button button,
                    .TPWL-widget #tpwl-side-form .mewtwo-flights-multi-submit_button button,
                    .TPWL-widget #tpwl-side-form .mewtwo-flights-submit_button button,
                    .TPWL-widget #tpwl-side-form .mewtwo-hotels-submit_button button {
                        font-size: 17px !important;
                        text-transform: unset !important;
                        box-shadow: none !important;
                    }
                    
                    .TPWL-template-header--sticky_extender,
                    .TPWL-widget .TPWL-template-header.TPWL-template-header--sticky {
                        display: none !important;
                    }
                    
                    .TPWL-widget #tpwl-main-form .mewtwo-show_hotels input[type=checkbox]:checked+.mewtwo-custom_checkbox_wrapper+.mewtwo-show_hotels__label:before,
                    .TPWL-widget #tpwl-preroll-form .mewtwo-show_hotels input[type=checkbox]:checked+.mewtwo-custom_checkbox_wrapper+.mewtwo-show_hotels__label:before,
                    .TPWL-widget #tpwl-side-form .mewtwo-show_hotels input[type=checkbox]:checked+.mewtwo-custom_checkbox_wrapper+.mewtwo-show_hotels__label:before {
                        background: #CCE7FF url(data:image/svg+xml,%3Csvg%20width%3D%2210%22%20height%3D%228%22%20viewBox%3D%220%200%2010%208%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cpath%20d%3D%22M3.936%204.81L1.49%202.246%200%203.82%203.936%208%2010%201.573%208.51%200%203.937%204.81z%22%20fill%3D%22%23005DD9%22%20fill-rule%3D%22evenodd%22%2F%3E%3C%2Fsvg%3E) no-repeat center center!important
                    }
                    
                    .TPWL-widget #tpwl-main-form .mewtwo-tabs-tabs_list__item:first-child,
                    .TPWL-widget #tpwl-preroll-form .mewtwo-tabs-tabs_list__item:first-child,
                    .TPWL-widget #tpwl-side-form .mewtwo-tabs-tabs_list__item:first-child {
                        border: 0 !important;
                        border-radius: 0 !important;
                        height: auto !important;
                        padding: 14px 13px 10px !important;
                        font-family: 'Roboto' !important;
                        font-weight: 500 !important;
                        border-radius: 10px 10px 0px 0px !important;
                    }
                    
                    .mewtwo-widget--whitelabel_ru .mewtwo-hotels {
                        background: #fff !important;
                    }
                    
                    .TPWL-widget #tpwl-main-form .mewtwo-flights-container--new .mewtwo-flights-destination input,
                    .TPWL-widget #tpwl-main-form .mewtwo-flights-container--new .mewtwo-flights-origin input,
                    .TPWL-widget #tpwl-main-form .mewtwo-flights-container--new .mewtwo-flights-trip_class input,
                    .TPWL-widget #tpwl-main-form .mewtwo-flights-dates--new input,
                    .TPWL-widget #tpwl-main-form .mewtwo-hotels-container .mewtwo-hotels-city--new input,
                    .TPWL-widget #tpwl-main-form .mewtwo-hotels-container .mewtwo-hotels-dates--new input,
                    .TPWL-widget #tpwl-main-form .mewtwo-hotels-container .mewtwo-hotels-guests--new input,
                    .TPWL-widget #tpwl-preroll-form .mewtwo-flights-container--new .mewtwo-flights-destination input,
                    .TPWL-widget #tpwl-preroll-form .mewtwo-flights-container--new .mewtwo-flights-origin input,
                    .TPWL-widget #tpwl-preroll-form .mewtwo-flights-container--new .mewtwo-flights-trip_class input,
                    .TPWL-widget #tpwl-preroll-form .mewtwo-flights-dates--new input,
                    .TPWL-widget #tpwl-preroll-form .mewtwo-hotels-container .mewtwo-hotels-city--new input,
                    .TPWL-widget #tpwl-preroll-form .mewtwo-hotels-container .mewtwo-hotels-dates--new input,
                    .TPWL-widget #tpwl-preroll-form .mewtwo-hotels-container .mewtwo-hotels-guests--new input,
                    .TPWL-widget #tpwl-side-form .mewtwo-flights-container--new .mewtwo-flights-destination input,
                    .TPWL-widget #tpwl-side-form .mewtwo-flights-container--new .mewtwo-flights-origin input,
                    .TPWL-widget #tpwl-side-form .mewtwo-flights-container--new .mewtwo-flights-trip_class input,
                    .TPWL-widget #tpwl-side-form .mewtwo-flights-dates--new input,
                    .TPWL-widget #tpwl-side-form .mewtwo-hotels-container .mewtwo-hotels-city--new input,
                    .TPWL-widget #tpwl-side-form .mewtwo-hotels-container .mewtwo-hotels-dates--new input,
                    .TPWL-widget #tpwl-side-form .mewtwo-hotels-container .mewtwo-hotels-guests--new input {
                        background: #F1F4F7 !important;
                    }
                    
                    .mewtwo-widget .mewtwo-hotels-city-icon:before,
                    .mewtwo-widget .mewtwo-hotels-dates-checkin-icons:before,
                    .mewtwo-widget .mewtwo-hotels-dates-checkout-icons:before,
                    .TPWL-widget #tpwl-main-form .mewtwo-hotels-guests--new .mewtwo-hotels-guests__text,
                    .TPWL-widget #tpwl-main-form .mewtwo-hotels-guests,
                    .TPWL-widget #tpwl-preroll-form .mewtwo-hotels-guests,
                    .TPWL-widget #tpwl-side-form .mewtwo-hotels-guests {
                        background: #F1F4F7 !important;
                    }
                    
                    .mewtwo-widget--whitelabel_ru .mewtwo-hotels .mewtwo-show_hotels-wrapper {
                        background: #fff !important;
                    }
                    
                    .TPWL-widget #tpwl-main-form .mewtwo-tabs-tabs_list__item,
                    .TPWL-widget #tpwl-preroll-form .mewtwo-tabs-tabs_list__item,
                    .TPWL-widget #tpwl-side-form .mewtwo-tabs-tabs_list__item {
                        border: 0 !important;
                        border-radius: 0 !important;
                        height: auto !important;
                        padding: 15px 28px 10px !important;
                        font-family: 'Roboto' !important;
                        font-weight: 500 !important;
                        border-radius: 10px 10px 0px 0px !important
                    }
                    
                    .TPWL-widget #tpwl-main-form .mewtwo-tabs-tabs_list__item span,
                    .TPWL-widget #tpwl-preroll-form .mewtwo-tabs-tabs_list__item span,
                    .TPWL-widget #tpwl-side-form .mewtwo-tabs-tabs_list__item span {
                        padding: 0 9px!important;
                    }
                    
                    .widget-block,
                    .widget-block-st,
                    .widget-block-tr,
                    .widget-block-tur,
                    .widget-block-ex,
                    .widget-block-ex1 {
                        display: none;
                    }
                    
                    .mewtwo-widget section.remove-w {
                        display: none !important;
                    }
                    
                    .cascoon.cascoon--xl {
                        max-height: 165px !important;
                        min-height: 165px !important;
                    }
                    
                    .cascoon.cascoon-2694.cascoon-2694_0,
                    .cascoon.cascoon-2694.cascoon-2694_0 .cascoon-like-wrapper {
                        border: 0 !important;
                    }
                    
                    .resize-sensor {
                        height: 20px !important;
                    }
                    
                    .cascoon-root .cascoon-form-title {
                        margin-top: 15px !important;
                    }
                    
                    .cascoon-root img {
                        display: none !important;
                    }
                    
                    .mewtwo-widget--whitelabel_ru .mewtwo-hotels-submit_button button {
                        background: #3CA84F !important;
                    }
                    
                    .resize-sensor {
                        display: none !important
                    }
                    
                    .cascoon.cascoon-2694.cascoon-2694_0 input[type="submit"],
                    .cascoon.cascoon-2694.cascoon-2694_0 button {
                        font-size: 17px !important;
                        text-transform: unset !important;
                        box-shadow: none !important;
                        background: #3CA84F !important;
                    }
                    
                    #powered_by_1498 {
                        width: 100% !important;
                        background: #fff !important;
                        text-align: center !important;
                    }
                    
                    .widget-block-tr iframe {}
                    
                    .mewtwo-widget--whitelabel_ru .mewtwo-flights-multi {
                        background: #fff !important;
                    }
                    
                    .mewtwo-widget--whitelabel_ru .mewtwo-flights-dates-depart-icons,
                    .mewtwo-widget--whitelabel_ru .mewtwo-flights-dates-return-icons {
                        background-image: url(data:image/svg+xml,<svg%20xmlns%3D\'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg\'%20viewBox%3D\'0%200%2015%2017\'><path%20fill%3D\'%23005DD9\'%20d%3D\'M0%205v10c0%201.1.9%202%202%202h11c1.1%200%202-.9%202-2V5H0zm5%2010H2v-2h3v2zm0-3H2v-2h3v2zm0-3H2V7h3v2zm4%206H6v-2h3v2zm0-3H6v-2h3v2zm0-3H6V7h3v2zm4%206h-3v-2h3v2zm0-3h-3v-2h3v2zm0-3h-3V7h3v2zM13%202h-1V1c0-.6-.4-1-1-1h-1c-.6%200-1%20.4-1%201v1H6V1c0-.6-.4-1-1-1H4c-.6%200-1%20.4-1%201v1H2C.9%202%200%202.9%200%204h15c0-1.1-.9-2-2-2z\'%2F><%2Fsvg>) !important;
                    }
                    
                    .mewtwo-widget--whitelabel_ru .mewtwo-hotels-dates-checkin-icons,
                    .mewtwo-widget--whitelabel_ru .mewtwo-hotels-dates-checkout-icons {
                        background-image: url(data:image/svg+xml,<svg%20xmlns%3D\'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg\'%20viewBox%3D\'0%200%2015%2017\'><path%20fill%3D\'%2300b1dd\'%20d%3D\'M0%205v10c0%201.1.9%202%202%202h11c1.1%200%202-.9%202-2V5H0zm5%2010H2v-2h3v2zm0-3H2v-2h3v2zm0-3H2V7h3v2zm4%206H6v-2h3v2zm0-3H6v-2h3v2zm0-3H6V7h3v2zm4%206h-3v-2h3v2zm0-3h-3v-2h3v2zm0-3h-3V7h3v2zM13%202h-1V1c0-.6-.4-1-1-1h-1c-.6%200-1%20.4-1%201v1H6V1c0-.6-.4-1-1-1H4c-.6%200-1%20.4-1%201v1H2C.9%202%200%202.9%200%204h15c0-1.1-.9-2-2-2z\'%2F><%2Fsvg>) !important;
                    }
                    
                    #rudr_instafeed div.slide {
                        display: inline-block;
                        width: 320px;
                        margin: 10px;
                        max-height: 320px;
                        min-height: 320px;
                        overflow: hidden;
                    }
                    
                  
                    
                    .widget-block-st iframe {
                        height: 920px !important;
                    }
                    
                    .widget-block-st iframe:nth-child(2) {
                        display: none !important;
                    }
                </style>





                <script src="https://jquery-plugins.net/FeedEk/FeedEk.min.js" type="text/javascript"></script>

                <script src="https://jquery-plugins.net/Scripts/prettify.js"></script>





                <li class="blockbot" style="display:none">
                    <script charset='utf-8' async src='//www.travelpayouts.com/bot_subscription/widget.js?marker=229849&host=hydra.aviasales.ru&departMonths=&tripDuration=&powered_by=true&origin=ODS&destination=BKK'></script>
                </li>



                <style>
                    /* стили виджета бота */
                    
                    .tp-btsbscriptn-widget .btsbscriptn-providers,
                    .tp-btsbscriptn-widget .btsbscriptn-providers_lists {
                        display: block;
                    }
                    
                    .tp-btsbscriptn-widget .btsbscriptn-providers a {
                        font-size: 11px!important;
                    }
                    
                    .tp-btsbscriptn-widget .btsbscriptn-header__additional {
                        font-size: 13px!important;
                        line-height: 1.2!important;
                        margin-bottom: 10px!important;
                    }
                    
                    .tp-btsbscriptn-widget .btsbscriptn-widget {
                        border-radius: 10px!important;
                        border: 0 !important;
                    }
                    
                    .TPWL-widget .widget-block-tur {
                        background: #fff !important;
                        padding: 30px 0 !important;
                        border-radius: 0px 0px 10px 10px !important;
                        height: 165px !important;
                        position: relative !important;
                    }
                    
                    .TPWL-widget .widget-block {
                        border-radius: 0px 0px 10px 10px !important;
                        padding: 0px 26px !important;
                        background: rgb(255, 255, 255) !important;
                    }
                    
                    .TPWL-widget .sob__tur.sob__all {
                        padding: 0 40px !important;
                    }
                    
                    .ps-nights.tt {
                        top: 15px !important;
                        position: relative !important;
                        left: 10px !important;
                        display: inline-block !important;
                    }
                    
                    .ps-pretext.tt {
                        padding-left: 10px !important;
                    }
                    
                    .ps-departures.tt {
                        display: inline-block !important;
                        margin-bottom: 10px !important;
                    }
                    
                    .sob__str.sob__all #powered_by_1497 {
                        display: block !important;
                    }
                </style>

            </div>
        </div>
        <style>
            .mewtwo-tabs-tabs_list__item span {
                display: block;
                width: 100%;
                height: 100%;
                padding-left: 30px !important;
                padding-right: 30px !important;
                line-height: 50px !important;
            }
            
            .mewtwo-widget .mewtwo-tabs-tabs_list__item>span {
                padding-left: 30px !important;
                padding-right: 30px !important;
            }
            
            .mewtwo-widget--ce85fdc1c95c1146e8c9aa7ed43fbe43 .mewtwo-tabs-tabs_list__item--hotels:before {
                display: none !important;
            }
            
            .mewtwo-widget--ce85fdc1c95c1146e8c9aa7ed43fbe43 .mewtwo-tabs-tabs_list__item.mewtwo-tabs-tabs_list__item--flights:before {
                display: none !important;
            }
            
            .wl__footer {
                padding: 15px 0 15px 0;
                border-top: 1px solid #CDD5E0;
                display: block;
                width: 100%;
                margin-top: 50px;
            }
            
            .TPWL-widget .mewtwo-widget .mewtwo-tabs {
                padding: 0 !important;
                width: 100%!important;
                background: #009ec7!important;
            }
            
            .wlf__copyright {
                font-size: 15px;
                font-family: 'Roboto';
                color: #AAA;
                font-weight: bold;
            }
            
            .wlf__links li a {
                color: #262626;
                font-size: 14px;
                text-decoration: none;
                font-weight: 500;
            }
        </style>

          </div>


@endsection