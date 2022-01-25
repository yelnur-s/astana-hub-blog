<!DOCTYPE html>
<html lang="en">
<head>
	<title>Профиль</title>
    <?php include "views/head.php"; ?>
</head>
<body>


<?php  include "views/header.php"; ?>

<section class="container page">
	<div class="page-content">
		<div class="blogs">
			<div class="blog-item">
				<img class="blog-item--img" src="<?=$BASE_URL; ?>/images/1.png" alt="">

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

				<div class="blog-header">
					<h3>Обзор Report Manager от Webix</h3>
				</div>
				<p class="blog-desc">
					Осень 2020 года стала плодотворным временем для специалистов Webix. 

					Команда Webix выпустила восьмую версию библиотеки пользовательского интерфейса Webix с двумя новыми комплексными виджетами. Первый - зто Scheduler, о котором мы подробно говорили ранее. Второй виджет - это Gantt chart в JavaScript. Подробную информацию об этом виджете Вы можете найти в статье. 

					Ноябрь продолжает тенденцию, и мы спешим поделиться с Вами новым комплексным виджетом Report Manager. Давайте рассмотрим ег
				</p>
			</div>
		</div>

        <div class="comments">
            <h2>
                2 комментариея
            </h2>

            <div class="comment">
                <div class="comment-header">
                    <img src="<?=$BASE_URL ?>/images/avatar.png" alt="">
                    Елнур Сеитжанов
                </div>
                <p>
                В отличие от обычных виджетов пользовательского интерфейса JavaScript, комплексные виджеты - это полноценные приложения, которые не требуют дополнительной настройки и кастомизации.
                </p>
            </div>

            <div class="comment">
                <div class="comment-header">
                    <img src="<?=$BASE_URL ?>/images/avatar.png" alt="">
                    Елнур Сеитжанов
                </div>
                <p>
                В отличие от обычных виджетов пользовательского интерфейса JavaScript, комплексные виджеты - это полноценные приложения, которые не требуют дополнительной настройки и кастомизации.
                </p>
            </div>

            <span class="comment-add">
                <textarea name="" class="comment-textarea" placeholder="Введит текст комментария"></textarea>
                <button class="button">Отправить</button>
            </span>

            <span class="comment-warning">
                Чтобы оставить комментарий <a href="">зарегистрируйтесь</a> , или  <a href="">войдите</a>  в аккаунт.
            </span>

        </div>
	</div>
	

    <?php include "views/categories.php"; ?>
</section>	
</body>
</html>