<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/24
 * Time: 0:03
 */

$arr = array('中','华','人','民');

// 能不能从后到前打印出来?
// 即:指针先指向最后,逐步往头部移动指针
// 默认时,指针是指向第0个单元的,
// 要想达到想的效果,得先把指针指向最后一个单元去.
// 其次,会把指针往头部移.


// end ,该函数把指针指向数组的最后一个单元
// prev,该函数把指针往头部移动一个单元

end($arr);

echo current($arr),key($arr),'<br />'; // 民3

prev($arr); //指针往头部移动一下
echo current($arr),key($arr),'<br />'; // 人2

prev($arr); //指针往头部移动一下
echo current($arr),key($arr),'<br />'; // 华1

prev($arr); //指针往头部移动一下
echo current($arr),key($arr),'<br />'; // 中0

prev($arr); //指针往头部移动一下
var_dump(current($arr));var_dump(key($arr));; // false null

// 数组要是有1000个单元,总不能一直用手动的prev1000下,或者next1000下吧???
// 如果利用 next/prev来自动循环数组



// 不定数组的指针跑哪儿了,用reset,可以重置,使数组的指针归0,指向开头处
reset($arr);
echo current($arr),key($arr),'<br />'; // 中0
next($arr);
next($arr);
echo current($arr),key($arr),'<br />'; // 人2

reset($arr);
echo current($arr),key($arr),'<br />'; // 中0