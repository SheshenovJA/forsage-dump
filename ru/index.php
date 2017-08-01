
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Forsage Auto</title>
		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Forsage.auto – заказ оригинальные автозапчасти с доставкой по Львову и Украине </title>
		<meta name="description" content="Быстрый и качественный сервис, широкий ассортимент, скидки для постоянных клиентов. Подберем, проконсультируем, привезем! "/>
		<meta name="language" content="Russian">
		<meta http-equiv="content-language" content="ru">
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
		<link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.1/animate.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
		<link rel="stylesheet" href="style.css" />
	</head>

	<body>

		<?php include_once("analyticstracking.php") ?>
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand page-scroll" href="#first"><img id="logo-text" src="img/logo-h.png" alt="Forsage Auto"></a>
				</div>
				<div class="collapse navbar-collapse" id="bs-navbar">
					<ul class="nav navbar-nav navbar-right text-center list-inline" id="lng-sw-inline">
						<li><a class="page-scroll" id="lng-sw" data-toggle="modal" title="" href="../index.php">UA</a></li>
						<li><a class="page-scroll" id="lng-sw" data-toggle="modal" title="" href="#">RU</a></li>
					</ul>
					<ul class="list-unstyled list-inline text-center">
						<li><img class="operator-ico" src="ico/ks4.png" alt="kyivstar"/><button id="google-btn" onclick="goog_report_conversion('tel:‎+380675073833')"><a href="tel:+380675073833">+380 (‎67) 507 38 33</a></button></li>
						<li><img class="operator-ico" src="ico/lc2.png" alt="lifecell"/><button id="google-btn" onclick="goog_report_conversion('tel:‎+380675073833')"><a href="tel:+380735073833">+380 (73) 507 38 33</a></button></li>
						<li><img class="operator-ico" src="ico/vf2.png" alt="vodaphone"/><button id="google-btn" onclick="goog_report_conversion('tel:‎+380675073833')"><a href="tel:+380504059699">+380 (50) 405 96 99</a></button></li>
					</ul>
					<div>
						<ul class="nav navbar-nav">
							<li class="dropdown nav">
							 <a class="dropdown-toggle" data-toggle="dropdown" href="#">Покупателям <b class="caret"></b></a>
									<ul class="dropdown-menu nav">
										 <li><a class="page-scroll" href="#three">Доставка</a></li>
										 <li><a class="page-scroll" href="#paymentandreturn">Оплата и возврат</a></li>
									</ul>
								</li>
							<li><a class="page-scroll" href="#one">О нас</a></li>
							<li><a class="page-scroll" href="#two">Заказать</a></li>
							<li><a class="page-scroll" href="#four">Наши преимущества</a></li>
							<li><a class="page-scroll" href="#last">Контакты</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li><a class="page-scroll" data-toggle="modal" title="" href="#aboutModal"><i class="ion-log-in"></i> Вход</a></li>
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
    			<li data-target="#bs-carousel" data-slide-to="2"></li>
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
    			<div class="item slides">
    				<div class="slide-1"></div>
    				<div class="hero">
    					<hgroup>
    						<h1>Автозапчасти во Львовe и всей Украине</h1>
    						<h2>Подберем, проконсультируем, привезем!</h2>
    					</hgroup>
    					<a href="#two"><button class="btn btn-hero btn-xl page-scroll" role="button">Поехали!</button></a>
    				</div>
    			</div>
					<div class="item slides active">
						<div class="slide-2"></div>
						<div class="hero">
							<a href="#two"><button class="btn btn-hero btn-xl page-scroll" role="button" style="/* top: -36%; */margin-top: 11%;opacity: 1;z-index: 9999;">Заказать!</button></a>
						</div>
					</div>
    		<div class="item slides">
    			<div class="slide-3"></div>
    			<div class="hero">
    				<hgroup>
    					<h2>Бесплатная доставка по <i class="icon-md ion-android-pin"></i>Львову</h3>
    					<h2>при заказе от 3000 грн</h3>
    				</hgroup>
    				<a href="#three"><button class="btn btn-hero btn-xl page-scroll" role="button">Условия и сроки доставки</button></a>
    			</div>
    		</div>
    	</div>
    </header>

    <section id="one">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-12 text-center">
    				<h2 class="margin-top-0 text-primary wow fadeInRight">О нас</h2>
    				<hr class="primary">
    				<p>Мы продаем автозапчасти во Львове и Украине. Все очень быстро и просто!</p>
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
    					<p class="text-muted">Через 5 минут Вам перезвонит наш менеджер</p>
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
				<div class="col-md-8 col-md-offset-2 text-center">
					<h2 class="text-primary wow fadeInRight">Найдем любую необходимую деталь</h2>
					<hr class="dark">
					<p class="dark">Все, что для этого нужно - это заполнить форму ниже. Введите свое имя, контактный телефон, email, VIN код автомобиля и "Описание запчасти". Мы самостоятельно подберем нужные вам автозапчасти и предложим несколько вариантов по производителях и ценах. Также для самостоятельного поиска автозапчастей, вы можете воспользоваться <a href="https://www.ilcats.ru" target="_blank">оригинальными каталогами</a>.</p>
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
							<div class="form-group col-sm-12">
								<label for="VIN" class="h4">VIN Код <span id="helper-vin"><i class="ion-help-circled" style="color: #337ab7;font-size: 20px;"></i><img id="foo" src="img/vin.jpg"></span></label>
								<input type="text" class="form-control" id="vin" placeholder="VIN код">
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
					<h2 class="margin-top-0 text-primary wow fadeInLeft">Условия и сроки</h2>
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
							<p>доставка <span style="color: #f15f23;">в день</span> заказа</p>
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
							<p>доставка на следующий рабочий день</p>
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
			<p>Доставка осуществляется курьером по согласованному с менеджером адресу. Стоимость - 75 грн.</p>
			<p><span style="color: #f15f23;">*</span>  при заказе по Львову на сумму больше (или равной) 3000 грн - доставка за наш счет.</p>
		</div>
	</section>

	<section id="paymentandreturn">
		<div class="container">
			<div class="row">
				<div class="col-lg-12" id="">
					<h2 class="margin-top-0 text-primary wow fadeInRight text-center">Оплата</h2>
					<hr class="dark">
				</div>
				<div class="col-md-8 col-xs-11 col-md-offset-2 list-dark" id="return">
					<ol>
					<li>Курьеру, при получении товара</li>
					<li>Наложенным платежем</li>
					<li>Приват24</li>
				</ol>
			</div>
				<div class= "col-lg-12 col-xs-11" id="return">
					<h2 class="margin-top-0 text-primary wow fadeInLeft text-center">Условия возврата</h2>
					<hr class="dark">
				</div>
				<div class="col-md-8 col-xs-11 col-md-offset-2 list-dark" id="return">
					<ol>
						<li>Возврат товара возможен в течение 10-14 дней с момента отгрузки.</li>
						<li>Возврату или обмену подлежит товар, который:
							<ul>
								<li>не имеет следов установки</li>
								<li>имеет сохраненный заводской товарный вид (упаковка, ярлыки, заводская маркировка)</li>
							</ul>
						</li>
						<li>Возврату не подлежат:
							<ul>
								<li>товары электрической группы</li>
								<li>масла и технические жидкости</li>
								<li>товары под заказ (с ОАЭ, Америки, Японии, Германии)</li>
							</ul>
						</li>
					</ol>
				</div>
			</div>
		</div>
	</section>

	<section class="container-fluid" id="four">
		<div class="row">
			<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
				<h2 class="text-center text-primary wow fadeInRight">Наши преимущества</h2>
				<hr class="dark">
				<div class="media wow fadeInRight">
					<h3 class="dark">Оригинал</h3>
					<div class="media-body media-middle">
						<p class="dark">Мы хотим, чтоб Вы не волновались за качество или что деталь не подойдет, поэтому предлагаем только автозапчасти от оригинальных производителей.</p>
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
						<p class="dark">Отличное качество, замечательный сервис и лучшая цена. Говорят, что довольные покупатели возвращаются, если Вы понимаете о чём мы.</p>
					</div>
				</div>
				<hr class="dark">
				<div class="media wow fadeInRight">
					<h3 class="dark">Доставка</h3>
					<div class="media-body media-middle">
						<p class="dark">Предлагаем, наверное, самую быструю и пунктуальную доставку.</p>
					</div>
					<div class="media-right">
						<img src="ico/delivery-truck-dark.png">
					</div>
				</div>
				<hr class="dark">
				<div class="media wow fadeIn">
					<h3 class="dark">Сфера лояльности</h3>
					<div class="media-left">
						<i class="icon-lg dark ion-android-happy"></i>
					</div>
					<div class="media-body media-middle">
						<p class="dark">Накопительная система скидок, постоянные акции, приятные бонусы – и это далеко не всё.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="last">
		<div class="container">
		<h2 class="text-center text-primary wow fadeInRight">Контакты</h2>
		<hr class="dark">
		<div class="row-fluid">
			<div class="col-lg-8 col-sm-8">
				<iframe width="100%" height="580" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1286.780396885435!2d23.977917282782133!3d49.83191954490205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473ae763b38441c5%3A0x144eb17e53f889c8!2z0LLRg9C70LjRhtGPINCT0L7RgNC-0LTQvtGG0YzQutCwLCAyMjUsINCb0YzQstGW0LIsINCb0YzQstGW0LLRgdGM0LrQsCDQvtCx0LvQsNGB0YLRjA!5e0!3m2!1suk!2sua!4v1499386287335"></iframe>
			</div>
			<div class="col-lg-4 col-sm-4">
				<div class="business-hours">
					<h2 class="title">Телефоны</h2>
					<p><a href="tel:+380675073833">+380 (‎67) 507 38 33</a></p>
					<p><a href="tel:+380735073833">+380 (73) 507 38 33</a></p>
					<p><a href="tel:+380504059699">+380 (50) 405 96 99</a></p>
					<h2 class="title">Email</h2>
					<p><a href="mailto:info@forsageauto.com.ua">info@forsageauto.com.ua</a></p>
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
						<li>Воскресение <span class="pull-right">закрыто</span></li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<div class="scrollcontrol wow swing">
	<div class="scrollup"></div>
</div>
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
            		<h2 class="text-center">forsageauto.com.ua</h2>
            		<h5 class="text-center">
            		    Онлайн магазин в стадии разработки :)
            		</h5>
            		<p class="text-justify">
            		    Разработка основного функционала магазина находится в процессе создания. Уже в ближайшее время Вас ждут приятные цены, оригинальные запчасти, замечательные скидки и индивидуальный подход!
            		</p>
            		<p class="text-center"><a href="http://www.forsageauto.com.ua/ru">Ваш Forsage</a></p>
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
            		<h2 class="text-center">Сработало!</h2>
            		<p class="text-center">Вы отправили запрос, ожидайте звонка в ближайшее время</p>
            		<p class="text-center"><a href="#">Forsage</a></p>
            		<br/>
            		<button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true">OK <i class="ion-android-close"></i></button>
            	</div>
            </div>
            </div>
        </div>
        <!--scripts loaded here from cdn for performance -->
				<script type="text/javascript">
  			(function(d, w, s) {
				var widgetHash = '2ur04649j06absupdf08', gcw = d.createElement(s); gcw.type = 'text/javascript'; gcw.async = true;
				gcw.src = '//widgets.binotel.com/getcall/widgets/'+ widgetHash +'.js';
				var sn = d.getElementsByTagName(s)[0]; sn.parentNode.insertBefore(gcw, sn);
  			})(document, window, 'script');
				</script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
				<script src="//cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
        <script src="validator.min.js"></script>
        <script src="form-scripts.js"></script>
				<script src='helper.js'></script>
        <script src="nav.js"></script>
        <script src="app.js"></script>
        <script src="days.js"></script>
  </body>
</html>
