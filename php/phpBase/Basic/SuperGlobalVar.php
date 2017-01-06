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
 * Date: 2016/5/20
 * Time: 0:37
 */

//超级全局变量在PHP 4.1.0之后被启用, 是PHP系统中自带的变量，在一个脚本的全部作用域中都可用。

//PHP中预定义了几个超级全局变量（superglobals） ，这意味着它们在一个脚本的全部作用域中都可用。
//你不需要特别说明，就可以在函数及类中使用。
//PHP 超级全局变量列表:

//$GLOBALS
//$_SERVER
//$_REQUEST
//$_POST
//$_GET
//$_FILES
//$_ENV
//$_COOKIE
//$_SESSION

//PHP $GLOBALS
//$GLOBALS 是PHP的一个超级全局变量组，在一个PHP脚本的全部作用域中都可以访问。
//$GLOBALS 是一个包含了全部变量的全局组合数组。变量的名字就是数组的键。

//以下实例介绍了如何使用超级全局变量 $GLOBALS:

$x = 75;
$y = 25;

function addition()
{
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();
echo $z;
echo "<br>";

//PHP $_SERVER

//$_SERVER 是一个包含了诸如头信息(header)、路径(path)、以及脚本位置(script locations)等等信息的数组。
//这个数组中的项目由 Web 服务器创建。不能保证每个服务器都提供全部项目；服务器可能会忽略一些

//以下实例中展示了如何使用$_SERVER中的元素:

//echo $_SERVER['PHP_SELF'];
//echo "<br>";
//echo $_SERVER['SERVER_NAME'];
//echo "<br>";
//echo $_SERVER['HTTP_HOST'];
//echo "<br>";
//echo $_SERVER['HTTP_REFERER'];
//echo "<br>";
//echo $_SERVER['HTTP_USER_AGENT'];
//echo "<br>";
//echo $_SERVER['SCRIPT_NAME'];

//PHP $_REQUEST 用于收集HTML表单提交的数据。

//以下实例显示了一个输入字段（input）及提交按钮(submit)的表单(form)。 当用户通过点击 "Submit" 按钮提交表单数据时,
//表单数据将发送至<form>标签中 action 属性中指定的脚本文件。 在这个实例中，我们指定文件来处理表单数据。
//如果你希望其他的PHP文件来处理该数据，你可以修改该指定的脚本文件名。
//然后，我们可以使用超级全局变量 $_REQUEST 来收集表单中的 input 字段数据:

/*<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Name: <input type="text" name="fname">
<input type="submit">
</form>

<?php
$name = $_REQUEST['fname'];
echo $name;
?>*/


//PHP $_POST被广泛应用于收集表单数据，在HTML form标签的指定该属性："method="post"

//PHP $_GET 同样被广泛应用于收集表单数据，在HTML form标签的指定该属性："method="get"。$_GET 也可以收集URL中发送的数据
// <a href="http://www.runoob.com/try/demo_source/test_get.php?subject=PHP&web=runoob.com">Test $GET</a>
//处理脚本：echo "Study " . $_GET['subject'] . " at " . $_GET['web'];


?>


</body>
</html>
