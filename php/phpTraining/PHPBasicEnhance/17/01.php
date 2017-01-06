<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/24
 * Time: 0:19
 */


/*
$sql = 'select * from user';
$rs = mysql_query($sql,$conn);

while($row = mysql_fetch_assoc($rs)) {

}

每次想取多行数据,都要如上步骤,来个while循环,能否用函数封装起来?

要求:
函数  getAll()
parm: string $sql
parm: resource $conn

return 二维数组, false
*/

$conn = mysql_connect('localhost','root','111111');
if(!$conn) {
    exit('连接失败');
}

$sql = 'use test';
mysql_query($sql,$conn);


function getAll($sql,$conn) {
    // 思路: 沿着$conn通道 发送$sql查询
    // 再while循环,取出每一行,
    // 装到一个二维数组, 再返回

    $rs = mysql_query($sql,$conn);
    if(!$rs) {
        return false;
    }

    $res = array();
    while($row = mysql_fetch_assoc($rs)) {
        $res[] = $row;
    }

    return $res;
}


echo '<pre>';

$sql = 'select * from stu';

$stus = getAll($sql,$conn);
print_r($stus); // 取多行多列的函数封装



// 再封装一个函数,用来专门取一行的场合.
// sql = select * from stu where id=16;

$sql = 'select * from stu where id=16';
$stu = getAll($sql,$conn);

print_r($stu);  // 也取出了数据,但是呢是二维数组,不方便




/*
getRow 取出单行数据
parm String $sql; sql语句
parm resource $conn; 资源

return 一维数组 array/ false
*/
function getRow($sql,$conn) {
    $rs = mysql_query($sql,$conn);

    return mysql_fetch_assoc($rs);
}


$sql = 'select * from stu where id=16';
$stu = getRow($sql,$conn);

print_r($stu);  // 返回1行数组,一维数组




// 又提要求: 帮我查一共有多少个学生?
$sql = 'select count(*) from stu';
$num = getRow($sql,$conn);
print_r($num);
/*
返回的是1维数组,因此就返回 count(*)单元
Array
(
    [count(*)] => 3
)

但此处,只是想要数值3,并不想数组形式
*/


/*
getOne
parm: String $sql sql语句
parm: resource $conn 资源

return 单个标量值
*/
function getOne($sql,$conn) {
    $rs = mysql_query($sql,$conn);
    $row = mysql_fetch_row($rs);

    return $row[0];
}


$sql = 'select count(*) from stu';
$num = getOne($sql,$conn);
print_r($num);
