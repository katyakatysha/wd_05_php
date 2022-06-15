<?php
//
////массив 1 способ (индексный массив)
//
//$array = array(1, 2, 5, 'jskghjk', false);
//echo "<pre>";
//print_r($array);
//echo "<pre>";
//
////массив 2 способ
//
//$array2 = [1, 2, 5, 'jskghjk', false];
//echo "<pre>";
//print_r($array2);
//echo "<pre>";
//
//
//$array3 = [
//    4 => 'dshkjhfdskjh',
//    5 => 'jdshkjdsj',
//    6 => 'sghkjsfh',
//];
//echo "<pre>";
//print_r($array3);
//echo "<pre>";
//
//
//$array4 = [
//    'el1' => 'dshkjhfdskjh',
//    'el2' => 'jdshkjdsj',
//    'el3' => 545465,
//    null => 1111,
//    123, 54654
//];
//echo "<pre>";
//print_r($array4);
//echo "<pre>";
//
//echo $array4['el2'];
//echo $array4['el3'];
//
//$array4['ololo'] = 'drsfhkjsdf';
//
////1 task (Создать массив четных чисел от 0 до 10)
//
//$array5 = [0, 2, 4, 6, 8
//];
//echo "<pre>";
//print_r($array5);
//echo "<pre>";
//
////2 task (Создать массив с семьей)
//
//$array6 = [
//    'mom' => 'Nata',
//    'dad' => 'Tolia',
//    'me' => 'Kate',
//];
//echo "<pre>";
//print_r($array6);
//echo "<pre>";
//
////ассоциативный массив
//
//$post = [
//    'title' => 'Моя первая страница',
//    'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the. ',
//    'img' => 'https://yt3.ggpht.com/a/AGF-l79YPVh2GblCENX24dhPNd8U6Qq4tJGniRTklQ=s900-c-k-c0xffffffff-no-rj-mo',
//];
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
<!--<h1>--><? //= $post ['title'] ?><!--</h1>-->
<!--<img src="--><? //= $post['img'] ?><!--" alt="">-->
<!--<p>--><? //= $post ['content'] ?><!--</p>-->
<!--</body>-->
<!--</html>-->
<!---->
<!---->
<!---->
<!---->
<?php
//многомерные массивы

//$array7 = [
//    1,
//    2,
//    3,
//    4,
//    3,
//    6,
//    [54566, ['dfkjgdfgj']]
//];
//echo "<pre>";
//print_r($array7);
//echo "<pre>";
//
//echo $array7[6][1][0];
//$level1 = $array7[6];
//$level2 = $level1[1];
//$level3 = $level2[0];
//echo $level3;
//
////I love PHP
//echo "<br>";
//$array8 = ["love", "PHP", "I"];
//echo $array8 [2]." ".$array8 [0]." ".$array8 [1];


//echo 'Что мне надо для диплома:';
//$array9 = [
//    'Для front end:',
//    [
//            'html',
//        'css',
//        'js',
//
//    ],
//    'Для back end:',
//    [
//            'php',
//    ]
//    ];
//
//echo "<pre>";
//print_r($array9);
//echo "<pre>";

//массив студентов
echo 'Ученики TMS:';
$array10 = [
    'WD1' => [
        ['name' => 'Ilya', 'lastname'=>'Ivanov',],
        ['name' => 'Sveta', 'lastname'=>'Petrova',]


    ],
    'WD2' => [
            ['name' => 'Ivan', 'lastname'=>'Sidorov',],
            ['name' => 'Ira', 'lastname'=>'Omelkovich',],

    ],
    'WD3' => [
        ['name' => 'Petr', 'lastname'=>'Gusov',],
        ['name' => 'Liza', 'lastname'=>'Opushkina',],
    ],
];


echo "<pre>";
print_r($array10);
echo "</pre>";
///echo $array10['WD1'][0]['name']." ".$array10['WD1'][0]['lastname'];



?>

