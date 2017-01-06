<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/23
 * Time: 9:34
 */

//数组案例

$arr = array('a','b','c','d');

echo array_push($arr,'e');//往数组尾部加入单元，并且返回操作后的数组长度

echo array_pop($arr),'<br>';//e 弹出尾部单元
echo array_pop($arr),'<br>';//d;

echo array_unshift($arr,'z');//往数组头部加入一个元素
print_r($arr);//z a b c

echo array_shift($arr); //弹出头部单元
print_r($arr);

echo '<br>';


