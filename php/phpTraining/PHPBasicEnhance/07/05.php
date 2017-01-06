<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/23
 * Time: 0:02
 */
/*
字符串函数讲解
PHP中,字符串函数非常非常多,
在此,归为9类,
每类,有代表的讲解1-2个.


严重警告同学们:
务必把老师PPT上列出的字符串函数练习遍.
同时,也学会看手册.

*/


$str = 'hello';
echo 'hello有',strlen($str),'个字节';

echo '<br />';

$str2 = '中国';
echo '中国有',strlen($str2),'个字节';


/**
为什么"中国"是6个字节呢?
我们的.php文件,是utf-8编码.
中文在utf-8编码规则中,一个中文,占3个字节.
因此,'中国'占6个字节.

 **/
