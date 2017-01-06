<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/21
 * Time: 0:16
 */

// 动态变量

/*
动态变量,即---变量名,还可以是一个变量

PHP的语法非常灵活,允许变量名字,仍是一个变量.
*/



$str = 'hello';

$hello = 'welcome to zixue.it';


echo $str; // hello;
echo $hello; // welcome to zixue.it

echo $$str;  // $str的值是hello, hello又充当了下一个变量的名字,即最终显示$hello的值,即welcom...

echo '<hr />';

$a = 'hello';
$hello = 'world';
$world = 'china';
echo $$$a;


// $a : hello , $$a==$hello == world;  $$$a = $world == china;
