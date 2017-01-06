<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/24
 * Time: 0:06
 */

/*
array_key_exists
数组 键 存在, 用来判断数组有没有某一个键
*/


$arr = array('age'=>98,'height'=>176,'area'=>'北京',0=>'哈哈','kaka'=>NULL);

echo $arr['age'],'<br />';

echo $arr['abc'],'<br />';

// 能不能先判断数组有没有某单元?

/*
有2个办法,用isset
*/

if(isset($arr['age'])) {
    echo $arr['abc'];
} else {
    echo '$arr["abc"]不存在<br />';
}



// 用函数 array_key_exists来判断
if(array_key_exists('abc',$arr)) {
    echo '有abc键';
} else {
    echo '$arr["abc"]不存在<br />';
}


var_dump(isset($arr['kaka'])); // false
var_dump(isset($arr[0]));       // true


/*
用isset和array_key_exists来判断
有什么区别呢?



1:
isset 不是函数,是语法结构
而array_key_exists是函数

速度上,isset省去了一次函数调用,速度要快些.

2:isset来判断是根据值来判断的,
如果某个单元的值 为 NULL,依然是返回false
因为 isset是靠值来判断的.

如果对于键/值的都不固定,不确定是否有NULL存在,
请用 array_key_exists来判断


3: isset是用来判断变量是否设置的,不限于数组

// 如果数组是动态生成,不好判断单元值及键值时,用array_key_exists保险
*/
