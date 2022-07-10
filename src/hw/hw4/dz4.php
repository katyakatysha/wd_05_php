<?php
//1. +Создать форму, которая отправляет на сервер несколько файлов
//2. Сохранять файлы под оригинальным именем
//3. Если файл с таким именем уже существует, то сгенерировать новое имя
//4. Файлы сохранять в папку uploads, если директории не существует - ее создать программно
//5. Вывести список загруженых файлов с их путями, вывести размер файла в мегабайтах


session_start();

echo "<pre>";
print_r($_FILES);
echo "</pre>";

$connection = mysqli_connect('localhost', 'root','root', 'wd05');
if (!$connection){
    echo "Error:". mysqli_error();
}

if ($_SERVER['REQUEST_METHOD']=='POST') {
    $filePath = '';
    if (!empty($_FILES) && isset($_FILES['img'])) {
        $filePath = "img/".$_FILES['img']['name'];
        move_uploaded_file($_FILES['img']['tmp_name'], __DIR__."/".$filePath);
    }

}

?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="img[]"  multiple/>
    <br>
    <button type="submit">Send files</button>
</form>

</body>
</html>




