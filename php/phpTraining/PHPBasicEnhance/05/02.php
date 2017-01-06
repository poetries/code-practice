<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/22
 * Time: 21:49
 */

//时间戳格式化

$time = time();
echo date("Y-m-d 星期N h:i:s",$time);
echo "<br>";
echo gmdate("Y-m-d 星期N H:i:s",$time);//gmdate不考虑市区
echo "<br>";

/*解析检测 日期
mktime()
strtotime()
checkdate()    */

echo mktime(12,23,13,11,27,2015);
echo "<br>";

echo strtotime("now"),"<br>";
echo strtotime("now +1 day"),"<br>";
echo strtotime("now -1 day"),"<br>";

//检测日期是否合法

var_dump(checkdate(2,31,2000));//boolean false
echo "<br>";

//求两个日期的差数 考察php内建函数的使用
$day1 = '2014-10-20';
$day2 = '2015-05-15';
echo (strtotime($day2)-strtotime($day1))/(24*3600);

//用php打印前一天的时间格式
//题目：前一天的时间格式是 2016-5-10 22:21:21
//考点分析：日期函数  时间戳

//方法一
echo date('Y-m-d H:i:s',strtotime('-1 day'));
echo "<br>";
//方法二
echo date('Y-m-d H:i:s',time()-24*3600);
