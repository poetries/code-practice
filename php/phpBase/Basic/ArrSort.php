<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/20
 * Time: 0:13
 */

//数组中的元素可以按字母或数字顺序进行降序或升序排列

//sort() - 对数组进行升序排列
//rsort() - 对数组进行降序排列
//asort() - 根据关联数组的值，对数组进行升序排列
//ksort() - 根据关联数组的键，对数组进行升序排列
//arsort() - 根据关联数组的值，对数组进行降序排列
//krsort() - 根据关联数组的键，对数组进行降序排列

//sort() - 下面的实例将 $cars 数组中的元素按照字母升序排列：
$cars=array("Volvo","BMW","Toyota");
sort($cars);
for($x=0;$x<count($cars);$x++)
{
    echo  $cars[$x];
    echo "<br>";
}
echo "<br>";

$numbers=array(4,6,2,22,11);
sort($numbers);
for($x=0;$x<count($numbers);$x++)
{
    echo  $numbers[$x];
    echo "<br>";
}
echo "<br>";

//rsort() - 下面的实例将 $cars 数组中的元素按照字母降序排列：

$cars=array("Volvo","BMW","Toyota");
rsort($cars);
for($x=0;$x<count($cars);$x++)
{
    echo  $cars[$x];
    echo "<br>";
}
echo "<br>";

//下面的实例将 $numbers 数组中的元素按照数字降序排列：

$numbers=array(4,6,2,22,11);
rsort($numbers);
for($x=0;$x<count($numbers);$x++)
{
    echo  $numbers[$x];
    echo "<br>";
}
echo "<br>";

//asort() - 根据数组的值，对数组进行升序排列

$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
asort($age);
foreach ($age as $x=>$x_value) {
    echo "key=".$x.",value=".$x_value;
    echo "<br>";
}
echo "<br>";

//arsort() - 根据数组的值，对数组进行降序排列

$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
arsort($age);
foreach ($age as $x=>$x_value) {
    echo "key=".$x.",value=".$x_value;
    echo "<br>";
}
echo "<br>";

//ksort() - 根据数组的键，对数组进行升序排列

$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
ksort($age);
foreach ($age as $x=>$x_value) {
    echo "key=".$x.",value=".$x_value;
    echo "<br>";
}
echo "<br>";

//krsort() - 根据数组的键，对数组进行降序排列

$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
krsort($age);
foreach ($age as $x=>$x_value) {
    echo "key=".$x.",value=".$x_value;
    echo "<br>";
}

