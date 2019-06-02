@extends('layouts.master')

@section('content')

<div class="root">
    <header class="header"><div class="NavBar navbar hide-in-app"> <nav class="NavBar__Nav navbar-items"><div class="navbar-wrapper"><div class="navbar-wr"><div class="navbar-icon"><svg xmlns="http://www.w3.org/2000/svg" width="8" height="6" viewBox="0 0 8 6"><path fill="#FFF" fill-rule="evenodd" d="M4 6l4-6H0z" opacity=".5"></path></svg></div><a href="/ru/loyalty/" class="NavBar__Nav__Item navbar-item navbar-item-main">Обзор</a><a href="/ru/loyalty/app/" class="NavBar__Nav__Item navbar-item navbar-item-app">Мобильное приложение</a> <a href="/ru/loyalty/cards/" class="NavBar__Nav__Item navbar-item navbar-item-cards">Карта лояльности</a> <a href="/ru/loyalty/premium/" class="NavBar__Nav__Item navbar-item navbar-item-premium">Статус Премиум</a> <a href="/ru/loyalty/friends/" class="NavBar__Nav__Item navbar-item navbar-item-friends">Приведи друга</a> <a href="/ru/loyalty/bonuses/" class="NavBar__Nav__Item navbar-item navbar-item-bonuses">Трипкоины</a> <a href="/ru/loyalty/statuses/" class="NavBar__Nav__Item navbar-item navbar-item-statuses">Статусы</a> <a href="/ru/loyalty/rules/" class="NavBar__Nav__Item navbar-item navbar-item-rules">Правила программы лояльности</a><a href="/ru/loyalty/gifts/" class="NavBar__Nav__Item navbar-item navbar-item-gifts">Подарочные сертификаты</a> <a href="/ru/loyalty/travelexpert/" class="NavBar__Nav__Item navbar-item navbar-item-travelexpert">Тревел-эксперт</a><a href="/ru/loyalty/adventure/" class="NavBar__Nav__Item navbar-item navbar-item-adventure active">Авантюра</a><a href="/ru/loyalty/achievements/" class="NavBar__Nav__Item navbar-item navbar-item-achievements">Награды</a><a href="/ru/loyalty/promocode/" class="NavBar__Nav__Item navbar-item navbar-item-offers">Персональные предложения</a></div></div></nav> </div>
  <div class="NavBar navbar hide-in-app">

	<nav class="NavBar__Nav navbar-items">
		<div class="navbar-wrapper">
			 <div class="navbar-wr">
					<div class="navbar-icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="8" height="6" viewBox="0 0 8 6">
							<path fill="#FFF" fill-rule="evenodd" d="M4 6l4-6H0z" opacity=".5"/>
						</svg>
					</div>

					<a href="/ru/loyalty/travelexpert/" class="NavBar__Nav__Item navbar-item navbar-item-travelexpert">Тревел-эксперт</a>
					<a href="/ru/loyalty/adventure/" class="NavBar__Nav__Item navbar-item navbar-item-adventure">Авантюра</a>
				 	<a href="/ru/loyalty/achievements/" class="NavBar__Nav__Item navbar-item navbar-item-achievements">Награды</a>
				 	<a href="/ru/loyalty/promocode/" class="NavBar__Nav__Item navbar-item navbar-item-offers">Персональные предложения</a>
			 </div>
		</div>
	</nav>
</div>
  <div class="wrapper header__wrapper">
    <h1 class="header__title">
      Авантюра<br>от&nbsp;OneTwoTrip!
    </h1>
    <div class="header__subTitle">Приключение на&nbsp;3 дня, о&nbsp;месте которого вы&nbsp;узнаете накануне вылета</div>
    <a class="b-button header__button" href="#js-request">Полететь</a>
    <div class="header__faq"><a href="/ru/landings/loyalty/adventure/faq/"><span>?</span> FAQ</a></div>
  </div>
</header>
<section class="about">
  <div class="wrapper">
    <div class="about__container">
      <div class="about__block">
        <img class="about__image lazyload" src="https://www.onetwotrip.com/ru/ott-static/images/loyalty/adventure/about1.png" data-original="https://www.onetwotrip.com/ru/ott-static/images/loyalty/adventure/about1.png" style="display: block;">
        <div class="about__title">Мы&nbsp;отправим вас в&nbsp;один из&nbsp;48 интересных городов. Город выберем наугад.</div>
      </div>
      <div class="about__block">
        <img class="about__image about__image_size_small lazyload" src="https://www.onetwotrip.com/ru/ott-static/images/loyalty/adventure/about2.png" data-original="https://www.onetwotrip.com/ru/ott-static/images/loyalty/adventure/about2.png" style="display: block;">
        <div class="about__title">Путешествие на&nbsp;3 дня с&nbsp;перелетом, проживанием и&nbsp;инструкциями от&nbsp;<span class="no-wrap">тревел-эксперта</span>.</div>
      </div>
      <div class="about__block">
        <img class="about__image about__image_size_big lazyload" src="https://www.onetwotrip.com/ru/ott-static/images/loyalty/adventure/about3.png" data-original="https://www.onetwotrip.com/ru/ott-static/images/loyalty/adventure/about3.png" style="display: block;">
        <div class="about__title">Пришлем ваучер на&nbsp;отель, билеты и&nbsp;рекомендации по&nbsp;путешествию за&nbsp;48 часов до&nbsp;вылета.</div>
      </div>
    </div>
    <div class="about__text">
      <div class="about__wr">
        <span class="about__city">MOW</span>и&nbsp;<span class="about__city">LED</span>
        Прямой перелёт из&nbsp;Москвы или Санкт-Петербурга.
      </div>
      Если вы&nbsp;из&nbsp;другого города, в&nbsp;вашей компании больше двух авантюристов или авантюристок, или хочется приключений дольше, чем на&nbsp;два дня&nbsp;— напишите нам о&nbsp;своих пожеланиях на&nbsp;<a class="about__link" href="mailto:adventure@onetwotrip.com">adventure@onetwotrip.com</a>
    </div>
  </div>
</section>
<section class="price">
  <div class="wrapper price__wrapper">
    <div class="price__container">
      <div class="price__block">
        <div class="price__title"><span class="title__remark">от</span>20&nbsp;000 <span style="font-family: rub-arial-regular">Р</span></div>
        <div class="price__subTitle">на&nbsp;одного</div>
      </div>
      <div class="price__block">
        <div class="price__title"><span class="title__remark">от</span>35&nbsp;000 <span style="font-family: rub-arial-regular">Р</span></div>
        <div class="price__subTitle">на&nbsp;двоих</div>
      </div>
    </div>
    <div class="price__remark">Цена может меняться в&nbsp;зависимости от&nbsp;времени вылета, наличия визы и&nbsp;количества исключенных городов.</div>
    <div class="board">
        <div id="test"></div>
    </div>
  </div>
</section>
<section class="rules">
  <div class="wrapper wrapper--wide">
    <h2 class="title">Как отправиться в&nbsp;Авантюру</h2>
    <div class="rules__container">
      <div class="rules__block">
        <span class="rules__number">1</span>
        <div class="rules__text">Оставьте заявку. Выберите даты и&nbsp;исключите города, в&nbsp;которые не&nbsp;хотите лететь.</div>
      </div>
      <div class="rules__block">
        <span class="rules__number">2</span>
        <div class="rules__text">Заполните паспортные данные путешественников и&nbsp;оплатите Авантюру.</div>
      </div>
      <div class="rules__block">
        <div class="rules__number">3
          <div class="rules__container-svg">
            <img class="rules__svg lazyload" src="https://www.onetwotrip.com/ru/ott-static/images/loyalty/adventure/bag.png" data-original="https://www.onetwotrip.com/ru/ott-static/images/loyalty/adventure/bag.png" style="display: inline;">
          </div>
        </div>
        <div class="rules__text">За&nbsp;48 часов до&nbsp;вылета мы&nbsp;сообщим, в&nbsp;какой город вы&nbsp;отправитесь. Пришлем билеты, ваучер на&nbsp;отель и&nbsp;рекомендации по&nbsp;путешествию.</div>
      </div>
    </div>
  </div>
</section>
</div>

@endsection