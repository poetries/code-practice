<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/24
 * Time: 0:16
 */


/*
PHP中,有一个魔术引号的概念,
如何打开?
答:在PHP.ini中,magic_quotes_gpc=On;
重启apache即可

然后做下面的实验
发现$_GET被自动转义了.

这是魔术引号的作用---魔术引号开启时,$_GET,$_POST,$_COOKIE数据,会被系统自动转义.
*/
print_r($_GET); // 此时已被系统转义了.



function abc(&$v,$k) {
    $v = addslashes($v);
}

array_walk_recursive(&$_GET,'abc');
print_r($_GET);  // 到此处,第二次转义,转多了.



/***
要想合理的转义,得先判断 魔术引号 有没有开启
如果开启了,不要再转义了,
如果没开启,再转义.


问:如何判断魔术引号没有开启?
答: 用magic_quotes_gpc()来判断
 ***/