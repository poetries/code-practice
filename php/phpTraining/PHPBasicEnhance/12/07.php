<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/24
 * Time: 0:04
 */

// each经常和list一起用
// 而list,是80%的PHPer都搞不清楚的一个问题


// list是重合赋值语句,可以一次性为多个变量赋值

// 下面,是常见的操作---即把数组的单元赋给多个变量
$arr = array('东','南','西','北');
$east = $arr[0];
$south = $arr[1];
$west = $arr[2];
$north = $arr[3];

// 上面的这个过程,用4次赋值,把数组的4个单元,赋给4个变量,麻烦
echo $east,$south,$west,$north,'<br />';




// 把春夏秋冬赋给4个变量
$arr = array('春','夏','秋','冬');
list($spring,$summer,$fall,$winter) = $arr;
echo $spring,$summer,$fall,$winter,'<br />';



list($a,$b,$c) = array(2=>'赵',3=>'钱',1=>'孙');
var_dump($a); echo $b,$c,'<br />';


/***
list是如何工作的?

因为list能够给多个变量赋值,即把数组的多个单元分别赋给多个值.
那么,自然要注意1个最重要的地方
即-----把数组的哪个单元 对应 赋给哪个变量???

具体对应如下:
在list中,按","隔开的顺序,从左到右,分别对应右侧数组(设为$arr)
$arr[0],$arr[1],$arr[2],.... $arr[N]

如果需要对应右侧的$arr[x] 不存在怎么办?
答:依然是先对应,不存在,当成NULL来处理.


$a <===>  $arr[0]
$b <===>  $arr[1]
$c <===>  $arr[2]

映射工作完成!!!!!
开始赋值!


赋值的过程,和映射的顺序是反的,是从右往左赋的值
$c = $arr[2];
$b = $arr[1];
$a = $arr[0];


$c = '赵';
$b = '孙';
$a = NULL; // $arr[0]不存在
赋值完毕!!!!!!!!!

因此,最终打印 NULL,孙,赵
 ***/
