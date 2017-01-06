<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/24
 * Time: 0:00
 */
// 详细探讨数组的创建方式


// 最本质是键值对,能把键与值的对应关系体现出来,才是最重要的.


///====初始化创建方式=====//
$stu1 = null;

$stu1['name'] = '张三';
$stu1['height'] = 176;
$stu1['area'] = '衡水';
$stu1['grade'] = '高三';

print_r($stu1);


//===array结构来创建=====//
$stu2 = array('name'=>'李四','height'=>176,'area'=>'衡水','grade'=>'高三');
print_r($stu2);


/*
这2种方法都可以创建数组,
虽然形式不同,但是他们本质上有相通之处
--即,都是声明"键与值的对应"
*/


// 初始化方式,便于运行中,临时增加一个单元
$stu1['warn'] = '晚不归宿';

print_r($stu1);