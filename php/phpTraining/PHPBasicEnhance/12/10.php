
<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/24
 * Time: 0:05
 */

// 数组的下标应该怎么写????


// 把NOTICE级别的错误信息屏蔽掉
// 在开必项目前会专门讲错误报告设置
error_reporting(E_ALL & ~E_NOTICE);

$arr = array(1=>'中',2=>'华','name'=>'张三','area'=>'衡水');
echo $arr[1],$arr['1'],$arr["1"],'<br />';
echo $arr['name'],$arr["name"],$arr[name],'<br />';



// 1: 对于数字的索引值,不必加单双引号
// 因为加了单双引号,比如"1",则需要把"1"转成整型1,来寻找该单元.
// 影响了效率.



// 第2个问题: 字符串型的下标,要不要加单双引号????
echo '没问题---',$arr[name],'<br />';

define('name','dsafdsafdsaf');



error_reporting(E_ALL);
echo '有问题----',$arr[name],'<br />'; // 张三没打印出来!!!

/*
不仅没打出来,而且出现如下提示:
Notice: Undefined index: dsafdsafdsaf in D:\www\1009\10.php on line 29

这说明 $arr[name] -->引用的是 $arr[dsafdsafdsaf] 单元,没有这个单元,所以报NOTICE

为什么引用$arr[dsafdsafdsaf] 这个单元?
答:因为name没有加单双引号,理解成常量,并且按常量值来做下标.
如果没有该常量,再次把name当成字符串的下标来处理.


不加单双引号,流程上,先理解成常量,如无,再当成字符串,效率必然低.
*/



// 第3个问题,加单引还是加双引?
/*
在字符串学习的时候,单引号的解析速度远比双引号快.

因此,优先加 单引号.
*/



/***
总结:
数字类型的索引,不必加引号
字符串类型索引必加,而且优先加单引号
 ***/