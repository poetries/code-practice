
<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/22
 * Time: 23:26
 */


function t($num) {
    $num += 5;
}

$age = 19;

t($age);


echo $age,'<br />'; // 19
/*
function t($num) 运行

{
    $num = $age; //$age把值 赋给$num
    $num += 5;
}
*/



// 函数参数的的引用赋值


function foo(&$num) {  // 此处,即是指,传参,不再是传实参的值,而是传实参的地址
    $num += 5;
}

foo($age);
/**/
function foo(&$num)
{
    $num = &$age;  // 此时,函数内部的$num,指向外部的一个全局变量的地址.
    $num += 5;     // 因此,num变,影响了外部了的$age变.
}


echo $age,'<br />'; // $age受到了foo函数的影响,


/***
同时,我们也可以看到:

函数局部内的变量 ,和全局的变量,
并不是水火不容,谁都不机会碰到谁的.

是有机会相互影响的, 比如上面的 引用传参.

以及: 超级全局变量.


 ***/