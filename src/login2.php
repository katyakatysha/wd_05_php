<?php
session_start();

echo "<pre>";
print_r($_POST);
echo "</pre>";

echo "<pre>";
print_r($_FILES);
echo "</pre>";

if(!empty($_FILES)&& isset($_FILES['img'])){
    move_uploaded_file($_FILES['img']['tmp_name'], __DIR__.'2.jpeg');
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
    <input type="text" name="title" />
    <br>
    <br>
    <textarea name="content" id="editor"></textarea>
    <br>
    <input type="file" name="img">
    <br>
    <button type="submit">Send</button>
</form>

</body>
</html>