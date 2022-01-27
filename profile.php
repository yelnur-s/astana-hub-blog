<?php 
	include "config/db.php";
	include "common/time_ago.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Профиль</title>
	<?php include "views/head.php"; ?>
</head>
<body>

<?php  
	include "views/header.php";
?>

<section class="container page">
	<div class="page-content">
		<div class="page-header">
			<h2>Мои блоги</h2>
			<a class="button" href="<?=$BASE_URL ?>/newblog.php">Новый блог</a>
		</div>

		<div class="blogs">

<?php

		$query = mysqli_query($con, "SELECT * FROM blogs");

		if(mysqli_num_rows($query) > 0) {
			while($row = mysqli_fetch_assoc($query)) {
?>

			<div class="blog-item">
				<img class="blog-item--img" src="<?php echo $BASE_URL.$row["img"]; ?>" alt="">
				<div class="blog-header">
					<h3><?=$row["title"]?></h3>
					<span class="link">
						<img src="<?=$BASE_URL; ?>/images/dots.svg" alt="">
						Еще

						<ul class="dropdown">
							<li> <a href="<?=$BASE_URL ?>/editblog.php?id=<?=$row["id"] ?>">Редактировать</a> </li>
							<li><a href="<?=$BASE_URL ?>/api/blog/delete.php?id=<?=$row["id"] ?>" class="danger">Удалить</a></li>
						</ul>
					</span>

				</div>
				<p class="blog-desc">
				<?=$row["description"]?>
				</p>

				<div class="blog-info">
					<span class="link">
						<img src="<?=$BASE_URL; ?>/images/date.svg" alt="">
						<?php echo to_time_ago(strtotime($row["date"])); ?>
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
			<?php
			}
		} else {
			?>

			<h1>0 blogs</h1>

<?php
		}
?>

		</div>
	</div>
	<div class="page-info">
		<div class="user-profile">
			<img class="user-profile--ava" src="<?=$BASE_URL; ?>/images/avatar.png" alt="">

			<h1>Елнур Сеитжанов</h1>
			<h2>В основном пишу про веб - разработку, на React & Redux</h2>
			<p>285 постов за все время</p>
			<a href="" class="button">Редактировать</a>
		</div>
	</div>
</section>	
</body>
</html>