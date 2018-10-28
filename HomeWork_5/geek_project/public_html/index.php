<?php
/**
 * Created by PhpStorm.
 * User: Lena
 * Date: 27.10.2018
 * Time: 15:02
 */

 /**
 * начальная страница сайта
 */
    // поключаем конфигурации приложения
    require '../config/main.php';
    // функции для работы с базой данных
    include '../engine/database.php';
    $files = getItemArray('select * from `gallery`');
 ?>


<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css">
    <title>Home Work 5</title>
</head>
<body>

<!-- Отображение картинок в галереи -->

    <h1>Галерея изображений</h1>
    <div class="gallery">
        <?php foreach ($files as $fileName) {
                foreach ($fileName as $key => $value):
                    if ($key == 'link') {
                        $link = './img/' . $value . '?id=' . $fileName['id'];
                ?>

                    <a href="<?= $link ?>" target="_blank"><img src="<?= $link ?>" alt = "<?= $fileName['name'] ?>" height="80px">
                    </a>

                <?php } ?>
                <?php endforeach; ?>
        <?php } ?>


    </div>
</body>
</html>