<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Calculator</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script type="text/javascript" src="script.js"></script>
</head>
<body>
	<div class="page-wrap">
		<header>
			<div class="container">
				<div class="container logo-img">
					<img src="logo.jpg" alt="" width="100">
				</div>
				<div class="container logo-text">
					WORLD BANK Publications
				</div>
				<div class="container telephone">
					8-800-100-5005<br>
					+7 (3452) 522-000
				</div>
			</div>
			<div class="navbar">
				<div class="navbar-link first-link">Кредитные карты</div>
				<div class="navbar-link">Вклады</div>
				<div class="navbar-link">Дебетовая карта</div>
				<div class="navbar-link">Страхование</div>
				<div class="navbar-link">Друзья</div>
				<div class="navbar-link">Интернет-банк</div>
			</div>
		</header>
		<div class="container1">
			<div class="bread-crumb">
				<a href="#" id="breadCrumb">Главная</a>-
				<a href="#" id="breadCrumb">Вклады</a>-
				<a href="#" id="breadCrumb">Калькулятор</a>
			</div>
			<div class="calc">
				<h1>Калькулятор</h1>
				<form action="" method="">
					<div class="text column">
						Дата оформления вклада<br>
						Сумма вклада<br>
						Срок вклада<br>
						Пополнение вклада<br>
						Сумма пополнения вклада
					</div>
					<div class="input column">
						<input type="text" id="date"><br>
						<input type="text" id="deposit">
						<input type="range" id="range1" min="1000" max="3000000" step="1000" value="1000"><br>
						<select name="termOfDeposit" id="termOfDeposit">
							<option value="1">1 год</option>
							<option value="2">2 года</option>
							<option value="3">3 года</option>
							<option value="4">4 года</option>
							<option value="5">5 лет</option>
						</select><br>
						<input type="radio" name="radio" class="radio" checked="true">Нет
						<input type="radio" name="radio" class="radio">Да<br>
						<input type="text" id="depositReplen">
						<input type="range" id="range2" min="1000" max="3000000" step="1000" value="1000">
					</div>
					<div class="calc-foot">
						<input type="button" value="Рассчитать" id="calculate">Результат: <span id="result"></span>
					</div>
				</form>			
			</div>
		</div>
	</div>
	<footer>
		<div class="foot-bar"><a href="#">Кредитные карты</a></div>
		<div class="foot-bar"><a href="#">Вклады</a></div>
		<div class="foot-bar"><a href="#">Дебетовая карта</a></div>
		<div class="foot-bar"><a href="#">Страхование</a></div>
		<div class="foot-bar"><a href="#">Друзья</a></div>
		<div class="foot-bar"><a href="#">Интернет-банк</a></div>
	</footer>
</body>
</html>