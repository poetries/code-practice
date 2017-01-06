
<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/23
 * Time: 9:02
 */

//游标操作

//current()
//next()
//prev()
//end()

//取当前游标指向的数组单元的值

$arr = array('a','b','c');
echo current($arr);//a

next($arr);//把数组的游标往后移
echo current($arr);//b

end($arr);//把数组的游标移到最后
echo current($arr);//c

prev($arr);
echo current($arr);//b
reset($arr);//reset复位
echo current($arr); //a

echo "<br>";
//碰到false结束循环 可以用foreach操作
$arr = array(1,2,3,4,5,6,false,7,8,9);
while($v = current($arr))
{
    echo $v,'<br>';
    next($arr);
}