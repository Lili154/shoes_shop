<!DOCTYPE html>
<html>
<head>
	<title>sale</title>
	<link rel="stylesheet"  href="css/style.css">
</head>
<body>
	<nav>
		<div>
			<p>МС</p>
			<p>Магазин сникерсов</p>
		</div>
		<ul>
			<li><a href="../index.php">Главная</a></li>
			<li><a href="#">Магазин</a>
				<div class="dropdown">
					<div class="dropdownmenu">
						<ol>
							<li><a href="../for man/for man.php">Для мужчин</a></li>
							<li><a href="../for women/collection for woman.php">Для женщин</a></li>
							<li><a href="../sale/index.php">Распродажа </a></li>
						</ol>
					</div>
				</div>
			</li>
			<li><a href="../about us/about us.php">О нас</a></li>
			<li><a href="../service/service.php">Обслуживание клиентов</a></li>
			<i class="fas fa-shopping-bag"></i><span id="forCount">0</span>
		</ul>
	</nav>
	<header>
		<p class="header">SALE</p>
	</header>
	<section>
		<div class="section-content">
			<div class="image1" onmouseover="f()" onmouseout="k()">
				<div class="sale1">
					<p class="p1">skidki 40%</p>
				</div>
				<img id="img1" src="84770f_426e68d477f9452da2e4900c67411cec.webp">
				<p class="p1">Vash tovar</p>
			</div>
			<div class="image2" onmouseover="m()" onmouseout="n()">	
				<div class="sale2">
					<p class="p2">skidki 40%</p>
				</div>
				<img id="img2" src="84770f_81be7fd5f314489b9493d0988e6e98fb.webp">
				<p class="p2">Vash tovar</p>
			</div>
			<div class="image3" onmouseover="v()" onmouseout="w()">
				<div class="sale3">
					<p class="p3">skidki 40%</p>
				</div>
				<img id="img3" src="84770f_3e99f288acfb47b5863f5394d6e04bef.webp">
				<p class="p3">Vash tovar</p>
			</div>
			<div class="sale">
				<div class="image4" onmouseover="a()" onmouseout="b()">
					<div class="sale4">
						<p class="p4">skidki 40%</p>
					</div>
					<img id="img4" src="84770f_fa88211e6c0b46a88bfed4757177592e.webp">
					<p class="p4">Vash tovar</p>
				</div>
				<div class="image5" onmouseover="c()" onmouseout="d()">
					<div class="sale5">
						<p class="p5">skidki 40%</p>
					</div>
					<img id="img5" src="84770f_8cff0379580d4a318a7a30aeac659c0e.webp">
					<p class="p5">Vash tovar</p>
				</div>
			</div>
		</div>
	</section>
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