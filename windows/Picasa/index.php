<?php include("likes.php") ?>
<?php
$file = "count.txt";
if (!is_file($file)) {
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
$myfile = fopen("connect/view_count.txt", "w");
fputs($myfile, $count);
fclose($myfile);
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Программа Picasa</title>
    <meta charset="UTF-8">
    <meta property="og:image" content="https://klondikeitblogger.ga/img/programm/p.jpg">
    <meta property="og:url" content="https://klondikeitblogger.ga/">
    <meta property="og:title" content="Программа Picasa. Скачать">
    <meta property="og:description"
        content="Picasa - приложение от компании Google, которое позволяет просматривать и упорядочивать изображения на вашем компьютере.">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="img/favicon.png" rel="shortcut icon" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/mores.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="wow.min.js"></script>
    <script>
    new WOW().init();
    </script>

</head>

<body>
    <div class="hamburger-menu">
        <input id="menu__toggle" type="checkbox" />
        <label class="menu__btn" for="menu__toggle">
            <span></span>
        </label>
        <a class="site-logo wow animate__ animate__fadeIn animated" href="https://klondikeitblogger.ga/"
            style="visibility: visible; animation-name: fadeIn;">
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
                <div class="DriverTest">
                    <img src="img/picasa-logo-159.png" alt="">
                </div>
                <div class="iobith1">
                    <h1>Picasa</h1>
                </div>
            </div>

            <div class="static">
                <div><img class="view" src="img/view.png" alt=""><span class="vie">Просмотров: <?= $count ?></span>
                    <div>
                        <span id="like"><input type="button" id="link" value="Лайк!" /><img class="like"
                                src="img/like.png" alt=""></span>
                        <div class="counter">
                            <h6 id="counter"><?= $data ?></h6>
                        </div>
                        <script src="https://yastatic.net/share2/share.js"></script>
                        <div class="soch">
                            <div class="ya-share2" data-curtain data-size="l" data-shape="round"
                                data-services="vkontakte,facebook,odnoklassniki,telegram,twitter,linkedin"></div>
                        </div>
                    </div>

                    <div class="opis">
                        <p id="text21">
                            Picasa – программа-органайзер ваших фотографий и видеоматериалов. Это программное
                            обеспечение, с помощью которого Вы можете искать, просматривать, редактировать, печатать
                            фотографии и обмениваться ими, превращать фотографии в "фильм" или коллаж, создавать
                            слайд-шоу и многое другое.<br>
                            Программа сканирует весь винчестер или указанные пользователем папки, индексирует все
                            фотографии, графику и видео файлы, сортирует их в визуальные альбомы, упорядоченные по
                            датам, так что потеряться ни одной картинке не удастся. Расположение фотографий в файловой
                            системе не меняется.<br>
                            Picasa может отобразить любую выбранную фотографию в виде мозаики, позволяя напечатать
                            каждую часть и объединить их в плакат, размер которого может – превышать оригинал на 1 000%.
                            Может превратить фотографии в "фильм" или коллаж или создать прекрасные слайд-шоу.
                        </p>
                        <div class="vozv">
                            <h1>Особенности:</h1>
                        </div>
                        <div class="osob">
                            <p id="text2">
                                Новая версия программы Picasa на русском языке, поможет быстро разобраться с её
                                функциями. Возможности этой программы приятно удивят вас, так как здесь можно найти все
                                что необходимо для качественной обработки изображений. На наш взгляд у редактора большое
                                будущее. Он имеет множество новых технологий и разработок. При первом запуске программы,
                                она автоматически найдет и отсортирует все фото на вашем компьютере, конечно же, если вы
                                ей это не запретите.Будет организована визуальная библиотека фото для быстрой работы.
                                Именно поэтому вам стоит скачать Picasa с нашего сайта, и попробовать её в действии.
                            </p>
                        </div>
                        <div class="oper">
                            <h1>Операционные системы:</h1>
                        </div>
                        <div class="osob1">
                            <li>Windows 10, 8.1, 8, 7, XP</li>
                        </div>
                    </div>
                </div>
                <a id="ifandonwlod" href="https://verstkag.github.io/filesprog/picasa-3.exe">Скачать сейчас!</a>
                <div class="Driv1 wow animate__animated animate__fadeInRight">
                    <img src="img/1121fa580103480387ec3a142cbaa097ad3050b5e76dcc33c61b4a182945ad48_800.jpg" alt="">
                </div>
                <div class="Driver2 wow animate__animated animate__fadeInRight">
                    <img src="img/picasa-3-obzor-luchshey-programmy-dlya-prosmotra-izobrazheniy-screen-01.jpg" alt="">
                </div>
    </section>
    <footer class="footer-section">
        <ul class="footer-menu">
            <li><a class="home" href="https://klondikeitblogger.ga/">Домашняя страница</a></li>
            <li><a class="youtube" href="https://www.youtube.com/channel/UCUIvzn8IMJevEfua3OPD4mg">Наш YouTube</a></li>
            <li><a class="telegram" href="https://t.me/ait_bro01z">Наш Telegram</a></li>
            <li><a class="prog" href="https://klondikeitblogger.ga/program.html">Программы</a></li>
            <li><a class="and_prog" href="https://klondikeitblogger.ga/program_android.html">Программы под Android</a>
        </ul>
        </ul>
        <h6>©2021-2022 Автор проекта - <a class="it-personality" href="https://klondikeitblogger.ga/it-personality/">
                IŦ-Personality</a></h6>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="js/maib.js" type="text/javascript"></script>
</body>

</html>