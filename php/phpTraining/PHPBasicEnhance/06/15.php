
<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/22
 * Time: 23:25
 */

/*
函数 既然比喻成 加工机

入口 -> 原料->传参数

函数体->加工

出口 -->加工结果


// 大学("有为青年")
// 返回: 码农,屌丝....

*/



// 求和函数
function sum($num1,$num2) {
    return $num1 + $num2;
}


// 函数调用,返回一个结果的.
// 结果,就是return 的值
$s = sum(3,2);  // sum(3,2)返回  5, 5赋给$s
echo $s,'<br />';  // 5




// 但是 我们知道,函数是可以没有"return 语句的",没有return 语句,返回 null
function t() {
    $num = 9999;
}

$s = t();
var_dump($s);


// 或者有的时候,函数确实结束,但又没必要返回值,因此,只写一个return
function t2() {
    $num = 666;
    return;
    echo 'aaaa';
}

echo '<hr />';
$s = t2();

var_dump($s);



/****

调用函数的返回值,
即是return 的值.

如果没有return语句,或者 "return;"
则返回值是 NULL

 ****/


/***
思考: 函数可不可以return回来2个值?

答: 不可能,函数的定义就决定了不能.
从数学上来,一组确定的参数,只能得到一个确定的函数结果.

从程序来说,return 值1; 之后,函数结束,也不可能再return第2个值.


有同学说:用数组
return array(1,2); // 数组是一个值,只不过是一个复合值.


有同学说: return $a,$b;
 ***/

/*
function t3() {
    return 3,9;  // 语法错误
}
*/