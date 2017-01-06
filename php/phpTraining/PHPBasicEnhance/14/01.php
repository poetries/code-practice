<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/24
 * Time: 0:09
 */
// PHP连接mysql, 并学习资源型变量


/**
PHP想操作mysql,得先连接上Mysql服务器

1:连接需要哪些要素?
答:服务器的地址,用户名,密码,端口

2:怎么连
答:用mysql_connect()函数来连

3:返回什么值?
 **/


/*
resource mysql_connect ([ string $server [, string $username [, string $password [, bool $new_link ]]]] )

$server: 服务器的地址[域名/ip],不写一般默认是localhost
$username: 账号
$password: 密码
$new_link: 是否重新连接
*/

$conn = mysql_connect('localhost','root','111111');

if($conn) {
    print_r($conn);
} else {
    echo '没连上';
}


$other = mysql_connect('localhost','root','111111');
if($other) {
    print_r($other);
} else {
    echo '没连上';
}


/*
$conn,与$other的打印的资源一样
这是因为:
出于减少连接的目的,
对于同样的参数的mysql_connect调用,
返回的是一个资源
*/



/*
如果我偏要连2次,得到2个不同的资源,
用第4个参数 为true
强制重新连接,得到一个新资源
*/

$conn3 = mysql_connect('localhost','root','111111',true);
if($conn3) {
    print_r($conn3);
} else {
    echo '没连上';
}


/**
mysql对外连接,和apache一样,
需要占用一个端口
(端口就是商场的柜台号,你想为客户服务,你得租个柜台)

mysql默认占用的3306,因为,我们在mysql_connect中并没有指定端口,
而PHP会用3306来进行连接

如果,你的mysql服务器端口偏是3307,如何指定
答:mysql_connect('localhost:3307','root','111111');
 **/

/***
在PHP中,只能用mysql_connect函数才能连上mysql服务器呢?
答:还可以用mysqli和PDO


mysql_connect系列函数,是面向过程的写法
mysqli则是把连接mysql的功能封装成类,是面向对象的写法.

问:如果连接oracle数据库和sqlserver数据库,又用什么函数?
答:可以用oci_*系列函数 和 mssql_*系列函数

问:太麻烦了,要是换服务器了,岂不是我的程序要重写?
答:不用怕,PDO则是一个统一的数据库接口.
对于程序来说,屏蔽了数据库之间的不一致,
无论什么数据库,用PDO的写法都一致.

另:PDO也是面向对象的用法.


因此:我们讲mysql_*系列面向过程的函数,
后面会讲通用的PDO

而mysqli夹在中间,我们不讲.
 ***/


/***
我要是调用 mysql_connect()函数时,
直接提示我 undefined function (调用了未定义的函数),该如何处理?

答:这是因为 你的PHP.ini里,没有引入mysql的扩展

问:怎么引入
答:打开php.ini,
找到下面2句,把前面的;去掉,并重启apache就可以了.
;extension=php_mysql.dll
;extension=php_mysqli.dll


 ***/