<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/20
 * Time: 1:17
 */

//在 PHP 中，提供了超过 1000 个内建的函数
//PHP 函数准则：
//函数的名称应该提示出它的功能
//函数名称以字母或下划线开头（不能以数字开头）

//function writeName()
//{
//    echo "Kai Jim Refsnes";
//}
//
//echo "My name is ";
//writeName();

//为了给函数添加更多的功能，我们可以添加参数。参数类似变量

//实例 1下面的实例将输出不同的名字，但姓是相同的
//function writeName($fname)
//{
//    echo $fname . " Refsnes.<br>";
//}
//
//echo "My name is ";
//writeName("Kai Jim");
//echo "My sister's name is ";
//writeName("Hege");
//echo "My brother's name is ";
//writeName("Stale");

/*输出：
My name is Kai Jim Refsnes.
My sister's name is Hege Refsnes.
My brother's name is Stale Refsnes.*/

//实例 2 下面的函数有两个参数：

function writeName($fname,$punctuation)
{
    echo $fname . " Refsnes" . $punctuation . "<br>";
}

echo "My name is ";
writeName("Kai Jim",".");
echo "My sister's name is ";
writeName("Hege","!");
echo "My brother's name is ";
writeName("Ståle","?");
echo "<br>";

/*输出：
My name is Kai Jim Refsnes.
My sister's name is Hege Refsnes!
My brother's name is Ståle Refsnes?*/

//PHP 函数 - 返回值
function add($x,$y)
{
    $total=$x+$y;
    return $total;
}

echo "1 + 16 = " . add(1,16);