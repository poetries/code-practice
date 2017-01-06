<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/24
 * Time: 0:11
 */


/*
如何来修改4号用户的信息?

流程:
1:建立到mysql的连接
2:选择库
3:写update语句,并发查询

*/


// 1:连接
$conn = mysql_connect('localhost','root','111111');

if(!$conn) {
    echo '连接数据库失败';
    exit;
}

// 2:选择数据库
$sql = 'use test';
mysql_query($sql,$conn);

/*
// 3:写update语句
$sql = "update stu set sname='stu4' where id = 33";

if(mysql_query($sql,$conn)) {
    echo '修改成功';
} else {
    echo '修改失败';
}
*/

/*
要接收表单数据
*/

$sname = addslashes($_POST['sname']);
$yy = addslashes($_POST['yy']);
$id = $_POST['id'] + 0;

$sql = "update stu set sname='" . $sname . "' ,yy= '" . $yy . "' where id=" . $id;

echo $sql,'<br />';

if(mysql_query($sql,$conn)) {
    echo '修改成功';
} else {
    echo '修改失败';
}


/*

之所以能注入,是因为利用表单值,故意传一些sql的语句的关键字,如单引号,#等.
我们转义,则把单引号转成\',这样,\'就和abcd等普通字符一样,构不成对sql语句的威胁
*/

?>



<a href="04.php">用户列表</a>