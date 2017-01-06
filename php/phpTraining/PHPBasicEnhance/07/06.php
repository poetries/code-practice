<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/23
 * Time: 0:02
 */
$str = 'hello';
echo 'hello有',strlen($str),'个字节';

echo '<br />';

$str2 = '中国';
echo '中国有',strlen($str2),'个字节';

// 而英文字符,是Ascii字符,几乎在所有的硬件/软件下,Ascii都是兼容的,都是1个字符.