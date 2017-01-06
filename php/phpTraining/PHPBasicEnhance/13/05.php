<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/24
 * Time: 0:06
 */

/*
要求,给定整数m,n  m<n
生成一个数组,单元的值分别是 m,m+1,m+2 ..... n

自己写函数的思路?
用for循环来生成数组

*/
echo '<pre>';

function arraynum($m,$n) {
    $arr = array();

    for($i=$m;$i<=$n;$i++) {
        $arr[] = $i;
    }

    return $arr;
}
print_r(arraynum(1,10));

// 又让你写一个函数,计算数组所有单元的值和和
// 思路:循环数组单元,不断相加. 此函数同学们试着写



/*
但是,如果数组函数熟练的话,这2个函数不必我们写
range() : 生成一个指定范围的数组
array_sum(): 计算数组所有单元的值的和
*/

$arr = range(1,10);
print_r($arr);
echo array_sum($arr);



// 经理又提问,这是为了做一个抽奖程序,因此想把数组打乱,没有规律
// js中,数组没有现在的函数来打乱,需要自己写函数.

if(shuffle($arr)) {
    echo '打乱成功';
    print_r($arr);  // 数组本身被打乱了,因为shuffle函数,是引用传值
}

// 比如搞随机抽查,或者随机生成验证码时,就能用到shuffle函数

echo '</pre>';