@extends('layouts.master')

@section('content')
<div class="parallax-head" style="background-image: url(https://psv4.userapi.com/c848136/u3216951/docs/d2/fec6c3673c56/shutterstock_129063581.jpg?extra=NklAkF2FYcHY386YqkJxJxZqjzjZqKaw6wFPJHg5RlIXIdfPrAuGTggTzy817Z3xvA6XuYJBYzeB2QIhel5XegQRN5CwULzjqwuEQVplYbZNvUWD6656jlOWlNqRC3pm-piiz4kXjyP6Wk8W3IpklHY);">
      <div class="container container_para">
      <div class="row">
      <p class="main_text_one">ВИЗЫ ОТ КОМПАНИИ 8TOPUS</p> 
      <div class="grid-container" style="border-bottom:1px solid white">
      <a href="/one">
        <div class="main_nav_item" style="border-right: 1px solid white;">
          <p>Отели</p>
          <i class="fas fa-hotel fnt40"></i>
        </div>
        </a>
        <a href="/two">
        <div class="main_nav_item" style="border-right: 1px solid white;">
        <p>Прокат авто</p>
        <i class="fas fa-car fnt40"></i>
        </div>
        </a>
        <a href="/three">
        <div class="main_nav_item" style="border-right: 1px solid white;">
        <p>Экскурсии</p>
        <i class="fas fa-bus fnt40"></i>
        </div>
        </a>
        <a href="/four">
        <div class="main_nav_item" style="border-right: 1px solid white;">
        <p>Аренда яхт</p>
        <i class="fas fa-ship fnt40"></i>
        </div>
        </a>
        <a href="/five">
        <div class="main_nav_item" style="">
        <p>Ж/Д И АВИАБИЛЕТЫ</p>
        <i class="fas fa-train fnt40"></i>
        </div>
        </a>
      </div>
      <div class="grid-container-2fr">
      <a href="/six">
        <div class="main_nav_item" style="border-right: 1px solid white;">
        <p>Поиск попутчиков</p>
        <i class="fas fa-users fnt40"></i>
        </div>
        </a>
        <a href="/seven">
        <div class="main_nav_item" style="border-right: 1px solid white; color: #d1a500;">
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
        <a href="/eat2">
        <div class="main_nav_item">
        <p>Туры</p>
        <i class="fas fa-map-marked-alt fnt40"></i>
        </div>
        </a>
      </div>
      
      </div>
      </div>
</div>
<script src="http://c18.travelpayouts.com/content?promo_id=1492&shmarker=219987" charset="utf-8" async></script>
<div class="container">

</div>
<div class="container">
  <div class="row">
    <p>ВИЗЫ Получить визу- легко! Вы экономите ВРЕМЯ.<br><br>

Вам не надо разбираться в тонкостях процесса, узнавать куда пойти, что сделать, какие документы собрать, и т.д. Вам даже выходить из дома не надо!<br><br>

Заполните ЗАЯВКУ на нашем сайте и через 1-2 дня документы для визы готовы. ГАРАНТИЯ РЕЗУЛЬТАТА.<br><br>

У нас уже сотни довольных клиентов.<br><br>

Мы настолько уверены в качестве наших услуг, что гарантируем вам возврат всех оплаченных нам денег, если вдруг у вас будет отказ в визе.<br><br>

Вы бережете НЕРВЫ.<br><br>

Вам не надо сходить с ума, переживать, как не допустить ошибки, как не забыть какую-то важную деталь, как ответить на этот странный вопрос анкеты и т.д.<br><br>

Доверьте все профессионалам. Заполните заявку, Наш специалист свяжется с вами</p>
<div style="    display: flex;
    align-items: center;
    justify-content: center;">
<a class="waves-effect waves-light btn modal-trigger pulse" style="     background-color: #d1a500;   color: white; width:80%;" href="#modal1">Написать нам</a>

  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <p style="font-size:18px; text-align:center; color:black;">Форма обратной связи</p>
      <form action="/mainmess" method="POST">
      {{ csrf_field() }}
    <div class="col s12">
      <input type="text" name="name_text" placeholder="Введите Ваше имя" required>
    </div>
    <br>
    <div class="col s12">
      <input type="email" name="email" placeholder="Введите Вашу почту" required>
    </div>
    <br>
    <div class="col s12">
      <textarea name="" id="" cols="30" rows="10" name="textarea" placeholder="Введите текст Вашего обращения" required></textarea>
    </div>
    <div class="col s12" style="text-align:right;">
    <button class="btn" type="submit">Отправить</button>
    </div>
    </form>
    </div>
  </div>
</div>
</div>
</div>



@endsection