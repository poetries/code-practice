<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/24
 * Time: 0:01
 */


$arr = array('春','夏','秋','冬');

/*
要求: 打印出'
春
夏
秋
冬
即:把4个单元值,挨个儿打出来
*/


// for循环来循环数组单元
// 默认情况下,数组的键从0开始,逐一递增,最大的键是其数组的(单元个数-1)
// 有规律可循环.

// 如何计算数组的单元个数呢?
// 答: count函数

echo count($arr),'<br />';

for($i=0,$i<count($arr);$len;$i++) {
    echo $arr[$i],'<br />';
}


// 优化这道题,细节能体现一个人的水平

for($i=0,$len = count($arr);$i<$len;$i++) {
    echo $arr[$i],'<br />';
}

// 同学们课下里可