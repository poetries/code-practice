<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/22
 * Time: 8:47
 */

// 变量可以是动态的,即变量名,还可以是一个变量

$who = $_GET['who']; // 准备传 DA LIANG,SAN
// 动态的根据传来值,显示不同的常量

define('DA','刘备');
define('LIANG','关羽');
define('SAN','张飞');

echo $who,'<br />'; // DA
// echo DA;            // 刘备




// 以$who = DA为例
// $who变量的值是DA,解析变量得到DA,打印DA,这没有错,
// 但问题是,我们想解析出$who的值,即DA,再把DA当成"常量的名,再解析一下,解析出常量的值来"


// 想用动态常量的话,即想用变量的值当常量名的话,必须要靠constant函数,才可以.


echo constant($who); // $who的值解析出来,例DA,contant函数,再去解析DA对应的常量的值.
