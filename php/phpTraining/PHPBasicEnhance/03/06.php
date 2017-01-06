<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/22
 * Time: 9:58
 */

// 三元运算符
/*
条件?返回值1:返回值2

如果条件为真,则返回值1, 否则,返回值2
*/


// 比如 在网站中判断一个人有没有登陆.
// 如果登陆,用户名不为空,则显示其用户名.
// 如果没登陆,用户名为空,则显示 "游客"


$user = 'zhangsan';

if($user != '') {
    echo $user;
} else {
    echo '游客';
}

echo '<br />';

$res = ($user!=''?$user:'游客');
echo $res;


$user = '';
echo '<br />';
echo $user!=''?$user:'游客';


// 程序如果没用三元运算符,可以用什么代替?
// 可以用if/else代替.
// 三元只是一个简化的写法.
// 而且效率没有if else 高.