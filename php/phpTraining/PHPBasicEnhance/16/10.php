
<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/24
 * Time: 0:18
 */

/*
1: php.ini里修改error_reporting 选项
2: 可以在php页面里,用error_reporting()函数来修改
*/

/*
错误级别用2进制的值来表示的
1111 1111 1111 111
从左到右,每位上的1,代表一种错误级别
*/

/*
fatal error致命错误: 0000 0000 0000 001 开启
warning 警告错误   : 0000 0000 0000 010 开启
NOTICE 警告        : 0000 0000 0001 000 开启
*/

/*
error_reporting(11);
echo $a+$b; // notice报出来
echo 3/0;   // warning报出来
echo dsafdsa(); // fatal报出来
*/

// 不要报NOTICE了
/*
error_reporting(3);
echo $a+$b; // notice不报了
echo 3/0;   // warning报出来
echo dsafdsa(); // fatal报出来
*/

// 来点狠的,任何错误都不错
/*
error_reporting(0);
echo dsafdsa(); // fatal不报
echo $a+$b; // notice报出来
echo 3/0;   // warning报出来
*/

// 报所有错误,
// 我们不必去通过2进制去算了
/*
系统为我们把各个级别的值,用系统常量代替了.
E_ERROR 1
E_WARNING 2
E_NOTICE 8
*/

// 报所有错误
/*
error_reporting(E_ALL);
echo $a+$b; // notice报出来
echo 3/0;   // warning报出来
echo dsafdsa(); // fatal报出来
*/

// 报除了notice之个的所有错误,即除了NOTICE,其他都报.

error_reporting(E_ALL & ~E_NOTICE);

echo $a+$b; // notice不报
echo 3/0;   // warning报出来
echo dsafdsa(); // fatal报出来
