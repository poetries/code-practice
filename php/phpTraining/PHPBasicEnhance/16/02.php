<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/24
 * Time: 0:15
 */


// include 和 require的区别
/*
共同点:都能用来包含文件
不同点:
*/

echo 'a<br />';

include('./dsafds.php');

echo 'b<br />';


require('./dsafds.php');
echo 'c<br />';

/*
打印结果
a
warning
b

fatal error

c没打出来


这说明:
include 是包含的意思
在找不到包含文件时,会报warning, 然后试着往下运行.

require 是必须的意思
在找不到包含文件时,会报fatal error, 然后不再往下运行.

*/
