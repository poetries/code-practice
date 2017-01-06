<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/22
 * Time: 9:30
 */

// 字符串
// 在PHP中,字符串,有一句运算 ,就是拼接.
// 运算符是 "."


$str1 = 'hello';
$str2 = ' ';
$str3 = 'world';

$str = $str1 . $str2 .$str3;

echo $str,'<br />'; // hello world;


// 新手的疑问,甚至工作半年的也疑问.
// 怎么可以用','

echo $str1,$str2,$str3,'<br />'; // hello world
echo $str1 .  $str2 . $str3 . '<br />'; // hello world


/*
这一行,是$str1,$str2,$str3在内存中,拼接运算,
运算出一个'hello world'一个大字符串,
然后echo 之,得到判断的结果
echo $str1 .  $str2 . $str3 . '<br />'; // hello world



echo $str1,$str2,$str3,'<br />'; // hello world
echo 是一个语句,负责输出用的,
可以通过','分割,一次输出多个变量或值来.


综上:
用 ' . '是先拼接,再整个输出.
用 ' , '是挨个儿把3个变量输出.


面试时,会碰到这个问法:
上面两种情况,用','和用'.' 哪个输出的快,效率高?

答:逗号快,因为省去了一次拼接计算的过程.
*/



