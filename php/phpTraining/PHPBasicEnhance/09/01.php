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
 * Time: 8:07
 */
//数组
$arr = array(0=>'东',1=>'西',2=>'南',3=>'北');
print_r($arr);

echo "<br>";
$arr = array('name'=>'小明','age'=>20,array('bag'=>array('语文','数学')));
print_r($arr);

//键的规则

$arr = array('a','b','c');//如果不声明键 会从0开始递增
print_r($arr);
echo "<br>";

$arr = array(3=>'a','b','c');//如果已经存在一个或几个键 从最大的键开始递增
print_r($arr);
echo "<br>";

$arr = array(3=>'a',3=>'b',4=>'c');//如果声明重复了 后面的值会覆盖前面的
print_r($arr);
echo "<br>";

//键可以是整数 也可以是字符串
//浮点数转成整数
$arr = array(2=>'a',2.1=>'b','3'=>'小明');
print_r($arr);
echo "<br>";

?>
</body>
</html>