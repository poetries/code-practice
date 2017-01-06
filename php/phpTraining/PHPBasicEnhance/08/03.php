
<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/23
 * Time: 7:59
 */

/*
strstr($str,$needle)

作用: 是在$str中找到指定的$needle,而且是$needle第一次出现的位置,

返回该位置直到字符串结尾的这一部分

*/

$str = 'abc.def.jpg.exe';
echo strstr($str,'.'),'<br />'; // .def.jpg.exe


/***
经理说:
能否把第一次找到的$needle的位置 之前的字符串截出来呢?

答:能,从PHP5.3.0版本开始,strstr函数多了第3个可选参数,
 ***/

echo strstr($str,'.',true),'<br />';
// strstr === strchr 函数,


/**
经理说,
能否先把$needle 最后一次出现的位置找出来,
从该位置,一直截到结尾.
答:strchr
 **/
echo strrchr($str,'.'),'<br />';



/// 面试时,让你计算一个文件的后缀?
$file = 'new.txt';
echo strrchr($file,'.');
