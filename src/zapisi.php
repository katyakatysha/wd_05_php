
//if (!empty($_FILES) && isset($_FILES['img'])) {
//    $filePath = "img/".$_FILES['img']['name'];
////    copy($_FILES['img']['tmp_name'], __DIR__.'/1.jpeg');
//    move_uploaded_file($_FILES['img']['tmp_name'], __DIR__."/".$filePath);
//}

//////////////////////////////////////
//if (isset($_FILES['image'])){
//    $errors=array();
//    $file_name =$_FILES['img']['name'];
//    $file_size =$_FILES['img']['size'];
//    $file_tmp= $_FILES['img']['tmp_name'];
//    $file_type=$_FILES['img']['type'];
//    $file_ext=strtolower(end(explode('.',$_FILES['imge']['name'])));
//
//    $expensions=array("jpeg","jpg","png");
//
//    if($file_size>20971552){
//        $errors[]='Размер файла не должен превышать 2 МБ';
//
//    }
//
//    if (empty($errors)==true){
//        move_uploaded_file($file_tmp,"img/".$file_name);
//        echo "Success";
//    } else {
//        print $errors;
//    }
//

//
//
//
//?>


<!---->
<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport"-->
<!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <title>Document</title>-->
<!--</head>-->
<!--<body>-->
<!---->
<!--<form action="" method="post" enctype="multipart/form-data"></form>-->
<!--<input type="file" name="img">-->
<!--<input type="submit">-->
<!--<ul>-->
<!--    <li>Sent file: --><?php //echo $_FILES['image']['name'];?><!-- </li>-->
<!--    <li>File size: --><?php //echo $_FILES['image']['size'];?><!--</li>-->
<!--    <li>File type: --><?php //echo $_FILES['image']['type'];?><!--</li>-->
<!--</ul>-->
<!--</body>-->
<!--</html>-->
