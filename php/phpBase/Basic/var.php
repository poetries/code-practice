<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/19
 * Time: 21:28
 */


/*PHP 变量规则：
            变量以 $ 符号开始，后面跟着变量的名称
            变量名必须以字母或者下划线字符开始
            变量名只能包含字母数字字符以及下划线（A-z、0-9 和 _ ）
            变量名不能包含空格
            变量名是区分大小写的（$y 和 $Y 是两个不同的变量）

创建（声明）PHP 变量
            PHP 没有声明变量的命令。
            变量在您第一次赋值给它的时候被创建：

PHP 是一门弱类型语言
            不必向 PHP 声明该变量的数据类型。
            PHP 会根据变量的值，自动把变量转换为正确的数据类型。
            在强类型的编程语言中，我们必须在使用变量前先声明（定义）变量的类型和名称。

*/

$x = 5;
$y = 6;
$z = $x + $y;
echo $z;
echo "<br>";

//全局变量与局部变量

$s = 40;//全局变量

function test()
{
    $y = 50;
    echo "$y";
    echo "<br>";
    //echo "$s";//error  如果要在一个函数中访问一个全局变量，需要使用 global 关键字
    global $s;
    echo "$s";

}
test();

//PHP global 关键字

$x=5;
$y=10;

function myTest()
{
    global $x,$y;
    $y=$x+$y;
}

myTest();
echo $y; // 输出 15

//PHP 将所有全局变量存储在一个名为 $GLOBALS[index] 的数组中。 index 保存变量的名称。这个数组可以在函数内部访问，
//也可以直接用来更新全局变量。上面的实例可以写成这样：

$x=5;
$y=10;

function myTest()
{
    $GLOBALS['y']=$GLOBALS['x']+$GLOBALS['y'];
}

myTest();
echo $y;


//Static 作用域
//当一个函数完成时，它的所有变量通常都会被删除。然而，有时候您希望某个局部变量不要被删除。
//要做到这一点，请在您第一次声明变量时使用 static 关键字：然后，每次调用该函数时，该变量将会保留着函数前一次被调用时的值。
//注释：该变量仍然是函数的局部变量。

function myTest()
{
    static $x=0;
    echo $x;
    $x++;
}

myTest();
myTest();
myTest();



