<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/24
 * Time: 0:07
 */

echo '<pre>';
/*
经理说: 我们在网上采集一批QQ号, 都装在了数组里
但因为是大面积采集的,因此,有很多QQ号是重复的.
能否去重????


自己写函数的思路:

建立一个空数组 A
循环待处理数组 B

取出每一个单元,先判断A中有没有此单元,
如没有,加入进去
如有,跳过.
*/


// 其实不必动手写函数, array_unique
$arr = array('a','b','a','c','d','e','f','f','f');

$uni = array_unique($arr);
print_r($uni);


/*
注意点:
1:键名没改变
2:值重复的话,取先出现的键值放在返回数组里.
*/



function uni($arr) {
    $uni = array();

    foreach($arr as $k=>$v) {
        if(!in_array($v,$uni)) {
            $uni[$k] = $v;
        }
    }

    return $uni;
}


print_r(uni($arr));

echo '</pre>';