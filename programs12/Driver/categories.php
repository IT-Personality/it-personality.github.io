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
	<title>Driver Booster. Скачать!</title>
	<meta charset="UTF-8">
	<meta property="og:image" content="https://klondikeitblogger.ga/programs12/Driver/img/thumb11.jpg">
    <meta property="og:url" content="https://klondikeitblogger.ga/">
    <meta property="og:title" content="Driver Booster">
    <meta property="og:description" content="Программа, созданная для обновления драйверов для аудио, видео, USB-девайсов и для других устройств на вашем ПК, которые устарели и поэтому могут негативно повлиять на работу компьютера.">

	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link href="img/favicon.png" rel="shortcut icon"/>
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  	/>
  	<script src="wow.min.js"></script>
	  <script src="https://unpkg.com/soloalert" type="text/javascript"></script>
  	<script>new WOW().init();</script>

</head>
<body>
<div id="fb-root"></div>
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

	<section class="page-section recent-game-page spad">
		<div class="container">
			<div class="photo">
		<div class="container_img">
				<div class="Driv1">
				<img src="img/driver-booster-free-logo-1.png" alt="">
				</div>
				<div class="DriverTest">
						<b>Driver Booster</b>
				</div>
		</div>
<div class="static">
<div><img class="view" src="img/view.png" alt=""><span class="vie">Просмотров: <?=$count ?></span><div>
	<span id="like"><input type="button" id="link" value="Лайк!"/><img class="like" src="img/like.png" alt=""></span>
	<div class="counter"><h6 id="counter"><?= $data ?></h6></div>
	<script src="https://yastatic.net/share2/share.js"></script>
	<div class="soch"><div class="ya-share2" data-curtain data-size="l" data-shape="round" data-services="vkontakte,facebook,odnoklassniki,telegram,twitter,linkedin"></div></div>
</div>

		<p id="text21">
				Driver Booster – это программа, созданная для обновления драйверов для аудио, видео, USB-девайсов и для других устройств на вашем ПК, которые устарели и поэтому могут негативно повлиять на работу компьютера и вызвать системные ошибки.
				Этот инструмент позволяет искать и определять устаревшие драйверы, а также автоматически загружать любые необходимые обновления.
				Кроме этого, приложение защищает ваш компьютер от сбоев в работе аппаратного обеспечения, любых конфликтов и поломок. Приложение достаточно просто в использовании, и оно делает все автоматически, гарантируя эффективность работы вашей системы.
				Как только вы запустите Booster Driver, программа проведет сканирование вашего компьютера на необходимость каких-либо обновлений, удалит все устаревшие драйверы и заменит их самыми новыми версиями.
				Также это приложение имеет очень полезную настройку 'Игровой режим', которая оптимизирует все драйверы системы, улучшая их производительность в играх, благодаря чему играть будет намного лучше.
				Driver Booster – это быстрый и безопасный инструмент, который не потребляет много ресурсов компьютера, поэтому не влияет на производительность других программ, а вообще говоря, он даже улучшает работу компьютера.<br>
				</p>
			
				<div class="osob">
				<h1>Основные особенности программы:</h1>
				<li>
					Автоматически определяет устаревшие драйверы.
				</li>
				<li>
					Обновление в 1 клик для максимальной производительности оборудования.
				</li>
				<li>
					Тюнинг драйверов для быстродействия игр.
				</li>
				<li>
					Быстро, безопасно и просто в использовании.
				</li>
				</div>
			<div class="content_show"><a id="show" href="https://verstkag.github.io/filesprog/driver_booster_setup.exe">Скачать!</a></div>
			<div class="Driver2 wow animate__animated animate__fadeInRight">
					<img src="img/thumb11.jpg" alt="">
				</div>
				<div class="Driver3 wow animate__animated animate__fadeInRight">
					<img src="img/thumb22.jpg" alt="">
				</div>
			</div>
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
	<script src="js/mi.js" type="text/javascript"></script>
    </body>
</html>