<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/23
 * Time: 9:53
 */

/*超级全局变量：页面的任何地方都可以随意访问

$_GET //$_GET 从地址栏上获得的值
$_POST //POST表单发送的数据
$_REQUEST //既有get也有post的内容

$_SESSION
$_COOKIE
$_FILES

$_ENV //服务器操作系统的环境变量 如操作系统类型 Linux win环境变量
$SERVER //

 */

print_r($_GET);
print_r($_POST);
print_r($_REQUEST);

//print_r($_ENV); //env容易暴露服务器信息 一般不允许显示 在php ini里面修改
//print_r($_SERVER); //获取当前网站的域名以及当前访问的脚本 客户IP（REMOTE_ADDR,HTTP_X_FORWARD_FOR）

//$GLABLES是对全局变量花名册的一个别名 通过该变量可以任意访问全局变量

echo "<hr>";
$a = 3;
$b = 4;
function t(){
    print_r($GLOBALS);
    $GLOBALS['a'] = 99;
}

t();
echo $a;//99


?>
</body>
</html>