<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/22
 * Time: 22:55
 */

//字符串 单双引号

$str1 = '\' \\ \n \t \v \$'; //单引号只有\' \\被解析 其他原样输出
echo $str1;

echo "<br>";
$str2=  " \" \\ \n \t \v \$";
echo $str2;

//双引号里的变量能解析

$age = 29;
$str3 = "小明今年$age岁";
echo $str3,"<br>";
$str4 = '小明今年$age岁';
echo $str4;

//速度
//单引号不需要分析字符串内有没有变量 需要转义的内容也少 速度比双引号要快