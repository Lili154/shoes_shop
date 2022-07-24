<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Document</title>
	<link rel="stylesheet"  href="css/style.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js"></script>
</head>
<body>
		
		<nav>
			<div>
			<p>МС</p>
		  	<p>Magazin cnikersov</p>
			</div>
		    <ul>
				<li><a href="#info">Главная</a></li>
				<li><a href="#">Магазин</a>
				<div class="dropdown">
					<div class="dropdownmenu">
						<ol>
							<li><a href="for man/for man.php">Для мужчин</a></li>
							<li><a href="for women/collection for woman.php">Для женщин</a></li>
							<li><a href="sale/index.php">Распродажа </a></li>
						</ol>
				    </div>
				</div>
				</li>
				<li><a href="about us/about us.php">О нас</a></li>
				<li><a href="service/service.php">Обслуживание клиентов</a></li>
				<i class="fas fa-shopping-bag" id="openShop"></i><span id="forCount">0</span>
			</ul>
			<div class="bag" id="d">
				<div class="d1">
					<button id="close">></button>
					<h3>Корзина</h3>
				</div>
				<div class="d2">
					<h3>Корзина пуста</h3>
				</div>
			</div>
		</nav>
		<div class="info" id="info">
			<button class="but1"><a href="for women/collection for woman.php">Потрясающая коллекция для женщин></a></button>
		</div>
		<div class="man">
			<img class="img1" src="download1.jpg">
			<img class="img2" src="download.jpg">
			<button class="but"><a href="for man/for man.php">Для мужшин></a></button>
		</div>
		    <img class="img3" src="84770f_47eecceda39f45d6b719f9d032e24151.webp">
		    <div class="block">
		    	<div><a href="about the product m6/index.php"><img src="for man/84770f_deb028dbaa0944aabb8ddd538d2ed598.webp"></div></a>
		    	<div><a href="about the product m2/index.php"><img src="for man/84770f_fe645b9caa874735ad2b817f5ee77551.webp"></div></a>
		    	<div><a href="about the product m3/index.php"><img src="for man/84770f_054990a92c9e4b28bcc929a20b034302.webp"></div></a>
		    	<div><a href="about the product w5/index.php"><img src="for women/84770f_3ed8b7af19324b2fa5215afa327aefb7.webp"></div></a>
		    	<div><a href="about the product w1/index.php"><img src="for women/84770f_a76d377940e049d0baaf2a10265711f5.webp"></div></a>
		    	<div><a href="about the product w6/index.php"><img src="for women/84770f_732eed9a72de449a853444132e1cda25.webp"></div></a>
		    </div>
		<div class="footer"> 
			<p>МС</p>
			<div class="footer1">
				<div class="address">
			    	<h1>Адрес</h1><br>
			    	<h6>ул.Арбат,1а,Москва</h6>
			    	<h6>119019,Россия</h6>
			    	<h6>info@mysite.ru</h6>
			    	<h6>Телефон:+7(495)000-00-00</h6><br>
			    	<i class="fab fa-facebook-f icon" ></i>
			    	<i class="fab fa-twitter icon" ></i>
			    	<i class="fab fa-instagram icon" ></i>
				</div>
				<div class="latter">
					<h1>НАПИШИТЕ НАМ</h1>
					<div>
						<form action="file.php" method="post">
							<div>
								<input type="text" placeholder="Имя" name="name">
								<input type="email" placeholder="Эл. почта" name="email1">
								<input type="num" placeholder="Телефон" name="telephone">
							</div>
							<div class="area">
								<textarea type = "text" name="placeholder">Добавтье сообшение...
								</textarea>
								<button class="send">Отправить</button>	
							</div>
						</form>
					</div>
				</div>
				
				<div class="cont">
					<form action="file.php" method="post">
						<h1>БУДЕМ НА СВЯЗИ</h1>
						<input type="email" placeholder="Добавтье эл. почту*" name="email2"> <br>
						<button class="ok">OK</button>
					</form>
				</div>
			</div>
		</div> 
		<script src="js/jquery.js"></script>  
		<script src="js/script.js"></script>  
</body>
</html>