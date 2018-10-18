<?php
/**
 * Created by PhpStorm.
 * User: Lena
 * Date: 10.10.2018
 * Time: 19:03
 */
/*
1.Создать галерею фотографий. Она должна состоять всего из одной странички,
на которой пользователь видит все картинки в уменьшенном виде и форму для загрузки нового изображения.
При клике на фотографию она должна открыться в браузере в новой вкладке.
Размер картинок можно ограничивать с помощью свойства width. При загрузке изображения необходимо делать
проверку на тип и размер файла.
*/
if (!empty($_FILES['attachment'])) {
    $file = $_FILES['attachment'];

    $srcFileName = $file['name'];
    $sizeFile = $file['size'];
    $filePath = $file['tmp_name'];
    $newFilePath = __DIR__ . '/uploads/' . $srcFileName;

    //Ограничение по загружаемым форматам
    $allowedExtensions = ['jpg', 'png', 'gif'];
    //Ограничение по объему файла
    $maxFile = 1024 * 1024 * 8;
    //Получение расширения файла
    $extension = pathinfo($srcFileName, PATHINFO_EXTENSION);

    //Проверка на формат файла
    if (!in_array($extension, $allowedExtensions)) {
        $error = 'Downloading files with such extension is not allowed!';
        //Проверка файла на размер
    } elseif ($sizeFile > $maxFile || ($file['error'] == UPLOAD_ERR_INI_SIZE)) {
        $error = 'File size over 8 MB!';
        //Проверка успешной загрузке на сервер временного файла
    } elseif ($file['error'] !== UPLOAD_ERR_OK) {
        $error = 'Error loading file';
        //Проверка на существоввние файла с таким именем
    } elseif (file_exists($newFilePath)) {
        $error = 'A file with such name already exist!';
        //Перемещение файла из врменной паки в указанную
    } elseif (!move_uploaded_file($filePath, $newFilePath)) {
        //Ошибка при перемещении файла из временной папки
        $error = 'Error loading file';
    } else {
        //Путь до картинки из дерриктории uploads при загрузке без ошибок
        $result = 'http://test.local/uploads/' . $srcFileName;
    }

}
?>


<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Home Work 4</title>
</head>
<body>

<!-- Отображение картинок в галереи -->
<div class="gallery">
<?php
$files = scandir(__DIR__ . '/uploads');
$links = [];
foreach ($files as $fileName) {
    if ($fileName === '.' || $fileName === '..') {
        continue;
    }
    $links[] = 'http://test.local/uploads/' . $fileName;
}
foreach ($links as $link):?>
    <a href="<?= $link ?>"><img src="<?= $link ?>" height="80px"></a>
    <?php endforeach;
?>
</div>

<!-- Форма загрузки картинок в галерею -->
<div class="upload_form">
    <p>Upload your pictures to the gallery!</p>
    <form action="/index.php" method="post" enctype="multipart/form-data">
        <input id="files" type="file" name="attachment">
        <input type="submit" value="Submit">
    </form>

<!-- Вывод ошибок загрузки -->
<?php if (!empty($error)): ?>
        <p class='upload_form_error'> <?= $error ?></p>
<?php endif; ?>
</div>


</body>
</html>

