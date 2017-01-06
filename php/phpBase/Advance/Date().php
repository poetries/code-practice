<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/20
 * Time: 19:59
 */

//PHP date() 函数可把时间戳格式化为可读性更好的日期和时间。
//时间戳是一个字符序列，表示一定的事件发生的日期/时间

//语法
//string date ( string $format [, int $timestamp ] ) format	必需。规定时间戳的格式 timestamp	可选。规定时间戳。默认是当前的日期和时间

//可以在字母之间插入其他字符，比如 "/"、"." 或者 "-"，这样就可以增加附加格式了：
echo date("Y/m/d") . "<br>";
echo date("Y.m.d") . "<br>";
echo date("Y-m-d");
