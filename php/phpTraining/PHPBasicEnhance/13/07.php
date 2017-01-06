<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/24
 * Time: 0:07
 */

echo '<pre>';


/*
经理又说了,刚才给1,100,生成1,2...100的数组
我想给你100,1,生成100,99,98..... 1这样的数组
*/
print_r(range(10,1));


/*
经理说,偏给你一个不规则的数组
比如array('a'=>'东','f'=>'南','z'=>'西','y'=>'北');

让你写函数得到 array('北','西','南','东');
即:把数组的顺序调过来

思路:
新建一个空数组A,
把待处理数组B foreach循环

循环,{
    取B的一个单元
    放A的最前面
    }
*/
$arr = array('a'=>'春','b'=>'夏','c'=>'秋','d'=>'冬');

print_r($arr);
print_r(array_reverse($arr));



$arr = array('春','夏','秋','冬');
print_r($arr);
print_r(array_reverse($arr));  // 此时,对于索引数组,索引没调过来,只调换的值

// 如果想强制把索引也调过来,可以加第2个参数
print_r(array_reverse($arr,true));



// 注意:对于纯整型的索引数组,反转时,要注意,默认不转键的顺序,只转值的顺序.
echo '</pre>';