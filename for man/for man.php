<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>for man</title>
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
		<li><a href="#">О нас</a></li>
		<li><a href="#">Обслуживание клиентов</a></li>
		<i class="fas fa-shopping-bag"></i><span id="forCount">0</span>
	    </ul>
	</nav>
	<header>
		<p class="header">MENS COLLECTION</p>
	</header>
	<section>
		<div class="section-content">
		<div class="image1" onmouseover="f()" onmouseout="k()">
			<a href="../about the product m1/about the product m1.php">
			<img id="img1"  src="84770f_fa88211e6c0b46a88bfed4757177592e.webp">
		</a>
			<p class="p1">Vash tovar</p>
		</div>
		<div class="image2" onmouseover="m()" onmouseout="n()">	
			<a href="../about the product m2/index.php">
			<img id="img2" src="84770f_fe645b9caa874735ad2b817f5ee77551.webp"></a>
			<p class="p2">Vash tovar</p>
		</div>
		<div class="image3" onmouseover="v()" onmouseout="w()">
			<a href="../about the product m3/index.php">
			<img id="img3" src="84770f_deb028dbaa0944aabb8ddd538d2ed598.webp"></a>
			<p class="p3">Vash tovar</p>
		</div>
		<div class="image4" onmouseover="a()" onmouseout="b()">
			<div class="sale4">
				<p class="p10">skidki 40%</p>
			</div>
			<a href="../about the product m4/index.php">
			<img id="img4" src="84770f_054990a92c9e4b28bcc929a20b034302.webp"></a>
			<p class="p4">Vash tovar</p>
		</div>
		<div class="image5" onmouseover="c()" onmouseout="d()">
			<div class="sale5">
				<p class="p11">skidki 40%</p>
			</div>
			<a href="../about the product m5/index.php">
			<img id="img5" src="84770f_34b3ec23703b4f81949beb153c0fba09.webp"></a>
			<p class="p5">Vash tovar</p>
		</div>
		<div class="image6" onmouseover="e()" onmouseout="g()">
			<a href="../about the product m6/index.php">
			<img id="img6" src="84770f_b7ca271b595d4fd3b1392f58c9ccd132.webp"></a>
			<p class="p6">Vash tovar</p>
		</div>
		<div class="image7" onmouseover="h()" onmouseout="i()">
			<div class="sale7">
				<p class="p12">skidki 40%</p>
			</div>
			<a href="../about the product m7/index.php">
			<img id="img7" src="84770f_8cff0379580d4a318a7a30aeac659c0e.webp"></a>
			<p class="p7">Vash tovar</p>
		</div>
		<div class="image8" onmouseover="j()" onmouseout="l()">
			<a href="../about the product m8/index.php">
			<img id="img8" src="84770f_93650946226a4aa29de479d16695a72f.webp"></a>
			<p class="p8">Vash tovar</p>
		</div>
		<div class="image9" onmouseover="o()" onmouseout="p()">
			<a href="../about the product m9/index.php">
			<img id="img9" src="84770f_3f459f27660348d0856f10d095042a04.webp"></a>
			<p class="p9">Vash tovar</p>
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