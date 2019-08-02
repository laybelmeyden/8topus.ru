@extends('layouts.master')

@section('content')
<div class="parallax-head" style="background-image: url(assets/img/otdykh_u_basseyna_-_relax_by_the_pool_4368__215_2912.jpg);     background-position: 69%;">
      <div class="container container_para">
      <div class="row">
      <p class="main_text_one">ОТЕЛИ ОТ КОМПАНИИ 8TOPUS</p>
      <div class="grid-container" style="border-bottom:1px solid white">
      <a href="/eat2">
        <div class="main_nav_item" style="border-right: 1px solid white;">
        <p>Туры</p>
        <i class="fas fa-map-marked-alt fnt40"></i>
        </div>
        </a>
      <a href="/one">
        <div class="main_nav_item" style="border-right: 1px solid white; color:#d1a500;">
          <p>Отели</p>
          <i class="fas fa-hotel fnt40"></i>
        </div>
        </a>
        <a href="/five">
        <div class="main_nav_item" style="border-right: 1px solid white; ">
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

<section>
<div class="container">
<div class="row">
<p class="p1_zag">8TOPUS самый популярный в мире интернет ресурс по бронированию отелей, гарантирует лучшие цены на любой тип недвижимости, начиная от кемпингов и заканчивая роскошными 5-звездочными отелями.
</p>
<p>
Преимущества работы с 8TOPUS:<br><br>

- Уникальные прямые долгосрочные отношения с более чем 900 000+ отелей;<br>

- Нет комиссий за бронирование, что обеспечивает высокую конверсию;<br>

- Гарантия лучшей цены;<br>

- Многоязычный контент (40 языков) и конвертация валют;<br>

- № 1 туристический сайт по удовлетворенности клиентов<br>

- Гарантированные платежи по всем бронированиям;<br>

- Процесс резервирования в реальном времени с подтверждением на экране и по электронной почте;<br>

- 87 000 000+ проверенных отзывов от реальных гостей, чтобы увеличить лояльность клиентов и конверсию.</p>
<ins class="bookingaff" data-aid="1811302" data-target_aid="1811302" data-prod="nsb" data-width="100%" data-height="auto" data-lang="ru" data-df_num_properties="3">

<!-- Anything inside will go away once widget is loaded. -->

<a href="//www.booking.com?aid=1811302">Booking.com</a>

</ins>

<script type="text/javascript">

(function(d, sc, u) {

var s = d.createElement(sc), p = d.getElementsByTagName(sc)[0];

s.type = 'text/javascript';

s.async = true;

s.src = u + '?v=' + (+new Date());

p.parentNode.insertBefore(s,p);

})(document, 'script', '//aff.bstatic.com/static/affiliate_base/js/flexiproduct.js');

</script>
</div>
</div>
</section>

                                    <form action="https://h.albato.ru/h/38/asKnBuf81YOFbSfMf35sVeu0hPWmmY9n1SDPcLWJQSY%253D" method="POST">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Ваше имя</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="name_text" aria-describedby="emailHelp" placeholder="Введите Ваше имя" required>
                                        <small id="emailHelp" class="form-text text-muted">Вы можете ввести любое имя</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Ваша почта</label>
                                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Введите Ваш email" required>
                                        <small id="emailHelp" class="form-text text-muted">Обязательно укажите вашу настоящую почту</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1" >Введите текст Вашего обращения</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="textarea"></textarea>
                                    </div>
                                    <div class="col s12" style="text-align:right;">
                                    <button class="btn" type="submit">Отправить</button>
                                    </div>
                                    </form>
                                    ----------------------
                                    <form id="contactform" method="POST" class="validateform">
    {{ csrf_field() }}
 
    <div id="sendmessage">
        Ваше сообщение отправлено!
    </div>
    <div id="senderror">
        При отправке сообщения произошла ошибка. Продублируйте его, пожалуйста, на почту администратора <span>{{ env('MAIL_ADMIN_EVENTSOLO') }}</span>
    </div>
    <div class="row">
        <div class="col-lg-4 field">
            <input type="text" name="name" placeholder="* Введите ваше имя" required />
        </div>
        <div class="col-lg-4 field">
            <input type="email" name="email" placeholder="* Введите ваш email" required />
        </div>
        <div class="col-lg-4 field">
            <input type="text" name="subject" placeholder="* Введите тему сообщения" required />
        </div>
        <div class="col-lg-12 margintop10 field">
            <textarea rows="12" name="message" class="input-block-level" placeholder="* Ваше сообщение..." required></textarea>
            <p>
                <button class="btn btn-theme margintop10 pull-left" type="submit">Отправить</button>
                <span class="pull-right margintop20">* Заполните, пожалуйста, все обязательные поля!</span>
            </p>
        </div>
    </div>
</form>
<script>
$(document).ready(function () {
    $('#contactform').on('submit', function (e) {
        e.preventDefault();
         
        $.ajax({
            type: 'POST',
            url: 'https://h.albato.ru/h/38/asKnBuf81YOFbSfMf35sVeu0hPWmmY9n1SDPcLWJQSY%253D',
            data: $('#contactform').serialize(),
            success: function (data) {
                if (data.result) {
                    $('#senderror').hide();
                    $('#sendmessage').show();
                } else {
                    $('#senderror').show();
                    $('#sendmessage').hide();
                }
            },
            error: function () {
                $('#senderror').show();
                $('#sendmessage').hide();
            }
        });
    });
});
</script>
@endsection