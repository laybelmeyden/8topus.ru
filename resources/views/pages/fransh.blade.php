@extends('layouts.master')

@section('content')

<section class="service-home pt-115 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col l12 md-space">
                        <div class="row">
                            <div class="col m12">
                                <div class="service-details mb-40">
                                    <h3 style="padding-top: 160px;">Сеть туристических агентств 8TOPUS предлагает Вам стать партнерами и начать прибыльный бизнес вместе с нами под брендом 8TOPUS.</h3>
                                </div>
                                <div class="row">
                                <div class="col-lg-12 col-md-12">
                                        <div class="s-details-img mb-30">
                                            <img src="assets/img/544.jpg" class="img_frans_main" alt="">
                                        </div>
                               
                                        <div class="service-details mb-40">
                                            <p style="margin-top: 0;">Получать доход более 200 000 рублей в месяц автоматически – без личного участия!
<br>
Без офиса! Без сотрудников! Зарабатывай и путешествуй сам!<br>
Мы рады представить вашему вниманию готовое партнерское предложение компании 8top.us - возможность стать владельцем собственной IT-компании в сфере туризма, и
<br>
Долгое время мы на своем личном опыте изучали самые выгодные партнерские программы в сфере туризма, пробовали, работали с нашими туристами и наконец смогли подготовить полностью готовое it – решение для наших партнеров!
<br>
Это уникальное предложение – пока другие продают непонятные курсы – мы предлагаем готовое к работе полностью автоматизированное решение!
<br>
В рамках настоящего инновационного предложения мы разработали специально для вас ваш личный веб-сайт для бронирования туристических услуг, авиабилетов и многого другого – по аналогии с нашим сайтом 8top.us
</p>
<p style="text-align:center;">
Мы встраиваем в структуру вашего сайта автоматизированные виджеты соответствующих поставщиков и передаем вам доступы для вывода денежных средств. ВСЕ УЖЕ НАСТРОЕНО!
</p>
<p>
В зависимости от поставщика вы получаете комиссию с каждой продажи 3-10%, более того, каждый клиент, который просматривал предложения соответствующего поставщика через ваш сайт помечается специальным маркером на срок от 1 месяца до полугода и с каждой его покупки вы так же получите комиссию.
<br>
Вся статистика будет видна в онлайн режиме – можно работать из любой точки мира!
<br>
Мы передаем вам полностью готовое решение, все подключаем и размещаем на субдомене.
</p>
<div class="s-details-img mb-30">
                                            <img src="assets/img/544.jpg" class="img_frans_main_2" alt="">
                                        </div>
<p>С момента оплаты вступительного взноса до начала работы вашей СОБСТВЕННОЙ

It-компании в сфере туризма пройдет всего 2 недели, в зависимости от выбранного способа привлечения аудитории в среднем через 5-6 месяцев партнер выходит на заработок от 200 000 рублей в месяц!!!
<br>
Вам останется только определиться со стратегией рекламы – это может быть реклама у блоггеров в вашем регионе, ваш собственный блог, таргетированная реклама или реклама в СМИ – мы проконсультируем вас по всем этим вопросам и подключим к партнерскому чату!
<br>
Для того чтобы уже через месяц начать зарабатывать деньги в своей собственной
<br>
it – компании Вам необходимо всего лишь подать заявку – вам на почту придет письмо с партнерским соглашением и ссылкой для оплаты.</p>
<p style="text-align:center;">ВНИМАНИЕ! Только первым 10 партнерам мы установили сниженный партнерский взнос:</p>
<div style="text-align:center;"><span style="    text-decoration: line-through; color:black;">350 000 рублей</span>
<br>
<Span style="color:black;"><b>149 999 рублей!</b></Span></div>
<p>
За эти деньги вы получите полноценную собственную IT –компанию и сможете зарабатывать деньги на путешествиях и стать частью нашего сообщества – предпринимателей в онлайн туризме! Взнос единоразовый!!!
<br>
А еще - чат поддержки 24/7, партнерское сообщество, совместные путешествия и многое другое!
<br>
Не нужен офис! Не нужны сотрудники! Не нужно регистрировать ООО!
<br>
Из всех расходов – только оплата техподдержки раз в год – 20 тр!
<br>
Мечтали стать Тревел блогером – думать только о том в какую новую страну отправиться на следующей неделе?
<br>
Присоединяйтесь!
</p>
<div class="col-md-12 text-center">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1" style="
    background: linear-gradient(to right, #fa9e1b, #8d4fff, #fa9e1b);    border-radius: 33px;
    height: 50px;
    border: 0px;
    cursor: pointer;
    margin-bottom:20px;
    width: 300px;
    text-transform: uppercase;">
  Узнать больше
</button>

</div>
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Франшиза</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    <form action="/mainmess2" method="POST">
                                    {{ csrf_field() }}
                                    <div class="form-group" style="display:none;">
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Введите Ваше имя" value="email@email.ru">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Ваше имя</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="name_text" aria-describedby="emailHelp" placeholder="Введите Ваше имя" required>
                                        <small id="emailHelp" class="form-text text-muted">Вы можете ввести любое имя</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Ваш город</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="city" aria-describedby="emailHelp" placeholder="Введите город вашего проживания" required>
                                        <small id="emailHelp" class="form-text text-muted">Введите город вашего проживания</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Ваш телефон</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="phone" aria-describedby="emailHelp" placeholder="Введите ваш номер телефона" required>
                                        <small id="emailHelp" class="form-text text-muted">Введите ваш номер телефона</small>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @endsection