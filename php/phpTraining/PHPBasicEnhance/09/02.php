<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/23
 * Time: 8:32
 */

//操作数组的单元

$arr = array('a','b','c');

//增一个单元
$arr[] = 'd';
$arr[99] = 'e';
$arr['stu'] = array('li','wang');
print_r($arr);
echo '<br>';

//读取单元值
echo $arr[3],'<br>';
echo $arr['stu'][0],'<br>';

//改单元的值

$arr[0] = 'A';
print_r($arr);
echo '<br>';

//删除单元

unset($arr[0]);
print_r($arr);

