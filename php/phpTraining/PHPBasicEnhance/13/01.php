<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/24
 * Time: 0:06
 */

// 数组函数讲解

/*
count 函数
作用:计算数组的单元个数[或对象的属性个数]

注:count函数的参数,可以是数组,也可以是"非数组"
返回值分3种情况讨论
1: 数组/对象, 返回数组的单元个数/对象的属性个数
2: NULL ,返回0
3: 非数组,也非NULL,通通返回1
*/


$arr = array('a','b','c','d');
echo count($arr),'<br />'; // 4

$str = 'abcd';
echo count($str),'<br />'; // 1

$nul = null;
echo count($nul),'<br />'; // 0



//====再深入一点===//
$arr = array('a','b','c',array('d','e'));
echo count($arr),'<br />'; // 4,l因为$arr第1层确实就4个单元


// 刚才答5的同学,思路值得夸张,因为他用到了递归的思想,
// 即,某单元如果是数组,继续进去数单元数量.

echo count($arr,true),'<br />'; // 6

/*
第2个参数为true时,代表递归的来计算数组的单元个数

第1层 a,b,c, array(d,e) == 4个单元
array(d,e) 又是数组,进该数量继续数.
数出 d,e 2个单元

共6个
*/


$arr = array('a','b','c',array('d',array('e','f')));

echo count($arr,true),'<br />';