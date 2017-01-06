<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/22
 * Time: 23:24
 */

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<title>新建网页</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<script type="text/javascript">

var num = 5;

function t() {
    alert(num);
}

t(); // 在js中,有作用域链的概念,在函数内找不到局部变量num,就会往外层寻找.
// 在PHP中,则不会跑到外层去寻找.

</script>

<style type="text/css">
</style>
</head>
    <body>
    </body>
</html>