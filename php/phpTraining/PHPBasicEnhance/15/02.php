
<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/24
 * Time: 0:12
 */

/**
对于 增删改,即 insert/delete/update语句
用法是一样的,只需要把 sql语句写好
然后mysql_query执行查询就可以


返回值,也简单:只有true/false两种情况

以增来说,要么增成功,要么没增成功
删: 要么删掉了,要么没删掉
改: 要么改成功,要么没改成功

返回值: true/false


而对于select语句, 执行失败了,返回false
而如果执行成功,返回资源型.

select 就像拿吸管扎豆浆
没扎破,失败: false

扎破了,成功: 返回不是豆浆,而是吸豆浆的一个通道---资源

 **/


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

// 查询
/*
$sql = 'select * from stussss';
$rs = mysql_query($sql,$conn);
var_dump($rs); // bool false
*/

$sql = 'select * from stu';
$rs = mysql_query($sql,$conn);
var_dump($rs); // $rs 是 豆浆的吸管


// 接下来应该? 沿着吸管取豆浆

// 怎么取? 有专门的工具函数  mysql_fetch_assoc/row/array/object

print_r(mysql_fetch_assoc($rs));
print_r(mysql_fetch_assoc($rs));
print_r(mysql_fetch_assoc($rs));
print_r(mysql_fetch_assoc($rs));
var_dump(mysql_fetch_assoc($rs));

echo '<hr />';

$sql = 'select * from stu';
$rs = mysql_query($sql,$conn);

while($row = mysql_fetch_assoc($rs)) {
    print_r($row);
}