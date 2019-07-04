<nav>
    <div class="container">
    <div class="nav-wrapper">
      <a href="/" class="brand-logo"><img src="assets/img/Logotip_2.png" alt="" class="logo_main"></a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><img src="https://www.opportunityclinic.org/wp-content/uploads/2017/10/menu-icon.png" alt="" class="nav_burger"></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="/faq">FAQ</a></li>
        <li><a href="/fransh">Франшиза</a></li>
        <li><a href="/contact">Контакты</a></li>
        <li> <!-- Modal Trigger -->
  <a class="waves-effect waves-light btn modal-trigger" style="     background-color: #d1a500;   color: white;" href="#modal1">Служба поддержки</a>

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
    
  </div></li>
      </ul>
    </div>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
        <li><a href="/faq">FAQ</a></li>
        <li><a href="/fransh">Франшиза</a></li>
        <li><a href="/contact">Контакты</a></li>
  </ul>