<?php include("likes.php")?>
<?php
$file = "count.txt";
if(!is_file($file)){
 $fh = fopen($file, 'w');
 fwrite($fh, 0);
 fclose($fh);
}
$data = (int)file_get_contents($file);
?>
<?php 
$file = file("connect/view_count.txt");
$count = implode("", $file);
$count++;
$myfile = fopen("connect/view_count.txt","w");
fputs($myfile,$count);
fclose($myfile);
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>I2P</title>
	<meta charset="UTF-8">
	<meta property="og:image" content="https://klondikeitblogger.ga/programs12/I2P/img/I2PAndroid-console-0.9.20.png">
    <meta property="og:url" content="https://klondikeitblogger.ga/">
    <meta property="og:title" content="I2P">
    <meta property="og:description" content="I2P, или Invisible Internet Project — это на сегодняшний день самая анонимная сеть. Здесь ты можешь ходить по сайтам и пользоваться сервисами, не раскрывая сторонним лицам ни байта своей информации.">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="img/favicon.png" rel="shortcut icon"/>
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/mores.css"/>
	<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  	/>
  	<script src="wow.min.js"></script>
  	<script>new WOW().init();</script>

</head>
<body>
	<div class="hamburger-menu">
		<input id="menu__toggle" type="checkbox" />
		<label class="menu__btn" for="menu__toggle">
		  <span></span>
		</label>
		<a class="site-logo wow animate__ animate__fadeIn animated" href="#" style="visibility: visible; animation-name: fadeIn;">
			<img src="img/logo.png" alt="">
		</a>
		<ul class="menu__box">
			<a href="https://klondikeitblogger.ga/">Домашняя страница</a>
			<a href="https://klondikeitblogger.ga/program.html">Программы</a>
			<a href="https://klondikeitblogger.ga/program_android.html">Программы под Android</a>
			<a href="https://www.youtube.com/channel/UCUIvzn8IMJevEfua3OPD4mg">Наш YouTube</a>
			<a href="https://t.me/ait_bro01z">Наш Telegram</a>
		</ul>
	  </div>

	<section class="page-info-section set-bg" data-setbg="img/1.jpg">
		<div class="pi-content">
		</div>
	</section>
	<section class="page-section recent-game-page spad">
		<div class="container">
			<div class="photo">
				<div class="DriverTest">
						<img src="img/unnamed (2).png" alt="">
					</div>
					<div class="iobith1">
						<h1>I2P</h1>
					</div>
			</div>

<div class="static">
<div><img class="view" src="img/view.png" alt=""><span class="vie">Просмотров: <?=$count ?></span><div>
	<span id="like"><input type="button" id="link" value="Лайк!"/><img class="like" src="img/like.png" alt=""></span>
	<div class="counter"><h6 id="counter"><?= $data ?></h6></div>
	<script src="https://yastatic.net/share2/share.js"></script>
	<div class="soch"><div class="ya-share2" data-curtain data-size="l" data-shape="round" data-services="vkontakte,facebook,odnoklassniki,telegram,twitter,linkedin"></div></div>
</div>

			<div class="opis">
			<p id="text21">
					I2P, или Invisible Internet Project, — это на сегодняшний день самая анонимная сеть. Здесь ты можешь ходить по сайтам и пользоваться сервисами, не раскрывая сторонним лицам ни байта своей информации. И хоть появился I2P в 2003 году, сеть продолжает расти и шириться.
					I2P построен по принципу оверлея, то есть анонимный и защищенный слой работает поверх другой сети — интернета. Одна из главных особенностей I2P — децентрализованность. В этой сети нет серверов DNS, их место занимают автоматически обновляемые «адресные книги». А роль адресов играют криптографические ключи, никак не выдающие реальные компьютеры. Каждый пользователь проекта может получить свой ключ, который невозможно отследить.<br>
					
					Мир I2P не так богат, как луковые просторы Tor. Но все же при должном поиске в нем можно найти много полезного, устрашающего и просто интересного.
				</p>
			</div>
			<a id="ifandonwlod" href="https://verstkag.github.io/filesprogandroid/app.apk">Скачать сейчас!</a>
			<div class="Driv1 wow animate__animated animate__fadeInRight">
				<img src="img/I2PAndroid-console-0.9.20.png" alt="">
				</div>
	</section>
	<footer class="footer-section">
			<ul class="footer-menu">
				<li><a class="home" href="https://klondikeitblogger.ga/">Домашняя страница</a></li>
				<li><a class="youtube" href="https://www.youtube.com/channel/UCUIvzn8IMJevEfua3OPD4mg">Наш YouTube</a></li>
				<li><a class="telegram" href="https://t.me/ait_bro01z">Наш Telegram</a></li>
				<li><a class="prog" href="https://klondikeitblogger.ga/program.html">Программы</a></li>
				<li><a class="and_prog" href="https://klondikeitblogger.ga/program_android.html">Программы под Android</a></ul>
			</ul>
			<h6 class="copyright">©2021-2022 Автор проекта - <a class="it-personality" href="https://klondikeitblogger.ga/it-personality/"> IŦ-Personality</a></h6>

	</footer>
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="js/mi7.js" type="text/javascript"></script>
    </body>
</html>