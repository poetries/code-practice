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
 * Time: 10:31
 */

//常量 声明后值不能该

//声明常量
define('PI',3.14);
echo PI,'br';//引用前面不加$

//命名2规范  和变量一样 只是习惯大写

//特点--声明后值不能修改 也不能重复定义 销毁
/*PI = 3.145；
echo PI;*/
//unset(PI);//erroe

//全局有效 在页面任意处都可以访问

function t()
{
    echo PI;
}
t();

//检测常量

if(define('PI'))
{
    echo "常量存在";
}
else
{
    echo "常量不存在";
}

//真实开发这样用

if(!define('HEI'))
{
    define('HEI',8861);
}
echo HEI,'<br>';

//动态常量名 用变量的值做常量的名字 该如何做？
$chang = 'HEI';
echo $chang,'<br>';

echo constant('HEI'),'<br>';
echo constant($chang);
?>
</body>
</html>