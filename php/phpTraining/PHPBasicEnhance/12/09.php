<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/24
 * Time: 0:05
 */

// 用each + list 自己写一个模拟foreach的函数


function for_each($arr) {
    while(list($k,$v) = each($arr)) {
        echo $k,$v,'<br />';
    }
}

$arr = array('虎','驴','马','狼');

for_each($arr);
