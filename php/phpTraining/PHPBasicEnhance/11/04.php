<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/24
 * Time: 0:00
 */

// 数组创建,之懒人方式
$flower = array('梅','兰','竹','菊');
print_r($flower);

/**
打印结果如下:
Array
(
[0] => 梅
[1] => 兰
[2] => 竹
[3] => 菊
)


分析: 声明数组时,不写键,行不行?
答:行!

这种情况下, 键会从0开始,逐一递增,来自动分配.
 **/



$stars[] = '刘德华';
$stars[] = '张学友';
$stars[] = '郭富城';
$stars[] = '黎明'; // 不断的开辟一个新单元


print_r($stars);