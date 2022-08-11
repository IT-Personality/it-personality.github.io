<?php include("likes.php") ?>
<?php
$file = "counter.txt";
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
    <title>Reg Organizer</title>
    <meta charset="UTF-8">
    <meta property="og:image"
        content="https://klondikeitblogger.ga/programs12/reg/img/Reg-organizer-875-screen-rus.png">
    <meta property="og:url" content="https://klondikeitblogger.ga/">
    <meta property="og:title" content="Reg Organizer">
    <meta property="og:description"
        content="Это программное обеспечение, предназначено для полного удаления программ,настройки автоматически запускаемых приложений, расширенной чистки и оптимизации Windows.">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="img/favicon.png" rel="shortcut icon" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
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
        <a class="site-logo" href="https://klondikeitblogger.ga/" style="visibility: visible; animation-name: fadeIn;">
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
                        <img src="img/reg-organizer-logo1.png" alt="">
                    </div>
                    <div class="DriverTest">
                        <b>Reg Organizer</b>
                    </div>
                </div>
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
                    <p id="text21">
                        Reg Organizer обладает простым и понятным интерфейсом. Начать пользоваться Reg Organizer можно с
                        помощью одного клика - запустив сканирование записей в вашем реестре.

                        Разберитесь в настройках Reg Organizer (для этого вам понадобиться не много вашего личного
                        времени), тогда сможете с легкостью можете задать область проверки: установленные программы,
                        документы, область автозагрузки, расширения файлов, сопоставление типов файлов, динамических
                        библиотек, тем более интерфейс программы переведен на русский язык и вам это должно помочь.

                        При оптимизации области реестра можно задать выключение компьютера после завершения процедуры.
                        Во время выполнения одного процесса, вы не сможете запустить какой-либо другой процесс, а также
                        отменить запущенное задание.

                        Используя функцию ” Чистка дисков”, можно обнаружить ненужные файлы с помощью шаблонов (маски
                        ненужных файлов, которые можно настроить), битые и долго не используемые ярлыки, удалить
                        ненужные файлы из выбранной папки.

                        Также вы сможете устанавливать и удалять приложения (установить новую программу, использую
                        функцию отслеживания изменений, чтобы удалить ее, если она вам не понадобиться в будущем),
                        удалять программы из автозагрузки, исправлять ключи реестра.

                        В Настройках Reg Organizer можно отключить функцию резервного копирования, создать списки
                        исключений, выставить тип удаления файлов (удалить безвозвратно, удалить в корзину, переместить
                        в папку), задать перечень папок для сканирования, поменять настройки прокси-сервера, изменить
                        язык интерфейса.

                        Reg Organizer потребляет умеренное количество системных ресурсов, в программу включена очень
                        подробная справка. Использование пробной версии Reg Organizer накладывает определенные
                        ограничения при исправлении ошибок в реестре.<br>
                    <div class="osob">
                        <h1>Системные требования:</h1>
                        <li>
                            Операционные системы: Microsoft Windows Vista, 8, 8.1 и 10 (32- и 64-разрядные)
                        </li>
                        <li>
                            Права администратора
                        </li>
                        <li>
                            Оперативная память: от 256 MB RAM
                        </li>
                        <li>
                            Жесткий диск: 50 MB свободного места
                        </li>
                        </p>
                        <h1>Удаление программ:</h1>
                        <li>
                            Высокая скорость работы при анализе изменений на дисках и в реестре в реальном времени.
                        </li>
                        <li>
                            Список программ, установленных в системе, всегда доступен при клике на значке в области
                            уведомлений.
                        </li>
                        <li>
                            Простое, удобное и быстрое удаление программ.
                        </li>
                    </div>
                    <div><a id="show" href="https://verstkag.github.io/filesprog/reg-organizer.exe">Скачать!</a></div>
                </div>
                <div class="Driver2 wow animate__animated animate__fadeInRight">
                    <img src="img/Reg-organizer-875-screen-rus.png" alt="">
                </div>
                <div class="Driver3 wow animate__animated animate__fadeInRight">
                    <img src="img/reg-organizer.jpg" alt="">
                </div>
                <div class="Driver4 wow animate__animated animate__fadeInRight">
                    <img src="img/91c7028e7e80d810e37ed6ac6b66b6cb.png" alt="">
                </div>
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
        <h6 class="copyright">©2021-2022 Автор проекта - <a class="it-personality"
                href="https://klondikeitblogger.ga/it-personality/"> IŦ-Personality</a></h6>

        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="js/mi.js" type="text/javascript"></script>
    </footer>
</body>

</html>