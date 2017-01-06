<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/19
 * Time: 23:11
 */

//以下实例演示了使用不同赋值运算符得到的不同结果：
$x=10;
echo $x; // 输出10

$y=20;
$y += 100;
echo $y; // 输出120

$z=50;
$z -= 25;
echo $z; // 输出25

$i=5;
$i *= 6;
echo $i; // 输出30

$j=10;
$j /= 5;
echo $j; // 输出2

$k=15;
$k %= 4;
echo $k; // 输出3

//以下实例演示了使用不同字符串运算符得到的不同结果：

$a = "Hello";
$b = $a . " world!";
echo $b; // 输出Hello world!

$x="Hello";
$x .= " world!";
echo $x; // 输出Hello world!

//以下实例演示了使用递增/递减运算符得到的结果：

$x=10;
echo ++$x; // 输出11

$y=10;
echo $y++; // 输出10

$z=5;
echo --$z; // 输出4

$i=5;
echo $i--; // 输出5

//PHP 比较运算符

//比较操作符可以让您比较两个值：
//运算符	名称	描述	实例
//x == y	等于	如果 x 等于 y，则返回 true	5==8 返回 false
//x === y	恒等于	如果 x 等于 y，且它们类型相同，则返回 true	5==="5" 返回 false
//x != y	不等于	如果 x 不等于 y，则返回 true	5!=8 返回 true
//x <> y	不等于	如果 x 不等于 y，则返回 true	5<>8 返回 true
//x !== y	不恒等于	如果 x 不等于 y，或它们类型不相同，则返回 true	5!=="5" 返回 true
//x > y	大于	如果 x 大于 y，则返回 true	5>8 返回 false
//x < y	小于	如果 x 小于 y，则返回 true	5<8 返回 true
//x >= y	大于等于	如果 x 大于或者等于 y，则返回 true	5>=8 返回 false
//x <= y	小于等于	如果 x 小于或者等于 y，则返回 true	5<=8 返回 true

$x=100;
$y="100";

var_dump($x == $y); //true
echo "<br>";
var_dump($x === $y);//false
echo "<br>";
var_dump($x != $y);//false
echo "<br>";
var_dump($x !== $y);//true
echo "<br>";

$a=50;
$b=90;

var_dump($a > $b);//false
echo "<br>";
var_dump($a < $b);//true

//PHP 逻辑运算符

//运算符	名称	描述	实例
//x and y	与	如果 x 和 y 都为 true，则返回 true	x=6
//y=3
//(x < 10 and y > 1) 返回 true
//x or y	或	如果 x 和 y 至少有一个为 true，则返回 true	x=6
//y=3
//(x==6 or y==5) 返回 true
//x xor y	异或	如果 x 和 y 有且仅有一个为 true，则返回 true	x=6
//y=3
//(x==6 xor y==3) 返回 false
//x && y	与	如果 x 和 y 都为 true，则返回 true	x=6
//y=3
//(x < 10 && y > 1) 返回 true
//x || y	或	如果 x 和 y 至少有一个为 true，则返回 true	x=6
//y=3
//(x==5 || y==5) 返回 false
//! x	非	如果 x 不为 true，则返回 true	x=6
//y=3
//!(x==y) 返回 true

//以下实例演示了使用一些数组运算符得到的不同结果：

$x = array("a" => "red", "b" => "green");
$y = array("c" => "blue", "d" => "yellow");
$z = $x + $y; // $x 和 $y 数组合并
var_dump($z);
var_dump($x == $y);
var_dump($x === $y);
var_dump($x != $y);
var_dump($x <> $y);
var_dump($x !== $y);


//三元运算符
//另一个条件运算符是"?:"（或三元）运算符

//语法格式

//(expr1) ? (expr2) : (expr3)
//对 expr1 求值为 TRUE 时的值为 expr2，在 expr1 求值为 FALSE 时的值为 expr3。
//自 PHP 5.3 起，可以省略三元运算符中间那部分。表达式 expr1 ?: expr3 在 expr1 求值为 TRUE 时返回 expr1，否则返回 expr3。

//以下实例中通过判断 $_GET 请求中含有 user 值，如果有返回 $_GET['user']，否则返回 nobody：

$test = 'hello php';
// 普通写法
$username = isset($test) ? $test : 'nobody';
echo $username, PHP_EOL;

// PHP 5.3+ 版本写法
$username = $test ?: 'nobody';
echo $username, PHP_EOL;

//注意：PHP_EOL 是一个换行符，兼容更大平台。
//在 PHP7+ 版本多了一个 NULL 合并运算符，实例如下：

// 如果 $_GET['user'] 不存在返回 'nobody'，否则返回 $_GET['user'] 的值
$username = $_GET['user'] ?: 'nobody';
// 类似的三元运算符
$username = isset($_GET['user']) ? $_GET['user'] : 'nobody';

//组合比较符(PHP7+)
//PHP7+ 支持组合比较符，实例如下：


// 整型
echo 1 <=> 1; // 0
echo 1 <=> 2; // -1
echo 2 <=> 1; // 1

// 浮点型
echo 1.5 <=> 1.5; // 0
echo 1.5 <=> 2.5; // -1
echo 2.5 <=> 1.5; // 1

// 字符串
echo "a" <=> "a"; // 0
echo "a" <=> "b"; // -1
echo "b" <=> "a"; // 1