
<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/24
 * Time: 0:13
 */

/*
PHP 操作 mysql的其他几个常用函数
*/

$conn = mysql_connect('localhost','root','111111');
if(!$conn) {
    echo '连接数据库失败';
    exit;
}


// 选库
$sql = 'use test';
mysql_query($sql,$conn);

$id = isset($_GET['id']) ? $_GET['id'] + 0 :0;


// 接收id后,我准备删除数据
$sql = 'delete from stu where id=' . $id;

$rs = mysql_query($sql,$conn);

if($rs) {
    echo '删掉了一行数据<br />';
} else {
    echo '删数据失败<br />';
}


/*
严重注意:
对于增/删/改 来说,返回值 都是true/false2种情况

其中:insert,返回true,数据肯定是插入成功了.

对于update/delete ,即修改/删除来说
返回为真,代表:这个sql的语法没有问题,执行成功了.
是从语法角度/执行角度来说的.

但是,未必这个语句能影响到数据,比如你的条件不对.

就好比说: 通知书童,把昨天的垃圾扔了,书童年去扔,但发现昨天就已扔了.

返回的true ,是指你通知书童,书童也答应你去干活了.
但是:没有垃圾要扔.


所以,要想真正判断有没有删/改数据,得以实际影响的行数为准
那么,在执行delete/update后,如果获取受影响行数?
答:用函数 mysql_affected_rows
*/

/*
mysql_affected_rows : 在执行delete/update后立即调用此函数,
可得到delete/update语句影响的行数.
*/


$cnt = mysql_affected_rows($conn);
if($cnt) {
    echo '删掉了',$cnt,'行数据';
} else {
    echo '没有数据被删掉';
}



// 继承来看,还剩下多少条数据
echo '<br />';


$sql = 'select * from stu';
$rs = mysql_query($sql,$conn);

/**
// 这是笨办法,循环一遍
// 有现在函数可以用
$num = 0;
while(mysql_fetch_assoc($rs)) {
$num++;
}
 **/


/*
mysql_num_rows , 返回 select 语句的结果行数
在运行select 之后,立即调用mysql_num_rows 可以得到这次select的行数
*/

$num = mysql_num_rows($rs);
echo '还剩下',$num,'条数据';