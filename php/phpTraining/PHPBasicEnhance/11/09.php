<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/24
 * Time: 0:02
 */

$arr = array(3=>'梅',2=>'兰',5=>'竹',9=>'菊');
// 这一次,for循环没有规律可循,再用for循环不灵了.....
// 引入foreach


//foreach是怎么工作的呢?

foreach($arr as $k=>$v) { // 这是说:循环数组的每个单元,把单元的键赋给$k,值赋给$v
    echo $k,'~',$v,'<br />';
}

echo $k,'~',$v; // 停留在最后一次赋值的情况


// 有人说,我不想循环时,要数组的键,我只是想循环着打印每个单元值
echo '<hr />';

foreach($arr as $v) { // 这是说:循环数组的每个单元,把单元的值,赋给$v
    echo $v,'<br />';
}


// 有人说,我不想循环时,要数组的值,我只想循环打印数组的键
foreach($arr as $k) {
    echo $k,'<br />'; // 打印的还是值,$k只是被赋值而已
}


// 有人说这样
/*
foreach($arr as $k=>) { // 语法错误
    echo $k,'<br />';
}
*/