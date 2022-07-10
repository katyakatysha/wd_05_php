<?php

//1. Создать таблицу users (login password)
//2. Исправить авторизацию
//3. Пароль в md5

session_start();
//var_dump($_POST);
//if ($_POST) {
//    echo 'kdsjfkl';
//}
//if (!empty($_POST)){
//    echo 'nn';
//}
include_once "db.php";


if ($_SERVER["REQUEST_METHOD"] == "POST"){
    echo "post";
    $login = $_POST['login'];
    $password = md5($_POST ['password']);
    echo $login.$password;
    $sql = "SELECT * FROM wd05.users WHERE login = '$login' AND password = '$password';";
    var_dump($sql);
    $prov = mysqli_query($connection, $sql);
    $user=mysqli_fetch_assoc($prov);
    var_dump($user);
    if ($user){
        $_SESSION['is_admin']='1' ;//новый элемент добавили в массив Session
    }
}


echo '<pre>';
print_r($_SERVER);
echo '</pre>';



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

<form action="" method="post">
    <input type="text" name="login" placeholder="login">
    <input type="password" name="password" placeholder="password">
    <button type="submit">Login</button>
</form>

</body>
</html>
