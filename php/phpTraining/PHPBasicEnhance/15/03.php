<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/24
 * Time: 0:12
 */

// 连接服务器
echo '<pre>';


$conn = mysql_connect('localhost','root','111111');
if(!$conn) {
    echo '连接数据库失败';
    exit;
}


// 选库
$sql = 'use test';
mysql_query($sql,$conn);


$sql = 'select * from stu';
$rs = mysql_query($sql,$conn);
var_dump($rs); // $rs 是 豆浆的吸管


// 接下来应该? 沿着吸管取豆浆

// 怎么取? 有专门的工具函数  mysql_fetch_assoc/row/array/object

print_r(mysql_fetch_assoc($rs));
/*
mysql_fetch_assoc取出的是 关联数组
而且:
键-->表的字段名
值-->字段的值
Array
(
    [id] => 16
    [sname] => acnwhu
    [yy] => acnwhu
)
*/

print_r(mysql_fetch_row($rs));
/*
mysql_fetch_row 取出的结果是一个 索引数组
而且:
字符从左到右,索引依次是0,1,2...N
Array
(
    [0] => 5
    [1] => stu5'
    [2] => yy333333
)
*/


print_r(mysql_fetch_array($rs));
/*
mysql_fetch_array 取出的结果 既有数字索引,也有字段索引
是 前2者结果的 并集
Array
(
    [0] => 46
    [id] => 46
    [1] => rxyzqu
    [sname] => rxyzqu
    [2] => rxyzqu
    [yy] => rxyzqu
)
*/



print_r($obj = mysql_fetch_object($rs));
/*
mysql_fetch_object 返回的是对象
stdClass Object
(
    [id] => 33
    [sname] => stu3333
    [yy] => yy333333
)
*/
echo $obj->id;
