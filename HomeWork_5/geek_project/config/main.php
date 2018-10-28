<?php
/**
 * Created by PhpStorm.
 * User: Lena
 * Date: 27.10.2018
 * Time: 15:04
 */

 // подгрузка всех настроек приложения
$config = array_merge(
    include 'app.php',
    include 'db.php'
);
// первоначальный запуск (сессия, константы, окружение)
define('ROOT', dirname(__DIR__));