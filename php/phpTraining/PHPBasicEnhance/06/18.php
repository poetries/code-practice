
<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/22
 * Time: 23:26
 */

/*
一般情况下,页面内声明的"普通全局变量",
在函数内访问不到.

但是: 常量 在函数能访问到
而且,还有一类变量 ----- 超级变局变量.

超级全局变量,非常猛, 在页面的任意一处,
无论是多深层的函数内,还是以后的对象的方法体内.都可以直接访问到.

*/

/*
九大超级变局变量[注意,全大写]

$_GET   // 地址栏的参数
$_POST  // 接POST型的表单参数经(比如,用户注册时的内容,往往用$_POST来接)
$_REQUEST // 默认情况下包含了 $_GET，$_POST 和 $_COOKIE 的数组,即$_REQUEST是前3者一个并集
        // 比如不想区分 $_GET,$_POST,可以用$_REQUEST来代替

$_FILES  // 文件上传时学

$_COOKIE   //
$_SESSION  // 用户登陆时学

$_ENV
$_SERVER   // 服务器还有访客的一些信息

$GLOBALS  // 所有变量的一个注册表

*/


function t2() {
    echo '你想注册<br />';
    echo '姓名是',$_POST['username'],'<br />';
    echo 'email是',$_POST['email'],'<br />';
    echo '性别是',$_POST['gender'];
}



function t() {
    $id = $_GET['id'];
    echo '如果我会mysql,将会取出',$id,'号帖子的内容给你,<br />';


    echo '<hr />';

    t2();
}


t();

// id, email等都能打印出来,
// 这就说明,超全局变量,即使在函数内,甚至深层调用的函数内,也一样能接收到.


print_r($_REQUEST);