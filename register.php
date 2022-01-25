<!DOCTYPE html>
<html lang="en">
<head>
	<title>Регистрация в систему</title>
	<?php include "views/head.php"; ?>
</head>
<body>
	<?php include "views/header.php"; ?>	

	<section class="container page">
		<div class="auth-form">
            <h1>Регистрация</h1>
			<form class="form" method="POST">
                <fieldset class="fieldset">
                    <input class="input" type="text" name="title" placeholder="Введите email">
                </fieldset>
                <fieldset class="fieldset">
                    <input class="input" type="text" name="title" placeholder="Полное имя">
                </fieldset>
                <fieldset class="fieldset">
                    <input class="input" type="text" name="title" placeholder="Nickname">
                </fieldset>
                <fieldset class="fieldset">
                    <input class="input" type="password" name="title" placeholder="Введите пароль">
                </fieldset>
                <fieldset class="fieldset">
                    <input class="input" type="password" name="title" placeholder="Подтвердить пароль">
                </fieldset>

                <fieldset class="fieldset">
                    <button class="button" type="submit">Зарегистрироваться</button>
                </fieldset>
			</form>
		</div>
	</section>
</body>
</html>