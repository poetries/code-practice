<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/23
 * Time: 8:51
 */

//循环数组

//for循环 对于0 1 2 3递增的索引数组

$arr = array('a','b','c','d','e');
for($key = 0;$key<count($arr);$key++)//count 统计数组个数
{
    echo $arr[$key],'<br>';
}

//foreach 循环 键值数组
$arr = array('age'=>20,'height'=>190,'weight'=>55);
foreach($arr as $key =>$value)
{
    echo $key,'---',$value,'<br>';
}

foreach($arr as $value)
{
    echo $value,'<br>';
}

//把下面的数组的每个单元值变成原来的2倍

$stu = array('lisi'=>3,'wang'=>5,'xiaoming'=>6);
foreach($stu as $value)
{
    echo $value*2,'<br>';
}