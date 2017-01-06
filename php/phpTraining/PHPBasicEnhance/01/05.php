<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/22
 * Time: 8:45
 */

// 变量的值,有8种类型
// 常量的值, 有几种类型?

/*
$hei = 23;
define('HEI',23);

echo $hei,',',HEI,'<hr />'; // 整型可以赋给常量



$hei = 23.7;
define('HEI',23.7);

echo $hei,',',HEI,'<hr />'; // 浮点型可以赋给常量




$hei = '八千八';
define('HEI','八千八');

echo $hei,',',HEI,'<hr />'; // 字符串型可以赋给常量




$hei = true;
define('HEI',true);
var_dump($hei);
var_dump(HEI);   // 布尔型 也可以赋给常量




$hei = NULL;
define('HEI',NULL);
var_dump($hei);
var_dump(HEI);   // 布尔型 也可以赋给常量

*/



$hei = array(1,2); // 没基础的同学,可以先不管此数组部分
define('HEI',array(1,2));
var_dump($hei);
var_dump(HEI);   // 数组,不可以赋给常量.



/**
这5种变量 ,可以赋成一个常量
整型,浮点型,字符串型,布尔型,NULL
这5种:称为标量类型.

其他三种:array,object,resource,都不可以赋给常量.

 **/

