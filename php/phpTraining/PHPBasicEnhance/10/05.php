<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/23
 * Time: 13:39
 */

//逻辑运算的短路特性与运算优先级

$house = false;
$car = true;

if($house && $car){
    echo '嫁';
}else{
    echo '不嫁';
}

$b = 6;
if($house && ($b=10)){//$b=6 被短路 没机会执行

}
echo $b,'<br>';

$b = 6;
if($house || ($b=10)){//$b=10

}

//利用短路特性写出简短的代码

if(!define("PI")){
    define('PI',3.14);
}
define('PI')||define('PI',3.14);//或前面为真 后面不执行


$a = 3;
$b = 5;

if($a = 5|| $b = 7){//此处要注意：||的优先级高于=赋值的优先级 5||$b 5为真 不执行后面语句
    $a++;
    $b++;
}
echo $a,$b;//1 6  5||$b是布尔值赋值给$a 布尔值没有自增自减运算


?>
</body>
</html>