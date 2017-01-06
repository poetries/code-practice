<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/23
 * Time: 8:02
 */


// 把1234567,转成 1,234,567的形式


$num = '1234567';

function t1($num) {
    $arr = str_split(strrev($num),3);
    return strrev(implode(',',$arr));
}


print_r(t1($num));


echo '<br />';

function t2($num) {
    $num = strrev($num);
    $num = strrev(chunk_split($num,3,','));
    $num = ltrim($num,',');

    return $num;
}


print_r(t2($num));



echo '<br />';


// 系统函数,一句话搞定.
echo number_format($num);