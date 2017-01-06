
<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/22
 * Time: 23:27
 */

// $GLOBALS

// $GLOBALS是页面内 所有全局变量的一个"名单",在GLOBALS里,
// 你能找到你声明过的所有变量



$a = 3;
$b = 'hello';


print_r($GLOBALS);


$c = 'world';

print_r($GLOBALS);


// 而$GLOBALS又是超变局的,
// 这意味着: 我们通过$BLOBALS可以操作普通的全局变量.


?>





<?php
//写出如下程序的输出结果

echo '<br />';

$var1 = 5;
$var2 = 1;  // 普通全局变量,在GLOBALS里注册

function get_value(){
    $var1 = 0;  // 局部的$var1
    $GLOBALS['var2']++;  // 影响全局的var2 ,变成2
}

get_value();

echo $var1,"<br />";
echo $var2;