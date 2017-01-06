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
 * Time: 9:14
 */

//数组的常用函数

$arr = array('a'=>'xiaoming','b'=>'lianying','c'=>null);
if(isset($arr['a']))
{
    echo 'a存在';
}
else
    echo 'a不存在';
echo '<br>';

//判断键存不存在
if(array_key_exists('c',$arr))
{
    echo 'c存在';
}
else
    echo 'c不存在';

echo '<br>';

//判断某个键是否存在
if(in_array('xiaoming',$arr))
{
    echo '存在';
}
else
    echo '不存在';

?>
</body>
</html>