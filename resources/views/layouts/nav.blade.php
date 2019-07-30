<header class="header scrolled">
<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
						<div class="logo_container">
							<div class="logo"><a href="/"><img src="assets/img/Logotip_2.png" alt="" style="width: 30px;"><span style="color:#d1a500;">8</span>TOP.US</a></div>
						</div>
						<div class="main_nav_container ml-auto">
							<ul class="main_nav_list">
								<li class="main_nav_item"><a href="/faq">FAQ</a></li>
								<li class="main_nav_item"><a href="/fransh">Парнерам</a></li>
                                <li class="main_nav_item"><a href="/contact">Контакты</a></li>
                                <li class="main_nav_item"><a data-toggle="modal" data-target="#exampleModal" style="color:white;">СЛУЖБА ПОДДЕРЖКИ</a></li>
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Форма обратной связи</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    <form action="/mainmess" method="POST">
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
                                    </div>
                                    </div>
                                </div>
                                </div>
							</ul>
						</div>

						<div class="hamburger">
							<i class="fa fa-bars trans_200"></i>
						</div>
					</div>
				</div>
			</div>	
        </nav>
</header>
<div class="menu trans_500">
		<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
			<div class="menu_close_container"><div class="menu_close"></div></div>
			<div class="logo menu_logo"><a href="#"><img src="images/logo.png" alt=""></a></div>
			<ul>
				<li class="menu_item"><a href="/faq">FAQ</a></li>
				<li class="menu_item"><a href="/fransh">Парнерам</a></li>
				<li class="menu_item"><a href="/contact">Контакты</a></li>
			</ul>
		</div>
	</div>

