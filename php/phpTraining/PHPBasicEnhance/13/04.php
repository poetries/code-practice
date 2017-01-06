<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/24
 * Time: 0:06
 */

// 刚才 我们用 array_key_exists 来判断数组的某个"键"存不存在
// 能否,有一个函数,判断某个值存不存在呢?
// 答:有 in_array



/*
题目: 老师把全班同学的名字,都放在一个数组里,
姓名非常多,让你找有没有叫"小刚"的同学.

你要怎么办?

思路: 用foreach循环数组,把每个数组单元的值与"小刚"比较
*/

$arr = array('小明','小华','老王','小刚','老李');


// 手写函数来完成
function inarray($search,$arr) {
    $find = false;

    foreach($arr as $v) {
        if($v === $search) {
            $find = true;
            break;
        }
    }

    return $find;
}


if(inarray('小刚',$arr)) {
    echo '有小刚<br />';
} else {
    echo '没有小刚<br />';
}


if(inarray('铁刚',$arr)) {
    echo '有铁刚<br />';
} else {
    echo '没有铁刚<br />';
}


/**
多学一行知识,就能少写一行代码

没必要自己写这个函数,系统直接有此函数.
 **/

if(in_array('小刚',$arr)) {
    echo '有小刚<br />';
} else {
    echo '没有小刚<br />';
}


if(in_array('铁刚',$arr)) {
    echo '有铁刚<br />';
} else {
    echo '没有铁刚<br />';
}
