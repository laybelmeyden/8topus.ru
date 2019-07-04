@extends('layouts.master')

@section('content')
<div class="parallax-head" style="background-image: url(assets/img/shutterstock_129063581.jpg);">
      <div class="container container_para">
      <div class="row">
      <p class="main_text_one">ВИЗЫ ОТ КОМПАНИИ 8TOPUS</p>
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
        <div class="main_nav_item" style="border-right: 1px solid white;">
        <p>Ж/Д И АВИАБИЛЕТЫ</p>
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
        <div class="main_nav_item" style="">
        <p>Аренда яхт</p>
        <i class="fas fa-ship fnt40"></i>
        </div>
        </a>
      </div>
      <div class="grid-container-2fr">
      <a href="/seven">
        <div class="main_nav_item" style="border-right: 1px solid white; color:#d1a500;">
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

</div>
<div class="container">
  <div class="row">
    <p class="p1_zag">Получить визу- легко! Вы экономите ВРЕМЯ.</p>

<p>Вам не надо разбираться в тонкостях процесса, узнавать куда пойти, что сделать, какие документы собрать, и т.д. Вам даже выходить из дома не надо!<br><br>

Заполните ЗАЯВКУ на нашем сайте и через 1-2 дня документы для визы готовы. ГАРАНТИЯ РЕЗУЛЬТАТА.<br><br>

У нас уже сотни довольных клиентов.<br><br>

Мы настолько уверены в качестве наших услуг, что гарантируем вам возврат всех оплаченных нам денег, если вдруг у вас будет отказ в визе.<br><br>

Вы бережете НЕРВЫ.<br><br>

Вам не надо сходить с ума, переживать, как не допустить ошибки, как не забыть какую-то важную деталь, как ответить на этот странный вопрос анкеты и т.д.<br><br>

Доверьте все профессионалам. Заполните заявку, Наш специалист свяжется с вами</p>
<div style="    display: flex;
    align-items: center;
    justify-content: center;"><div class="t5800" style="    width: 70px;">
       <svg class="t580" style="fill:#000000;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 180"><path d="M54.1 109c-.8 0-1.6-.4-2-1.1-.8-1.1-.5-2.7.6-3.5 1.3-.9 6.8-4 11.6-6.6-15.9-1.3-29.2-8.3-38.5-20.2C8.9 56 8.5 24.1 13.2 3.4c.3-1.3 1.7-2.2 3-1.9 1.3.3 2.2 1.7 1.9 3-4.5 19.6-4.2 49.8 11.6 70 9 11.5 21.5 17.7 37.2 18.4l-1.8-2.3c-1.4-1.7-2.7-3.4-4.1-5.1-.7-.9-1.5-1.9-2.3-2.9-.9-1.1-.7-2.6.4-3.5 1.1-.9 2.6-.7 3.5.4 0 0 0 .1.1.1l6.4 7.9c.5.5.9 1.1 1.4 1.7 1.5 1.8 3.1 3.6 4.4 5.6 0 .1.1.1.1.2.1.3.2.5.3.8v.6c0 .2-.1.4-.2.6-.1.1-.1.3-.2.4-.1.2-.3.4-.5.6-.1.1-.3.2-.5.3-.1 0-.1.1-.2.1-1.2.6-16 8.6-18.1 10-.5.5-1 .6-1.5.6z"></path></svg> 
      </div>
<a class="waves-effect waves-light btn modal-trigger pulse" style="     background-color: #d1a500;   color: white; width:80%;" href="#modal2">Заполнить заявку</a>

  <!-- Modal Structure -->
  <div id="modal2" class="modal">
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
    <div class="col s12" style="text-align:right; padding:40px;">
    <button class="btn" type="submit">Отправить</button>
    </div>
    </form>
    </div>
  </div>
</div>
</div>
</div>



@endsection