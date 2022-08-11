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
    <title>Программа iFun Screen Recorder</title>
    <meta charset="UTF-8">
    <meta property="og:image" content="https://klondikeitblogger.ga/img/programm/i.jpg">
    <meta property="og:url" content="https://klondikeitblogger.ga/">
    <meta property="og:title" content="Программа iFun Screen Recorder. Скачать">
    <meta property="og:description"
        content="iFun Screen Recorder – программа для записи видео с экрана, позволяющая записывать видео с отдельных окон, полноэкранные видео или выбранные участки экрана.">

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

    <section class="page-section recent-game-page spad">
        <div class="container">
            <div class="photo">
                <div class="DriverTest">
                    <img src="img/iobit.png" alt="">
                </div>
                <div class="iobith1">
                    <h1>iFun Screen Recorder</h1>
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
                            iFun Screen Recorder позволяет записывать видео экрана, отдельных окон или выбранного
                            участка экрана. Программа поддерживает запись видео со звуком и захватом голоса с микрофона,
                            а также настройку качества и формата выходного видео файла.

                            С помощью iFun Screen Recorder можно записывать любые видео с экрана компьютера, включая
                            запись онлайн-видео и видео-конференций. Программа имеет простой интерфейс и поддерживает
                            управление горячими клавишами.<br>

                            iFun Screen Recorder поддерживает запись видео в форматах MP4, AVI, FLV, MKV, MOV, TS, GIF и
                            запись звука в форматах MP3, AAC, AC3, FLAC, WMAV2. Доступна запись высококачественного
                            видео 4K до 60 кадров в секунду. Также, в настройках записи можно изменить битрейт видео и
                            качество аудио.
                        </p>
                        <div class="vozv">
                            <h1>Возможности iFun Screen Recorder :</h1>
                        </div>
                        <div class="osob">
                            <li>высококачественная запись экрана со звуком;</li>
                            <li>захват звуков и голосов микрофона;</li>
                            <li>запись 4K-видео;</li>
                            <li>настройки смены качества аудио и битрейта видео;</li>
                            <li>встроенный редактор;</li>
                            <li>применение горячих клавиш.</li>
                            <li>публикация видео на ресурсы;</li>
                        </div>
                        <div class="oper">
                            <h1>Операционные системы:</h1>
                        </div>
                        <div class="osob1">
                            <li>Windows 10 / 8.1 / 8 / 7 / Vista (32-bit и 64-bit)</li>
                        </div>
                    </div>
                </div>
                <a id="ifandonwlod" href="https://verstkag.github.io/filesprog/ifun-screen-recorder.exe">Скачать
                    сейчас!</a>
                <div class="Driv1 wow animate__animated animate__fadeInRight">
                    <img src="img/1621914972_iobit-ifun-screen-recorder.jpg" alt="">
                </div>
                <div class="Driver2 wow animate__animated animate__fadeInRight">
                    <img src="img/ifun_1.png" alt="">
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
    <script src="js/main2.js" type="text/javascript"></script>
</body>

</html>