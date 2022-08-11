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
    <title>7-Zip. Скачать</title>
    <meta charset="UTF-8">
    <meta property="og:image" content="https://klondikeitblogger.ga/moreprog/7-Zip/img/7-zip.jpg">
    <meta property="og:url" content="https://klondikeitblogger.ga/">
    <meta property="og:title" content="7-Zip. Скачать">
    <meta property="og:description"
        content="7-Zip - отличный архиватор для Windows к достоинствам которого можно смело отнести комфортную скорость работы, поддержку всех современных форматов и высокую степень сжатия.">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="img/favicon.png" rel="shortcut icon" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/more.css" />
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

    <section class="page-info-section set-bg" data-setbg="img/1.jpg">
        <div class="pi-content">
        </div>
    </section>
    <section class="page-section recent-game-page spad">
        <div class="container">
            <div class="photo">
                <div class="DriverTest">
                    <img src="img/7zip.png" alt="">
                </div>
                <div class="iobith1">
                    <h1>7-Zip</h1>
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
                            7-Zip - отличный архиватор для Windows к достоинствам которого можно смело отнести
                            комфортную скорость работы, поддержку всех современных форматов и высокую степень сжатия
                            (для форматов ZIP и GZIP, программа предлагает сжатие которое в 2-10 % лучше чем сжатие
                            предоставляемое архиваторами PKZip и WinZip). Приложение интегрируется в Проводник Windows.
                            Присутствует версия для командной строки и плагин для FAR Manager, который позволяет
                            работать с архивами без внешних архиваторов.
                        </p>
                        <div class="vozv">
                            <h1>Возможности 7-Zip :</h1>
                        </div>
                        <div class="osob">
                            <li>Мощный менеджер файлов</li>
                            <li>Интегрирование в проводник Windows</li>
                            <li>Плагин для FAR Manager</li>
                            <li>Большое количество поддерживаемых форматов, включая 7z, ZIP, GZIP, BZIP2, TAR, ARJ, CAB,
                                CHM,<br> CPIO, DEB, DMG, HFS, ISO, LZH, LZMA, MSI, NSIS, RAR, RPM, UDF, WIM, XAR и Z
                            </li>
                            <li>Сильное шифрование в форматах 7z и ZIP</li>
                            <li>Высокая степень сжатия благодаря новому формату 7z с компрессией LZMA</li>
                        </div>
                        <div class="oper">
                            <h1>Операционные системы:</h1>
                        </div>
                        <div class="osob1">
                            <li>Windows 11, 10, 8.1, 8, 7</li>
                        </div>
                    </div>
                </div>
                <a id="ifandonwlod" href="https://verstkag.github.io/filesprog/7z1900-x64.exe">Скачать сейчас!</a>
                <div class="Driv1 wow animate__animated animate__fadeInRight">
                    <img src="img/7-zip.jpg" alt="">
                </div>
                <div class="Driver2 wow animate__animated animate__fadeInRight">
                    <img src="img/qbittorrent-qbittorrent.jpg" alt="">
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
    <script src="js/mi.js" type="text/javascript"></script>
</body>

</html>