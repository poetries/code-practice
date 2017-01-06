
<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/24
 * Time: 0:08
 */

// 自定义函数,反转数组


/**
从前到后读数组单元
读出来的值,放备用数组的头部
 **/
function rev1($arr) {
    $rev = array();

    foreach($arr as $v) {
        array_unshift($rev,$v);
    }

    return $rev;
}


$arr = array('a'=>'春','b'=>'夏','c'=>'秋','d'=>'冬');
print_r(rev1($arr));
/**
这个函数不够好,因为反转后,键是从0开始排的,这是array_unshift的特点
 **/



/**
从后往前读数组,读出来的单元,追加到一个备用数组里
 **/
$arr = array('a'=>'春','b'=>'夏','c'=>'秋','d'=>'冬');
function rev2($arr) {
    $rev = array();
    while(count($arr)) {
        $v = array_pop($arr);
        array_push($rev,$v);
    }

    return $rev;
}
print_r(rev2($arr));
// 同样不能保持键值


/***
思考题:
如何反转数组,并保持原来的键值????
 ***/