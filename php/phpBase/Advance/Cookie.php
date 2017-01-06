
<html>
<head>
    <meta charset="UTF-8">
    <title>`</title>
</head>
<body>

<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/20
 * Time: 23:10
 */


//cookie 常用于识别用户。cookie 是一种服务器留在用户计算机上的小文件。
//每当同一台计算机通过浏览器请求页面时，这台计算机将会发送 cookie。通过 PHP，您能够创建并取回 cookie 的值。
//如何创建 Cookie？
//setcookie() 函数用于设置 cookie。
//注释：setcookie() 函数必须位于 <html> 标签之前。
//语法
//setcookie(name, value, expire, path, domain);

//实例 1
//在下面的例子中，我们将创建名为 "user" 的 cookie，并为它赋值 "Alex Porter"。我们也规定了此 cookie 在一小时后过期：
//<?php
//setcookie("user", "Alex Porter", time()+3600);
//?>
//注释：在发送 cookie 时，cookie 的值会自动进行 URL 编码，在取回时进行自动解码。（为防止 URL 编码，请使用 setrawcookie() 取而代之。）

<!--实例 2-->
<!--您还可以通过另一种方式设置 cookie 的过期时间。这也许比使用秒表示的方式简单。-->
<?php
//$expire=time()+60*60*24*30;
//setcookie("user", "Alex Porter", $expire);
//?>
<!---->
<!--<html>-->
<!--.....-->
<!--在上面的实例中，过期时间被设置为一个月（60 秒 * 60 分 * 24 小时 * 30 天）。-->

<!--如何取回 Cookie 的值？
PHP 的 $_COOKIE 变量用于取回 cookie 的值。

在下面的实例中，我们取回了名为 "user" 的 cookie 的值，并把它显示在了页面上：
--><?php
/*// Print a cookie
echo $_COOKIE["user"];

// A way to view all cookies
print_r($_COOKIE);
*/?>


<!--在下面的实例中，我们使用 isset() 函数来确认是否已设置了 cookie：
<html>
<body>

<?php
/*if (isset($_COOKIE["user"]))
    echo "Welcome " . $_COOKIE["user"] . "!<br>";
else
    echo "Welcome guest!<br>";
*/?>

</body>
</html>
-->


<!--如何删除 Cookie？
当删除 cookie 时，您应当使过期日期变更为过去的时间点。
删除的实例：
--><?php
/*// set the expiration date to one hour ago
setcookie("user", "", time()-3600);
*/?>


?>
</body>
</html>