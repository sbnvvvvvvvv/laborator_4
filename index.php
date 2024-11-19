<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Ветеринарная клиника "Барбос"</title>
	<link rel="stylesheet" href="./css/style.css" />
</head>

<body>
	<header class="header">
		<div class="container">
			<div class="header-top">
				<a href="#" class="logo"><img src="./images/barboss.jpg" alt="" />БАРБОС</a>
				<ul class="header-list">
					<li class="list-item"><a href="#">Главная</a></li>
					<li class="list-item"><a href="#">Клиентам</a></li>
					<li class="list-item"><a href="#">Специалистам</a></li>
					<li class="list-item"><a href="#">Контакты</a></li>
					<li class="list-item"><a href="#">Отзывы</a></li>
				</ul>
				<a href="#" class="auth">Авторизация</a>
			</div>
		</div>
		<hr />
	</header>
	<section class="main-section">
		<div class="container">
			<div class="main">
					<div class="main-right">
						<p>"Ветеринарная клиника "Барбос" - это современное медицинское учреждение,
							специализирующееся на оказании квалифицированной помощи домашним животным.
							Наша команда профессионалов предлагает широкий спектр услуг, 
							включая диагностику, лечение, хирургию и профилактику 
							заболеваний у собак и кошек. Мы заботимся о здоровье и благополучии
							ваших питомцев с любовью и вниманием."
						</p>
					</div>
			</div>
		</div>
	</section>
	<section class="time">
		<div class="container">
			<p class="time-text">Обратите Ваше внимание!</p>
			<div class="time-block">
				<div class="time-block-left">
					<img src="./images/privivka.jpg" alt="" class="time-img" />
				</div>
				<div class="time-block-right">
					<div class="right-text-1">
						<p>РАСПИСАНИЕ РАБОТЫ ВЕТКЛИНИКИ:</p>
						<p>ПН-ПТ c 8:00 до 18:00 | СБ с 8:00 до 14:00 | ВС выходной</p>
						<img src="./images/vakc.jpg" alt="" class="time-img-left"/>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="form">
		<div class="container">
			<h1 class="form-h1">Обратиться в нашу клинику</h1>
		</div>
		<form class="form-style-9" method="post" action="./sendform.php">
			<ul>
				<li>
					<input type="text" name="name" class="field-style field-split align-left" placeholder="Ваше имя" />
					<input type="email" name="email" class="field-style field-split align-right" placeholder="Ваш Email" />
				</li>
				<li>
					<input type="text" name="phone" class="field-style field-split align-left" placeholder="Ваш номер телефона" />
					<input type="text" name="address" class="field-style field-split align-right"
						placeholder="Адрес проживания" />
				</li>
				<li>
					<input type="text" name="who" class="field-style field-full align-none"
						placeholder="Почему решили обратиться?" />
				</li>
				<li>
					<textarea resize="none" name="problem" class="field-style" placeholder="Опишите вашу проблему"></textarea>
				</li>
				<li>
					<input type="submit" value="Отправить обращение" />
				</li>
			</ul>
		</form>
	</section>
</body>

</html>