<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/24
 * Time: 0:15
 */

/**
include include_once
require require_once
 **/


// 比如 我们经常要连数据库
// 那么,下面这这句话就要经常出现
// $conn = mysql_connect('localhost','root','111111');

// 比如共出现了8次,还有一个坏处
// 就是,如果用户名/密码变了,则要改8处.
// 可以把这段代码 写在一个公共文件里, 然后包含公共文件.


include('./conn.php');

echo $age,'<br />'; // 27
echo $name;
/*
怎么来理解 include/require
就相当于, 把conn.php的代码,复制粘贴,代替 include那一行.

注意: include/require 包含进来的文件必须要加<?php ?>
因为在包含时,首先理解文件内容是普通字符串,
碰到<?php ?> 标签时,才去解释
*/



require('./req.php');
echo $name,'<br />';
echo $age,'<br />'; // 28

/*
./req.php中的　./是什么意思?当前目录
这是相对路径

也可以用绝对路径,即用盘符指定
*/

/*
绝对路径 也可以包含
在win下,路径可以用正斜线,也可以反斜线
而在linux下,则只能用正斜线 /
因此: 用正斜线 /
*/
require('D:/www/1015/req.php');
echo $name,'<br />';
echo $age,'<br />'; // 29