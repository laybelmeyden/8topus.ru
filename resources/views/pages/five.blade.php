@extends('layouts.master')

@section('content')
<style>

.tp_powered_by{
  opacity:0;
}
.tutu_widget .tutu_station_field, .tutu_widget .tutu_date_field{
  height:55px;
}
.tutu_widget .tutu_arrow__button{
  width:100%;
}
</style>
<div class="parallax-head" style="background-image: url(assets/img/shutterstock_117016681.jpg); background-position: 57%;" >
      <div class="container container_para">
      <div class="row">
      <p class="main_text_one">Ж/Д И АВИАБИЛЕТЫ ОТ КОМПАНИИ 8TOPUS</p>
      <div class="grid-container" style="border-bottom:1px solid white">
      <a href="/eat2">
        <div class="main_nav_item" style="border-right: 1px solid white;">
        <p>Туры</p>
        <i class="fas fa-map-marked-alt fnt40"></i>
        </div>
        </a>
      <a href="/one">
        <div class="main_nav_item" style="border-right: 1px solid white;">
          <p>Отели</p>
          <i class="fas fa-hotel fnt40"></i>
        </div>
        </a>
        <a href="/five">
        <div class="main_nav_item" style="border-right: 1px solid white; color:#d1a500;">
        <p>АВИАБИЛЕТЫ И Ж/Д</p>
        <i class="fas fa-train fnt40"></i>
        </div>
        </a>
        <a href="/two">
        <div class="main_nav_item" style="border-right: 1px solid white;">
        <p>Прокат авто</p>
        <i class="fas fa-car fnt40"></i>
        </div>
        </a>
        <a href="/four">
        <div class="main_nav_item">
        <p>Аренда яхт</p>
        <i class="fas fa-ship fnt40"></i>
        </div>
        </a>
      </div>
      <div class="grid-container-2fr">
      <a href="/seven">
        <div class="main_nav_item" style="border-right: 1px solid white;">
        <p>Визы</p>
        <i class="fas fa-id-card fnt40"></i>
        </div>
        </a>
        <a href="/eat">
        <div class="main_nav_item" style="border-right: 1px solid white;">
        <p>Круизы</p>
        <i class="fas fa-anchor fnt40"></i>
        </div>
        </a>
        <a href="/three">
        <div class="main_nav_item" style="border-right: 1px solid white;">
        <p>Экскурсии</p>
        <i class="fas fa-bus fnt40"></i>
        </div>
        </a>
        <a href="/six">
        <div class="main_nav_item">
        <p>Поиск попутчиков</p>
        <i class="fas fa-users fnt40"></i>
        </div>
        </a>
      </div>
      </div>
      </div>
</div>
<div class="container">
  <div class="row">
    <p class="p1_zag">На сайте 8TOPUS покупают онлайн ж/д билеты, авиабилеты, билеты на автобусы.</p>
    <p>
      Пользователь может заказать ж/д билет на один из 3673 поездов по России и странам СНГ. 
      С помощью фильтров по типу вагона, времени отправления, цене, рейтингу поезда выбрать подходящий ж/д билет намного легче и быстрее. <br><br>
      Сотрудничаем с 286 ведущими авиакомпаниями. Выбирать авиабилет удобно с 
      помощью фильтров и формы поиска. Заботливая собственная служба поддержки клиентов работает 24/7. 
      Разберемся и поможем в любой ситуации. <br><br>
      1573 автобусных перевозчика уже продают свои билеты на 8TOPUS. А благодаря 10 тысячам отзывов пользователь быстро находит комфортный автобус по своему маршруту. 
    </p>
  </div>
</div>
<section style="
display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    text-align: center;
    text-align: -webkit-center;">
<div class="container">

<script src="//c45.travelpayouts.com/content?promo_id=1356&shmarker=219987" charset="utf-8" async></script>
<script charset="utf-8" src="//www.travelpayouts.com/widgets/ce85fdc1c95c1146e8c9aa7ed43fbe43.js?v=1761" async></script>
</div>
</section>
<div class="container">
  <div class="row">
    <p>
    Будь в курсе изменения цен!

Цены на авиабилеты часто изменяются, подпишись скорее!
    </p>
  </div>
</div>
<section style="
display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    text-align: center;
    text-align: -webkit-center;
">
<div class="container">
<div>
<script charset="utf-8" async src="//www.travelpayouts.com/subscription_widget/widget.js?width=500px&backgroundColor=%2300b1dd&marker=219987&host=hydra.aviasales.ru&originIata=SVX&originName=%D0%95%D0%BA%D0%B0%D1%82%D0%B5%D1%80%D0%B8%D0%BD%D0%B1%D1%83%D1%80%D0%B3&destinationIata=BKK&destinationName=%D0%91%D0%B0%D0%BD%D0%B3%D0%BA%D0%BE%D0%BA&powered_by=true"></script>
</div>
</div>
</section>

@endsection