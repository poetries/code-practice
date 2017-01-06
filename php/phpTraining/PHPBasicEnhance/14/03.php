
<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/24
 * Time: 0:09
 */


// 删除学生

// 连接服务器

$conn = mysql_connect('localhost','root','111111');
if(!$conn) {
    echo '连接失败';
    exit;
}


// 选库
$sql = 'use test';
// 发送sql,进行查询
$rs = mysql_query($sql,$conn); // 沿着conn通道进行查询


// 设置字符集
$sql = 'set names utf8';
mysql_query($sql,$conn);

// 接收地址栏的id,传几号id,就删几号会员
$id = isset($_GET['id'])?$_GET['id']:0;

// 形成删除用的sql语句
$sql = 'delete from stu where id=' . $id;


// 发送查询
if(mysql_query($sql,$conn)) {
    echo '删除成功';
} else {
    echo '删除失败';
}



// 地址栏来一个 id=83 or 1
/*
根据$sql拼接的结果
$sql = 'delete from stu where id=83 or 1'

1恒为真,因为所有的行,都满足条件,都被删了.
这是一个非常简单的sql注入的例子.


怎么避免?
答:大原则,永远不要信任从客户处传来的数据
见04.php
*/
