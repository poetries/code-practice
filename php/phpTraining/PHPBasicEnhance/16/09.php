
<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/24
 * Time: 0:17
 */

// include/require(_once) ,即 _once的区别


$age = 5;

/*
include('/04.php');
echo $age; // 6

include('/04.php');
echo $age; // 7

include('/04.php');
echo $age; // 8
*/


include_once('04.php');
echo $age;//  6


include_once('04.php');
include_once('04.php');
include_once('04.php');
echo $age;// 6

/*

加once后,则在包含时,系统会进行判断
如果已经包含,则不会再次包含.
*/


/*
include require的取舍:
比如,是系统配置,缺少了,网站不让运行,自然用require
如果,是某一段统计程序,少了对网站只是少统计人数罢了,不是必须要,可以用include


include/require  --> _once
则是效率上区别

加_once虽然系统帮你考虑了只加载一次,但系统的判断卖到效率降低.
因此,更应该在开发之初,就把目录结构整理好.

尽量不要用_once的情况.