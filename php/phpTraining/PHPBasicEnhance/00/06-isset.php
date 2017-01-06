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
 * Time: 23:21
 */

// 变量的检测


// 在讲解的NULL的过程,有些变量,根本就没有声明过,
// 或者是被unset掉了,再去引用变量的时候,提示一个NOTICE

// 问:我能不能,在用这个变量之前,先判断一个,这个变量有没有.
// 如果有,我再进一步操作.


// 答:可以.  即---如何检测一个变量已存在.


// 知识点: 用isset 来检验 一个变量是否存在.



$age = 23;

if(isset($age)) {
    echo 'age变量已经声明了';
} else {
    echo 'user变量根本就不存在';
}



// 不声明$user

if(isset($user)) {
    echo 'user变量已经声明了';
} else {
    echo 'user变量根本就不存在';
}


?>
</body>
</html>