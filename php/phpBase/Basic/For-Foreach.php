<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/20
 * Time: 1:10
 */

//for 循环用于您预先知道脚本需要运行的次数的情况

for($i=1;$i<5;$i++)
{
    echo "The num is".$i."<br>";
}
echo "<br>";
/*输出：
The number is 1
The number is 2
The number is 3
The number is 4
The number is 5*/

//foreach 循环用于遍历数组

/*foreach ($array as $value)
{
    要执行代码;
}*/

//每进行一次循环，当前数组元素的值就会被赋值给 $value 变量（数组指针会逐一地移动），在进行下一次循环时，您将看到数组中的下一个值。

$x=array("one","two","three");
foreach ($x as $value)
{
    echo $value . "<br>";
}