<!-- шапка сайта -->

<div class="header__block">

<div class="hw__center_logo">

    <div class="hw__center_logo_bg">
        <a href="/" title=""><img style="
width: 65px;
" src="http://novrek.ru/pics/logo.png" alt="" /></a>
    </div>

</div>

<div class="header-burger">

    <span></span>

    <span></span>

    <span></span>

</div>

<div class="head__wrapp">

    <!-- меню сайта -->

    <div class="hw__left_menu">

        <a href="/faq" class="">FAQ</a>

        <a href="/fransh" class="">ПАРТНЁРАМ</a>


    </div>



    <div class="hw__right_menu">


        <a href="/contact" title="" class="">КОНТАКТЫ</a>
        <a class="modal-trigger" href="#modal1">СЛУЖБА ПОДДЕРЖКИ</a>

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
<textarea name="textarea" cols="30" rows="10" placeholder="Введите текст Вашего обращения" required></textarea>
</div>
<div class="col s12" style="text-align:right;">
<button class="btn" type="submit">Отправить</button>
</div>
</form>
</div>

</div>


    </div>



    <div class="head__bottom">

        <ul>

            <li><a href="https://vk.com/doc178674282_496230004?hash=5502d77051415d390b&dl=4662f96a99750f909a" title="">ПОЛИТИКА КОНФИДЕНЦИАЛЬНОСТИ</a></li>

            <li><a href="https://vk.com/doc142699939_509834188?hash=7f4b368776351990cc&dl=059a684e1ad1cb0f82" title="">Оферта</a></li>

            <li><a href="#" title="">Обратная связь</a></li>

        </ul>

    </div>

</div>

</div>
