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
 * Date: 2016/5/21
 * Time: 0:26
 */


// 变量类型的判断



$a = 123;  // 整型

$b = '123';  // 字符串型

$c =  78.9; // 浮点型

$d = null;  // NULL型

$e = true; // 布尔型



if(is_int($a)) {
    echo 'a是int型','<br />';
} else {
    echo 'a不是Int型,','<br />';
}


if(is_string($b)) {
    echo 'b是string型','<br />';
} else {
    echo 'b不是string型,','<br />';
}




// gettype ,直接获取一个变量的类型.

echo 'c是',gettype($c),'<br />';
echo 'd是',gettype($d),'<br />';
echo 'e是',gettype($e),'<br />';

?>


</body>
</html>