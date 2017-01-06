
<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/24
 * Time: 0:09
 */
/*
问: 资源型变量是什么东西?
答: 资源就是一个管道

以PHP连接mysql为例

PHP<------->mysql服务器
PHP和mysql之间打通了连接,有一个通道
PHP要操作mysql,得沿着通道走.


一旦连接上mysql之后,即通道形成之后
我们就可以沿着通道发送sql语句
*/


/**
连上数据库很简单,是不是我已经会操作Mysql了?
答:不是的.
连上数据库,只是一个中国人和一个美国人接上头了.

之后想做生意上,赚美国人的钱,还得会说英语.
即:连上mysql后,你还得会sql语句.

 **/


// 连上之后,如何发送sql语句进行查询呢?

/*
只要是合法的sql语句,都可以通过通道发送给mysql服务器查询
具体用: mysql_query()函数
*/



// 连接
$conn = mysql_connect('localhost','root','111111');

if(!$conn) {
    echo '连接失败';
    exit;
}


// 选库
$sql = 'use test';
// 发送sql,进行查询
$rs = mysql_query($sql,$conn); // 沿着conn通道进行查询


// 设置字符集,此处PHP是客户端,我们的PHP是utf-8编码的.
// 因此要告诉服务器 set names utf8
$sql = 'set names utf8';
mysql_query($sql,$conn);


// 增加一条数据
$id = rand(1,100);
$sname = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),0,6);

$sql = "insert into stu values ($id,'$sname','$sname')";
$rs = mysql_query($sql,$conn);

if($rs) {
    echo '又多了一个学生';
} else {
    echo '添加数据失败';
}