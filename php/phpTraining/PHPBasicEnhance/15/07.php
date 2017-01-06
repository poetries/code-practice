
<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/24
 * Time: 0:14
 */

// mysql的调错


/*
同学们 在开发中,因为php和mysql用的不熟悉,
在php操作mysql是,极容易出错.
碰到错误,一定不要怕,要大胆去看报错信息

报错信息就是犯罪现场,是破案的第一手证据.

当mysql_query执行失败时,必有原因
可以用mysql_errno()打印出错误号
和mysql_error() 打印出错误信息
*/

/*
$conn = mysql_connect('localhost','root','1111111');

Warning: mysql_connect() [function.mysql-connect]: Access denied for user 'root'@'localhost' (using password: YES)

这是账号密码不对
*/


$conn = mysql_connect('localhost','root','111111');

$db = 'test';
$sql =  'use'.$db;
echo $sql;

mysql_query($sql,$conn);

$sql = 'delete from stu where id=5';
if(mysql_query($sql,$conn)) {
    echo '删除成功';
} else { // 查询失败,就把错误信息打出来
    echo '删除失败';
    echo '原因:',mysql_errno(),'~',mysql_error();
}
