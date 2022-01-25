<!DOCTYPE html>
<html lang="en">
<head>
	<title>Главная</title>
    <?php include "views/head.php"; ?>
</head>
<body>
<?php  include "views/header.php"; ?>

<section class="container page">
	<div class="page-content">
			<h2 class="page-title">Блоги по программированию</h2>
			<p class="page-desc">Популярные и лучшие публикации по программированию для начинающих
 и профессиональных программистов и IT-специалистов.</p>

		<div class="blogs">
			<div class="blog-item">
				<img class="blog-item--img" src="<?=$BASE_URL; ?>/images/1.png" alt="">
				<div class="blog-header">
					<h3>Обзор Report Manager от Webix</h3>
				</div>
				<p class="blog-desc">
					Осень 2020 года стала плодотворным временем для специалистов Webix. 

					Команда Webix выпустила восьмую версию библиотеки пользовательского интерфейса Webix с двумя новыми комплексными виджетами. Первый - зто Scheduler, о котором мы подробно говорили ранее. Второй виджет - это Gantt chart в JavaScript. Подробную информацию об этом виджете Вы можете найти в статье. 

					Ноябрь продолжает тенденцию, и мы спешим поделиться с Вами новым комплексным виджетом Report Manager. Давайте рассмотрим ег
				</p>

				<div class="blog-info">
					<span class="link">
						<img src="<?=$BASE_URL; ?>/images/date.svg" alt="">
						26.06.2020
					</span>
					<span class="link">
						<img src="<?=$BASE_URL; ?>/images/visibility.svg" alt="">
						21
					</span>
					<a class="link">
						<img src="<?=$BASE_URL; ?>/images/message.svg" alt="">
						4
					</a>
					<span class="link">
						<img src="<?=$BASE_URL; ?>/images/forums.svg" alt="">
						Веб-разработка
					</span>
					<a class="link">
						<img src="<?=$BASE_URL; ?>/images/person.svg" alt="">
						Nast1289
					</a>
				</div>
			</div>
			<div class="blog-item">
				<img class="blog-item--img" src="<?=$BASE_URL; ?>/images/2.png" alt="">
				<div class="blog-header">
					<h3>Обзор Report Manager от Webix</h3>		
				</div>
				<p class="blog-desc">
					Осень 2020 года стала плодотворным временем для специалистов Webix. 

					Команда Webix выпустила восьмую версию библиотеки пользовательского интерфейса Webix с двумя новыми комплексными виджетами. Первый - зто Scheduler, о котором мы подробно говорили ранее. Второй виджет - это Gantt chart в JavaScript. Подробную информацию об этом виджете Вы можете найти в статье. 

					Ноябрь продолжает тенденцию, и мы спешим поделиться с Вами новым комплексным виджетом Report Manager. Давайте рассмотрим ег
				</p>

				<div class="blog-info">
					<span class="link">
						<img src="<?=$BASE_URL; ?>/images/date.svg" alt="">
						26.06.2020
					</span>
					<span class="link">
						<img src="<?=$BASE_URL; ?>/images/visibility.svg" alt="">
						21
					</span>
					<a class="link">
						<img src="<?=$BASE_URL; ?>/images/message.svg" alt="">
						4
					</a>
					<span class="link">
						<img src="<?=$BASE_URL; ?>/images/forums.svg" alt="">
						Веб-разработка
					</span>
					<a class="link">
						<img src="<?=$BASE_URL; ?>/images/person.svg" alt="">
						Nast1289
					</a>
				</div>
			</div>
		</div>
	</div>
    <?php include "views/categories.php"; ?>
</section>	
</body>
</html>