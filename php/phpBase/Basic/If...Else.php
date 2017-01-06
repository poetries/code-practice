<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/19
 * Time: 23:33
 */

//在 PHP 中，提供了下列条件语句：

//if 语句 - 在条件成立时执行代码
//if...else 语句 - 在条件成立时执行一块代码，条件不成立时执行另一块代码
//if...else if....else 语句 - 在若干条件之一成立时执行一个代码块
//switch 语句 - 在若干条件之一成立时执行一个代码块

//if 语句用于仅当指定条件成立时执行代码

$t = date("H");
if($t<"20")
{
    echo "have a good day!";
}

// if...else 语句

$t=date("H");
if ($t<"20")
{
    echo "Have a good day!";
}
else
{
    echo "Have a good night!";
}

// if...else if....else 语句

$t=date("H");
if ($t<"10")
{
    echo "Have a good morning!";
}
else if ($t<"20")
{
    echo "Have a good day!";
}
else
{
    echo "Have a good night!";
}