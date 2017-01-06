<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/19
 * Time: 23:54
 */

//数组能够在单个变量中存储多个值：并且您可以根据键访问其中的值

$cars=array("Volvo","BMW","Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

//在 PHP 中，array() 函数用于创建数组：

//在 PHP 中，有三种类型的数组：
//数值数组 - 带有数字 ID 键的数组
//关联数组 - 带有指定的键的数组，每个键关联一个值
//多维数组 - 包含一个或多个数组的数组

//PHP 数值数组 这里有两种创建数值数组的方法：

//自动分配 ID 键（ID 键总是从 0 开始）：
$cars=array("Volvo","BMW","Toyota");

//人工分配 ID 键：
$cars[0]="Volvo";
$cars[1]="BMW";
$cars[2]="Toyota";

//获取数组的长度 - count() 函数

$cars=array("Volvo","BMW","Toyota");
echo count($cars);


//遍历数值数组

//遍历并打印数值数组中的所有值，您可以使用 for 循环，如下所示：

$cars=array("Volvo","BMW","Toyota");
$arrlength=count($cars);

for($x=0;$x<$arrlength;$x++)
{
    echo $cars[$x];
    echo "<br>";
}

//PHP 关联数组

//关联数组是使用您分配给数组的指定的键的数组。
//这里有两种创建关联数组的方法：

//$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
//
//or:
//
//$age['Peter']="35";
//$age['Ben']="37";
//$age['Joe']="43";

$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";

//遍历关联数组
//遍历并打印关联数组中的所有值，您可以使用 foreach 循环，如下

$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");

foreach($age as $x=>$x_value)
{
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}