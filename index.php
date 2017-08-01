
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Forsage Auto – оригінальні автозапчастини з доставкою по Львову та усій Україні </title>
		<meta name="description" content="Швидкий та якісний сервіс, широкий асортимент оригінальних автозапчастин, знижки для постійних клієнтів. Підберемо, проконсультуємо, привеземо!"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta property="og:image" content="http://forsageauto.com.ua/img/fosage_auto_logo_circle.png">
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
				<a class="navbar-brand page-scroll" href="#first"><img id="logo-text" src="img/logo-h.png" alt="Logo"></a>
			</div>
			<div class="collapse navbar-collapse" id="bs-navbar">
				<ul class="nav navbar-nav navbar-right text-center list-inline" id="lng-sw-inline">
					<li><a class="page-scroll" id="lng-sw" data-toggle="modal" title="" href="#">UA</a></li>
					<li><a class="page-scroll" id="lng-sw" data-toggle="modal" title="" href="ru/index.php">RU</a></li>
				</ul>
				<ul class="list-unstyled list-inline text-center">
					<li><img class="operator-ico" src="ico/ks4.png" alt="kyivstar"/><button id="google-btn" onclick="goog_report_conversion('tel:‎+380675073833')"><a href="tel:+380675073833">+380 (‎67) 507 38 33</a></button></li>
					<li><img class="operator-ico" src="ico/lc2.png" alt="lifecell"/><button id="google-btn" onclick="goog_report_conversion('tel:‎+380675073833')"><a href="tel:+380735073833">+380 (73) 507 38 33</a></button></li>
					<li><img class="operator-ico" src="ico/vf2.png" alt="vodaphone"/><button id="google-btn" onclick="goog_report_conversion('tel:‎+380675073833')"><a href="tel:+380504059699">+380 (50) 405 96 99</a></button></li>
				</ul>
				<div>
					<ul class="nav navbar-nav">
						<li class="dropdown nav">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Покупцям <b class="caret"></b></a>
							<ul class="dropdown-menu nav">
								<li><a class="page-scroll" href="#three">Доставка</a></li>
								<li><a class="page-scroll" href="#paymentandreturn">Оплата та повернення</a></li>
							</ul>
						</li>
						<li><a class="page-scroll" href="#one">Про нас</a></li>
						<li><a class="page-scroll" href="#two">Замовити</a></li>
						<li><a class="page-scroll" href="#four">Наші переваги</a></li>
						<li><a class="page-scroll" href="#last">Контакти</a></li>
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
							<h1>Автозапчастини у Львові та всій Україні</h1>
							<h2>Підберемо, проконсультуємо, привеземо</h2>
						</hgroup>
						<a href="#two"><button class="btn btn-hero btn-xl page-scroll" role="button">Поїхали!</button></a>
					</div>
				</div>

				<div class="item slides active">
					<div class="slide-2"></div>
					<div class="hero">
						<a href="#two"><button class="btn btn-hero btn-xl page-scroll" role="button" style="/* top: -36%; */margin-top: 11%;opacity: 1;z-index: 9999;">Замовити!</button></a>
					</div>
				</div>
				<div class="item slides">
					<div class="slide-3"></div>
					<div class="hero">
						<hgroup>
							<h2>Безкоштовна доставка по <i class="icon-md ion-android-pin"></i>Львову</h2>
							<h2>при замовленні від 3000 грн</h2>
						</hgroup>
						<a href="#three"><button class="btn btn-hero btn-xl page-scroll" role="button">Умови та терміни доставки</button></a>
					</div>
				</div>
			</div>
		</div>
	</header>

	<section id="one">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="margin-top-0 text-primary wow fadeInRight">Про нас</h2>
					<hr class="primary">
					<p>Ми продаємо автозапчастини у Львові та Україні. Все дуже швидко та просто!</p>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 text-center">
					<div class="feature">
						<i class="icon-lg ion-android-create wow fadeIn" data-wow-delay=".3s"></i>
						<h3 class="header-muted">Заповнюєте форму</h3>
						<p class="text-muted">Заповніть форму замовлення, вказавши необхідну інформацію</p>
						<br />
						<a href="#two" class="btn btn-primary btn-xl page-scroll">Перейти до форми</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 text-center">
					<div class="feature">
						<i class="icon-lg ion-android-call wow fadeInUp" data-wow-delay=".2s"></i>
						<h3 class="header-muted">Очікуйте дзвінка</h3>
						<p class="text-muted">Через 5 хвилин Вам зателефонує наш менеджер</p>
						<br />
						<a href="#last" class="btn btn-primary btn-xl page-scroll">Переглянути контакти</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 text-center">
					<div class="feature">
						<i class="icon-lg ion-android-send wow fadeIn" data-wow-delay=".3s"></i>
						<h3 class="header-muted">Очікуйте кур’єра</h3>
						<p class="text-muted">Якщо товар є в наявності - доставка вже сьогодні!</p>
						<br />
						<a href="#three" class="btn btn-primary btn-xl page-scroll">Умови доставки</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="two">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<h2 class="text-primary wow fadeInRight">Знайдемо будь-яку необхідну деталь</h2>
					<hr class="dark">
					<p class="dark">Все, що для цього потрібно - це заповнити форму нижче. Введіть своє ім’я, контактний телефон, email, VIN код автомобіля та "Опис запчастини". Ми самостійно підберемо необхідні вам автозапчастини та запропунуємо декілька варіантів по виробниках та цінах. Також для самостійного пошуку автозапчастин, ви можете скористатись <a href="https://www.ilcats.ru" target="_blank">оригінальними каталогами</a>.</p>
					<form role="form" id="contactForm" data-toggle="validator" class="shake">
						<div class="row">
							<div class="form-group col-sm-6">
								<label for="name" class="h4">Iм'я</label>
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
							<label for="message" class="h4 ">Опис запчастини</label>
							<textarea id="message" class="form-control" rows="5" placeholder="Опис" required></textarea>
							<div class="help-block with-errors"></div>
						</div>

						<button type="submit" id="form-submit" onclick="goog_report_conversion('http://www.forsageauto.com.ua')" class="btn btn-order btn-xl pagination-centered">Замовити</button>
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
					<h2 class="margin-top-0 text-primary wow fadeInLeft">Умови та терміни доставки</h2>
					<hr>
					<div>
						<img src="ico/delivery-truck-and-clock-light.png" alt="delivery-truck-and-clock">
					</div>
					<br>
					<p>Доставка запчастин відбувається в залежності із часом здійсненого замовлення:</p>
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
							<p> доставка <span style="color: #f15f23;">в день</span> замовлення</p>
						</div>
						<div class="media-right">
							<img src="ico/time_light-before_17.png" alt="before 17">
						</div>
					</div>
					<hr>
					<div class="media wow fadeInRight">
						<h3>після 17:00</h3>
						<div class="media-body media-middle">
							<p>доставка на наступний робочий день</p>
						</div>
						<div class="media-right">
							<img src="ico/time_light-after_17.png" alt="after 17">
						</div>
					</div>
				</div>
				<div class="col-lg-1 col-md-1 text-center"></div>
				<div class="col-lg-5 col-md-5">
					<div class="media wow fadeIn">
						<div class="text-center">
							<i style="color: #f15f29" class="icon-md ion-ios-location-outline"></i>
						</div>
						<h3 class="text-center">по Україні</h3>
					</div>
					<hr>
					<div class="media wow fadeInRight">
						<h3>до 14:00</h3>
						<div class="media-body media-middle">
							<p>доставка <span style="color: #f15f23;">в день</span> замовлення</p>
						</div>
						<div class="media-right">
							<img src="ico/time_light-before_14.png" alt="before 14">
						</div>
					</div>
					<hr>
					<div class="media wow fadeInRight">
						<h3>після 14:00</h3>
						<div class="media-body media-middle">
							<p> доставка на наступний робочий день</p>
						</div>
						<div class="media-right">
							<img src="ico/time_light-after_14.png" alt="after 14">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container text-center">
			<hr>
			<p>Доставка замовлення здійснюється кур’єром за адресою, яка була узгоджена з менеджером. Вартість - 75 грн.</p>
			<p><span style="color: #f15f23;">*</span> при замовлені по Львову на суму більше (або =) 3000 грн - доставка за наш рахунок.</p>
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
						<li>Кур’єру, при отриманні товару</li>
						<li>Накладеним платежем</li>
						<li>Приват24</li>
					</ol>
				</div>
				<div class="col-lg-12 col-xs-12">
					<h2 class="margin-top-0 text-primary wow fadeInLeft text-center">Умови повернення</h2>
					<hr class="dark">
				</div>
				<div class="col-md-8 col-xs-11 col-md-offset-2 list-dark" id="return">
					<ol>
						<li>Повернення товару можливе протягом 10-14 днів з моменту відвантаження.</li>
						<li>Повернення або обміну підлягає товар, який:
							<ul>
								<li>не має слідів встановлення</li>
								<li>має збережений заводський товарний вигляд (упаковка, ярлики, заводське маркування)</li>
							</ul>
						</li>
						<li>Поверненню не підлягають:
							<ul>
								<li>товари електричної групи</li>
								<li>мастила та технічні рідини</li>
								<li>товари під замовлення (з ОАЕ, Америки, Японії, Німеччини)</li>
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
				<h2 class="text-center text-primary wow fadeInRight">Наші переваги</h2>
				<hr class="dark">
				<div class="media wow fadeInRight">
					<h3 class="dark">Оригінал</h3>
					<div class="media-body media-middle">
						<p class="dark">Ми хочемо, щоб Ви не турбувались про якість або що деталь не підійде, тому ми пропонуємо тільки автозапчастини від оригінальних виробників.</p>
					</div>
					<div class="media-right">
						<i class="icon-lg dark ion-ios-cog-outline"></i>
					</div>
				</div>
				<hr class="dark">
				<div class="media wow fadeIn">
					<h3 class="dark">Якість та ціна</h3>
					<div class="media-left">
						<i class="icon-lg dark ion-android-checkmark-circle"></i>
					</div>
					<div class="media-body media-middle">
						<p class="dark">Відмінна якість, чудовий сервіс та найкраща ціна. Кажуть, що задоволені покупці повертаються, якщо Ви розумієте про що ми.</p>
					</div>
				</div>
				<hr class="dark">
				<div class="media wow fadeInRight">
					<h3 class="dark">Доставка</h3>
					<div class="media-body media-middle">
						<p class="dark">Пропонуємо, напевно, найшвидшу та найпунктуальнішу доставку.</p>
					</div>
					<div class="media-right">
						<img src="ico/delivery-truck-dark.png">
					</div>
				</div>
				<hr class="dark">
				<div class="media wow fadeIn">
					<h3 class="dark">Сфера лояльності</h3>
					<div class="media-left">
						<i class="icon-lg dark ion-android-happy"></i>
					</div>
					<div class="media-body media-middle">
						<p class="dark">Накопичувальна система знижок, постійні акції, приємні бонуси - і це далеко не все.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="last">
		<div class="container">
		<h2 class="text-center text-primary wow fadeInRight">Контакти</h2>
		<hr class="dark">
		<div class="row-fluid">
			<div class="col-lg-8 col-sm-8">
				<iframe width="100%" height="580" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1286.780396885435!2d23.977917282782133!3d49.83191954490205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473ae763b38441c5%3A0x144eb17e53f889c8!2z0LLRg9C70LjRhtGPINCT0L7RgNC-0LTQvtGG0YzQutCwLCAyMjUsINCb0YzQstGW0LIsINCb0YzQstGW0LLRgdGM0LrQsCDQvtCx0LvQsNGB0YLRjA!5e0!3m2!1suk!2sua!4v1499386287335"></iframe>
			</div>
			<div class="col-lg-4 col-sm-4">
				<div class="business-hours">
					<h2 class="title">Телефони</h2>
					<p><a href="tel:+380675073833">+380 (‎67) 507 38 33</a></p>
					<p><a href="tel:+380735073833">+380 (73) 507 38 33</a></p>
					<p><a href="tel:+380504059699">+380 (50) 405 96 99</a></p>
					<h2 class="title">Email</h2>
					<p><a href="mailto:info@forsageauto.com.ua">info@forsageauto.com.ua</a></p>
					<h2 class="title">Адреса</h2>
					<p>м. Львів, вул. Городоцька 225, офіс 201 (2 поверх)</p>
					<h2 class="title">Час роботи</h2>
					<ul class="list-unstyled opening-hours">
						<li>Понеділок <span class="pull-right">9:00-18:00</span></li>
						<li>Вівторок <span class="pull-right">9:00-18:00</span></li>
						<li>Середа <span class="pull-right">9:00-18:00</span></li>
						<li>Четвер <span class="pull-right">9:00-18:00</span></li>
						<li>П’ятниця <span class="pull-right">9:00-18:00</span></li>
						<li>Субота <span class="pull-right">10:00-15:00</span></li>
						<li>Неділя <span class="pull-right">зачинено</span></li>
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
			<a href="#"><img src="img/logo-l.png"></a>
			<p>© 2017<a style="color:#047BC1; text-decoration:none;" href="www.forsageauto.com.ua"> forsageauto.com.ua</a> All rights reserved 2017</p>
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
					<h2 class="text-center">Forsage</h2>
					<h5 class="text-center">Онлайн магазин у стадії розробки :)</h5>
					<p class="text-justify">
						Розробка основного функціоналу магазину знаходиться у процесі створення. Уже найблищим часом на Вас чекають приємні ціни, оригінальні запчастини, чудові знижки та індивідуальний підхід!
					</p>
					<p class="text-center"><a href="http://www.forsageauto.com.ua">Ваш Forsage</a></p>
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

	<!-- Google Tag Manager (noscript) -->
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
