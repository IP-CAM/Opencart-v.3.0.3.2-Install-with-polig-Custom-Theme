<!DOCTYPE html>
<html lang="ru">
<head>
		 	
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Template</title>
  <script src="https://kit.fontawesome.com/14adb36403.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Alegreya:400,700&display=swap&subset=cyrillic" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Rubik:400,700&display=swap&subset=cyrillic" rel="stylesheet">
  <link rel="stylesheet" href="css/slick-theme.css">
  <link rel="stylesheet" href="css/slick.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<!-- Header -->


<header class="menu menu_product">
	<div class="container">
		<div class="df">
		<a href="#" class="menu_logo">
			<img src="images/logo_black.png" alt="logo" class="logo_img">
		</a>
		<ul class="menu_nav">
			<li>
				<a href="#" class="menu_item_active">Главная</a>
			</li>
			<li>
				<a href="#">Каталог</a>
			</li>
			<li>
				<a href="#">Доставка</a>
			</li>
			<li>
				<a href="#">Новости</a>
			</li>
			<li>
				<a href="#">Контакты</a>
			</li>
		</ul>
		<ul class="menu_block">
			<li>
				<a href="#" class="first">
					<i class="fas fa-shopping-cart"></i>
				</a>
			</li>
			<li>
				<a href="#" class="second">
					<i class="fas fa-door-open"></i>
				</a>
			</li>
			<li>
				<a href="#" class="third">
					<i class="fas fa-heart"></i>
				</a>
			</li>
		</ul>
		</div>
	</div>
</header>
<!--  -->
<section class="products">
	<div class="container">
		<div class="df">
		<div class="menu_search_check"></div>
		<div class="bread_crumbs">
			<a href="#" class="from">Каталог</a>
			<img src="images/arrow.png" alt="" class="arrow">
			<a href="#" class="to">Vagabund Ankle</a>
		</div>
		</div>
		<div class="return_back">
			<img src="images/arrow.png" alt="" class="arrow">
			<a href="#">Назад в Каталог</a>
		</div>
		<!--  -->
		<div class="prod_df">
			<div class="product_images">
				<img src="images/product_dell.png" alt="" class="product_img_dell">
			</div>
			<div class="prod_desc">
				<h2 class="prod_title">
					PRABOS Vagabund Ankle
				</h2>
				<div class="prod_price">
					<p><span>Стоимость</span>8900</p>
				</div>
				<div class="prod_filters">
					<div class="pros_size">Размер <span>41</span></div>
					<div class="prod_color">Цвет</div>
					<div class="prod_presence"><span>Наличие</span>Под заказ (до 2-х недель)</div>
				</div>
				<button href="#" class='btn_size open-modal' data-modal="#modal1" class="prod_size_btn">
					Таблица размеров
				</button>
				<div class="buttton_lay">
					<button href="#" class='btn_basket'>
						Добавить в корзину
					</button>
					<button href="#" class='btn_watch' >
						Смотреть видеообзор
					</button>
				</div>
				<div class='modal' id='modal1'>
					<div class='content'>
						<img src="images/size.jpg" alt="">
					</div>	
				</div>
				<div class='modal' id='modal2'>
					<div class='content'>
						<iframe width="100%" height="100%" src="https://www.youtube.com/embed/6c1BThu95d8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>	
				</div>
			</div>
		</div>
			<div class="prod_recom">
				<p>Также  Вам может понравиться</p>
				<div class="df">
				<div class="product">
					<img src="images/product.png" alt="" class="product_img">
					<p class="product_price">12900</p>
					<div class="prod_opdell">
						<p class="product_title">Страйкбольный автомат НПО АЕГ</p>
						<p class="product_desc">АС «ВАЛ» 17 серия</p>
					</div>
				</div>
				<div class="product">
					<img src="images/prod2.png" alt="" class="product_img">
					<p class="product_price">12900</p>
					<div class="prod_opdell">
						<p class="product_title"> PRABOS Jungle Bundeswehr</p>
						<p class="product_desc"> PRABOS Jungle Bundeswehr</p>
					</div>
				</div>
				<div class="product">
					<img src="images/prod3.png" alt="" class="product_img">
					<p class="product_price">12900</p>
					<div class="prod_opdell">
						<p class="product_title">Страйкбольный автомат НПО АЕГ</p>
						<p class="product_desc">АС «ВАЛ» 17 серия</p>
					</div>
				</div>
				<div class="product">
					<img src="images/product.png" alt="" class="product_img">
					<p class="product_price">12900</p>
					<div class="prod_opdell">
						<p class="product_title">Страйкбольный автомат НПО АЕГ</p>
						<p class="product_desc">АС «ВАЛ» 17 серия</p>
					</div>
				</div>
				</div>
			</div>
			

	</div>
</section>
<!--  -->














<footer class="footer footer_product">
	<div class="container">
		<div class="df" >
			
		<ul class="footer_menu">
			<li>Главное меню</li>
			<li>
				<a href="#">Главная</a>
			</li>
			<li>
				<a href="#">Каталог</a>
			</li>
			<li>
				<a href="#">Доставка</a>
			</li>
			<li>
				<a href="#">Новости</a>
			</li>
			<li>
				<a href="#">Контакты</a>
			</li>
		</ul>
		<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d20309.075323923767!2d30.4721233!3d50.4851493!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sua!4v1569270986325!5m2!1sru!2sua" width="755" height="511" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
		<div>
		<ul class="footer_time">
			<li>График работы</li>
			<li>
				<a href="#">10:00 − 20:00</a>
			</li>
			<li>
				<a href="#">10:00 − 20:00</a>
			</li>
			<li>
				<a href="#">10:00 − 20:00</a>
			</li>
			<li>
				<a href="#">10:00 − 20:00</a>
			</li>
			<li>
				<a href="#">10:00 − 20:00</a>
			</li>
			<li>
				<a href="#">10:00 − 20:00</a>
			</li>
			<li>
				<a href="#">10:00 − 20:00</a>
			</li>
		</ul>
		<ul class="footer_adress">
		<li>Телефон для связи</li>
		<li>8 (831) 416-01-40</li>
		<li>8 (831) 413-37-91</li>
		</ul>
	</div>
	</div>
</div>	
</footer>
</div>
</div>
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/scripts.js"></script>
  <script src="js/slick.min.js"></script>
  <script src="js/slick.js"></script>
</body>
</html>	