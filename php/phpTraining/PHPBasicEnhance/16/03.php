
<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/24
 * Time: 0:16
 */

/*
下面这个用法,是利用 include /require返回被包含页面的值

被包含页面A中 return value

包含页面B中 $v = include('A.php');
则 $v 被赋值为 value


这个用法,在网站做配置文件时,会偶尔碰到
比如TP的配置文件
*/

$arr = include('./array.php');
print_r($arr);