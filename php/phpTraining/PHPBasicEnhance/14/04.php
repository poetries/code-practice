
<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/24
 * Time: 0:10
 */

// 安全的删除学生

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

// 如果是合法的id,应该是整型值才对,不应该是字符串
$id = isset($_GET['id'])?$_GET['id']+0:0;

// 字符串+0,变成整型了,不会再有注入的功能了.

// 形成删除用的sql语句
$sql = 'delete from stu where id=' . $id;


// 发送查询
if(mysql_query($sql,$conn)) {
    echo '删除成功';
} else {
    echo '删除失败';
}



/*

今天我们的学习内容:
1:安装mysql
2:连接mysql
3:mysql的最基本操作:连接服务器/查看库/选库/查看表/增删改查数据
4:php连接mysql服务器
5:发送sql查询


完成一个添加用户,和删除用户
*/




/*
展望项目:
所谓网站,无论外形千变万化,从PHPer的角度看,
无非是数据库增删改查


发布新闻/用户注册/发帖子 --->insert
删除新闻/删除微博/删帖   --->delete
编辑文章/修改文章        --->update
查看文章/查看信件        --->select

*/
