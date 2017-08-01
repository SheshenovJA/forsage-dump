
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Forsage Auto</title>
		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="generator" content="Codeply">
		<meta name="language" content="Russian">
		<meta http-equiv="content-language" content="ru">
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
		<link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.1/animate.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
		<link rel="stylesheet" href="style.css" />
	</head>

	<body>
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand page-scroll" href="#first"><img id="logo-text" src="img/logo-text.png" alt="Forsage Auto"></a>
				</div>
				<div class="collapse navbar-collapse" id="bs-navbar">
					<ul class="nav navbar-nav navbar-right text-center list-inline">
						<li><a class="page-scroll" id="lng-sw" data-toggle="modal" title="" href="../index.php">UA</a></li>
						<li><a class="page-scroll" id="lng-sw" data-toggle="modal" title="" href="#">RU</a></li>
					</ul>
					<ul class="list-unstyled list-inline text-center">
						<li><img class="operator-ico" src="ico/ks3.png" alt="kyivstar"/><a href="tel:+380675073833">+380 (‎67) 507 38 33</a></li>
						<li><img class="operator-ico" src="ico/vf2.png" alt="vodaphone"/><a href="tel:+380504059699">+380 (50) 405 96 99</a></li>
						<li><img class="operator-ico" src="ico/lc.png" alt="lifecell"/><a href="tel:+380735073833">+380 (73) 507 38 33</a></li>
					</ul>
					<div>
						<ul class="nav navbar-nav">
							<li><a class="page-scroll" href="#one">О нас</a></li>
							<li><a class="page-scroll" href="#two">Заказать</a></li>
							<li><a class="page-scroll" href="#three">Доставка</a></li>
							<li><a class="page-scroll" href="#four">Наши преимущества</a></li>
							<li><a class="page-scroll" href="#last">Контакты</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li><a class="page-scroll" data-toggle="modal" title="" href="#aboutModal"><i class="ion-log-in"></i> Вхід</a></li>
						</ul>
					</div>

				</div>
			</div>
		</nav>

	<header id="first">
    	<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="5000" id="bs-carousel">
    		<!-- Overlay -->
    		<div class="overlay"></div>
    		<!-- Indicators -->
    		<ol class="carousel-indicators">
    			<li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
    			<li data-target="#bs-carousel" data-slide-to="1"></li>
    			<!--li data-target="#bs-carousel" data-slide-to="1"></li-->
    		</ol>
    		<!-- Wrapper for slides -->
    		<div class="carousel-inner">
					<a class="left carousel-control" href="#bs-carousel" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#bs-carousel" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
    			<div class="item slides active">
    				<div class="slide-1"></div>
    				<div class="hero">
    					<hgroup>
    						<h1>Автозапчасти во Львовe и Украине</h1>
    						<h2>Подберем, проконсультируем, привезем!</h2>
    					</hgroup>
    					<a href="#two"><button class="btn btn-hero btn-xl page-scroll" role="button">Поехали!</button></a>
    				</div>
    			</div>
    		<div class="item slides">
    			<div class="slide-2"></div>
    			<div class="hero">
    				<hgroup>
    					<h2>Бесплатная доставка по<i class="icon-md ion-android-pin"></i> Львову</h3>
    					<h2>при заказе от 3000 грн</h3>
    				</hgroup>
    				<a href="#three"><button class="btn btn-hero btn-xl page-scroll" role="button">Условия и сроки доставки</button></a>
    			</div>
    		</div>
    		<!--3d slide -->
    		<!--div class="item slides">
    			<div class="slide-3"></div>
    			<div class="hero">
    				<hgroup>
    					<h1>We are amazing</h1>
    					<h3>Get start your next awesome project</h3>
    				</hgroup>
    				<button class="btn btn-hero btn-lg" role="button">See all features</button>
    			</div>
    		</div-->
    	</div>
    </header>

    <section id="one">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-12 text-center">
    				<h2 class="margin-top-0 text-primary wow fadeInRight">О нас</h2>
    				<hr class="primary">
    				<p>Мы продаем автозапчасти во Львове и Украине. Все очень быстро и просто.</p>
    			</div>
    		</div>
    	</div>
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-4 col-md-4 text-center">
    				<div class="feature">
    					<i class="icon-lg ion-android-create wow fadeIn" data-wow-delay=".3s"></i>
    					<h3 class="header-muted">Заполняете форму</h3>
    					<p class="text-muted">Заполните форму заказа, указав необходимую информацию</p>
    					<br />
    					<a href="#two" class="btn btn-primary btn-xl page-scroll">Перейти к форме</a>
    				</div>
    			</div>
    			<div class="col-lg-4 col-md-4 text-center">
    				<div class="feature">
    					<i class="icon-lg ion-android-call wow fadeInUp" data-wow-delay=".2s"></i>
    					<h3 class="header-muted">Ждите звонка</h3>
    					<p class="text-muted">Через 5 минут с Вами свяжеться менеджер</p>
    					<br />
    					<a href="#last" class="btn btn-primary btn-xl page-scroll">Просмотреть контакты</a>
    				</div>
    			</div>
    			<div class="col-lg-4 col-md-4 text-center">
    				<div class="feature">
    					<i class="icon-lg ion-android-send wow fadeIn" data-wow-delay=".3s"></i>
    					<h3 class="header-muted">Ожидайте курьера</h3>
    					<p class="text-muted">Если товар есть в наличии - доставка уже сегодня!</p>
    					<br />
    					<a href="#three" class="btn btn-primary btn-xl page-scroll">Условия доставки</a>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

	<section id="two">
		<div class="container">
			<div class="row">
				<div class="col-md-7 col-md-offset-3 text-center">
					<h2 class="text-primary wow fadeInRight">Найдем любую необходимую деталь</h2>
					<hr class="dark">
					<p class="dark">Все, что для этого нужно - это заполнить форму ниже. Для более точного поиска запчасти, воспользуйтесь <a href="https://www.ilcats.ru/">оригинальной базой</a> затем введите код детали и другую инфромацию в поле "Описание".</p>
					<form role="form" id="contactForm" data-toggle="validator" class="shake">
						<div class="row">
							<div class="form-group col-sm-6">
								<label for="name" class="h4">Имя</label>
								<input type="text" class="form-control" id="name" placeholder="Введіть ім'я" required >
								<div class="help-block with-errors"></div>
							</div>
							<div class="form-group col-sm-6">
								<label for="phone" class="h4">Телефон</label>
								<input type="tel" pattern="(\+?\d[- .]*){7,13}" class="form-control" id="phone" placeholder="+380671234567" required>
								<div class="help-block with-errors"></div>
							</div>
							<div class="form-group col-sm-12">
								<label for="email" class="h4">Email</label>
								<input type="email" class="form-control" id="email" placeholder="Ваш email" required>
								<div class="help-block with-errors"></div>
							</div>
						</div>
						<div class="form-group">
							<label for="message" class="h4 ">Описание запчасти</label>
							<textarea id="message" class="form-control" rows="5" placeholder="Описание" required></textarea>
							<div class="help-block with-errors"></div>
						</div>
						<button type="submit" id="form-submit" class="btn btn-order btn-xl pagination-centered">Заказать</button>
						<div id="msgSubmit" class="h3 text-center hidden"></div>
						<div class="clearfix"></div>
					</form>
				</div>
			</div>
		</div>
	</section>

	<section class="container-fluid" id="three">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="margin-top-0 text-primary">Условия и сроки</h2>
					<hr>
					<div>
						<img src="ico/delivery-truck-and-clock-light.png" alt="delivery-truck-and-clock">
					</div>
					<br>
					<p>Доставка запчастей осуществляется в зависимости от времени заказа:</p>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-5">
					<div class="media wow fadeIn">
						<div class="text-center">
							<i style="color: #f15f29" class="icon-md ion-ios-location-outline"></i>
						</div>
						<h3 class="text-center">по Львову <span style="color: #f15f23;">*</span></h3>
					</div>
					<hr>
					<div class="media wow fadeInRight">
						<h3>до 17:00</h3>
						<div class="media-body media-middle">
							<p> доставка <span style="color: #f15f23;">в день</span> заказа</p>
						</div>
						<div class="media-right">
							<img src="ico/time_light-01.png" alt="before 17">
						</div>
					</div>
					<hr>
					<div class="media wow fadeInRight">
						<h3>после 17:00</h3>
						<div class="media-body media-middle">
							<p>доставка на следующий рабочий день</p>
						</div>
						<div class="media-right">
							<img src="ico/time_light-02.png" alt="after 17">
						</div>
					</div>
    			</div>
    			<div class="col-lg-2 col-md-2 text-center">
    			</div>
    			<div class="col-lg-5 col-md-5">
					<div class="media wow fadeIn">
						<div class="text-center">
							<i style="color: #f15f29" class="icon-md ion-ios-location-outline"></i>
						</div>
						<h3 class="text-center">по Украине</h3>
					</div>
					<hr>
					<div class="media wow fadeInRight">
						<h3>до 14:00</h3>
						<div class="media-body media-middle">
							<p>доставка <span style="color: #f15f23;">в день</span> заказа</p>
						</div>
						<div class="media-right">
							<img src="ico/time_light-01.png" alt="before 14">
						</div>
					</div>
					<hr>
					<div class="media wow fadeInRight">
						<h3>после 14:00</h3>
						<div class="media-body media-middle">
							<p> оставка на следующий рабочий день</p>
						</div>
						<div class="media-right">
							<img src="ico/time_light-02.png" alt="after 14">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container text-center">
			<hr>
			<p>Доставка осуществляется курьером по согласованному с менеджером адресу. Стоимость: 75 грн.</p>
			<p><span style="color: #f15f23;">*</span>  при заказе по Львову на сумму больше (или равной) 3000 грн - доставка за наш счет.</p>
		</div>
	</section>

	<section class="container-fluid" id="four">
		<div class="row">
			<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
				<h2 class="text-center text-primary">Наши преимущества</h2>
				<hr class="dark">
				<div class="media wow fadeInRight">
					<h3 class="dark">Оригинал</h3>
					<div class="media-body media-middle">
						<p class="dark">What could be easier? Get started fast with this landing page starter theme.</p>
					</div>
					<div class="media-right">
						<i class="icon-lg dark ion-ios-cog-outline"></i>
					</div>
				</div>
				<hr class="dark">
				<div class="media wow fadeIn">
					<h3 class="dark">Качество и цена</h3>
					<div class="media-left">
						<i class="icon-lg dark ion-android-checkmark-circle"></i>
					</div>
					<div class="media-body media-middle">
						<p class="dark">Yes, please. Grab it for yourself, and make something awesome with this.</p>
					</div>
				</div>
				<hr class="dark">
				<div class="media wow fadeInRight">
					<h3 class="dark">Гарантия</h3>
					<div class="media-body media-middle">
						<p class="dark">Because you don't want your Bootstrap site, to look like a Bootstrap site.</p>
					</div>
					<div class="media-right">
						<i class="icon-lg dark ion-ribbon-b"></i>
					</div>
				</div>
				<hr class="dark">
				<div class="media wow fadeIn">
					<h3 class="dark">Доставка</h3>
					<div class="media-left">
						<img src="ico/delivery-truck-dark.png">
					</div>
					<div class="media-body media-middle">
						<p class="dark">Lorem ipsum.</p>
					</div>
				</div>
				<hr class="dark">
				<div class="media wow fadeInRight">
					<h3 class="dark">Сфера лояльности</h3>
					<div class="media-body media-middle">
						<p class="dark">There's good reason why Bootstrap is the most used frontend framework in the world.</p>
					</div>
					<div class="media-right">
						<i class="icon-lg dark ion-android-happy"></i>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="last">
		<div class="container">
		<h2 class="text-center text-primary">Контакты</h2>
		<hr class="dark">
		<div class="row-fluid">
			<div class="col-lg-8 col-sm-8">
				<iframe width="100%" height="595" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1286.780396885435!2d23.977917282782133!3d49.83191954490205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473ae763b38441c5%3A0x144eb17e53f889c8!2z0LLRg9C70LjRhtGPINCT0L7RgNC-0LTQvtGG0YzQutCwLCAyMjUsINCb0YzQstGW0LIsINCb0YzQstGW0LLRgdGM0LrQsCDQvtCx0LvQsNGB0YLRjA!5e0!3m2!1suk!2sua!4v1499386287335"></iframe>
			</div>
			<div class="col-lg-4 col-sm-4">
				<div class="business-hours">
					<h2 class="title">Телефоны</h2>
					<p><a href="tel:+380675073833">+380 (‎67) 507 38 33</a></p>
					<p><a href="tel:+380504059699">+380 (50) 405 96 99</a></p>
					<p><a href="tel:+380735073833">+380 (73) 507 38 33</a></p>
					<h2 class="title">Адрес</h2>
					<p>г. Львов, ул. Городоцкая 225, офис 201 (2 этаж)</p>
					<h2 class="title">Время работы</h2>
					<ul class="list-unstyled opening-hours">
						<li>Понедельник <span class="pull-right">9:00-18:00</span></li>
						<li>Вторник <span class="pull-right">9:00-18:00</span></li>
						<li>Среда <span class="pull-right">9:00-18:00</span></li>
						<li>Четверг <span class="pull-right">9:00-18:00</span></li>
						<li>Пятница <span class="pull-right">9:00-18:00</span></li>
						<li>Суббота <span class="pull-right">10:00-15:00</span></li>
						<li>Воскресение <span class="pull-right">зачинено</span></li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<footer id="footer">
		<div class="container-fluid text-center">
			<a href="#"><img src="img/fosage_auto_logo_light.png"></a>
			<p>© 2017<a style="color:#047BC1; text-decoration:none;" href="#"> forsageauto.com.ua</a> All rights reserved 2017</p>
		</div>
	</footer>

        <div id="galleryModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
            	<div class="modal-body">
            		<img src="//placehold.it/1200x700/222?text=..." id="galleryImage" class="img-responsive" />
            		<p>
            		    <br/>
            		    <button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true">Close <i class="ion-android-close"></i></button>
            		</p>
            	</div>
            </div>
            </div>
        </div>

        <div id="aboutModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            	<div class="modal-body">
            		<h2 class="text-center">Forsage.com.ua</h2>
            		<h5 class="text-center">
            		    Онлайн магазин в стадии разработки :)
            		</h5>
            		<p class="text-justify">
            		    Разработка основного функционала магазина находится в процессе создания. Уже найблищим время Вас ждут приятные цены, оригинальные запчасти, замечательные скидки и индивидуальный подход!
            		</p>
            		<p class="text-center"><a href="http://www.forsageauto.com.ua">Ваш Forsage auto</a></p>
            		<br/>
            		<button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true"> OK </button>
            	</div>
            </div>
            </div>
        </div>
        <div id="alertModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm">
            <div class="modal-content">
            	<div class="modal-body">
            		<h2 class="text-center">Спрацювало!</h2>
            		<p class="text-center">Ви відправили запит, очікуйте дзвінка найближчим часом</p>
            		<p class="text-center"><a href="#">Forsage</a></p>
            		<br/>
            		<button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true">OK <i class="ion-android-close"></i></button>
            	</div>
            </div>
            </div>
        </div>
        <!--scripts loaded here from cdn for performance -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
        <script src="validator.min.js"></script>
        <script src="form-scripts.js"></script>
        <script src="nav.js"></script>
        <script src="app.js"></script>
        <script src="days.js"></script>
  </body>
</html>
