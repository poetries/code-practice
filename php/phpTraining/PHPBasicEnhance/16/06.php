<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/24
 * Time: 0:16
 */

echo '<pre>';
// sql的注入与转义
/*
先下如下例子:

del.php?id=3
$sql = 'delete from news where id=' . $_GET['id'];

del.php?id=3 or 1;
这时 $sql = 'delete from news where id=3 or 1'
这样,所有的新闻将都被删除.
*/

/*
addslashes 可以对某个变量转义,
但是,$_POST是一个数组,可能有多个单元,
如果每个单元手动的addslashes来转义,工作量大.

有什么办法,可以对$_POST数组的每一个单元,进行转义?

*/

/*
// 插播一个小题目
$arr = array(1,2,3,4);
// 用foreach来处理$arr
foreach($arr as $v) {
    $v *= 2;
}
print_r($arr);

foreach($arr as $k=>$v) {
    $arr[$k] = 2 * $v;
}
print_r($arr);
*/


// 回到$_POST上来,要循环对POST做转义
$_POST = array('age'=>28,'name'=>'abc"');
foreach($_POST as $k=>$v) {
    if(is_string($v)) {
        $_POST[$k] = addslashes($v);
    }
}

print_r($_POST);


// 但是----
$_GET = array('id'=>5,'gender'=>'m"','user'=>array('name'=>'lisi','area'=>'bj"'));
foreach($_GET as $k=>$v) {
    if(is_string($v)) {
        $_GET[$k] = addslashes($v);
    }
}

print_r($_GET);
/*
Array
(
    [id] => 5
    [gender] => m\"
    [user] => Array
        (
            [name] => lisi
            [area] => bj"
        )

)

gender m" 被转义了
而area bj" 没被转义

因为 user单元又是一个数组,没有进去处理 .
此时,已经用到了递归的思想.

*/

// 我们用系统提供好一个函数,来对数组进行递归
// array_walk_recursive ,这是递归处理数组单元的函数
// 函数本身只有一个功能------递归的把数组每个单元走一遍
// 至于你怎么处理这个数组,自己写一个函数,
// 然后 array_walk_recursive会带着你写的函数把数组单元走一遍.


// 如下,array_walk_recursive带着addslashes在数组各单元走一遍,
// 自然,各单元都被转义了.


function abc(&$v,$k) {
    $v = addslashes($v);
}

array_walk_recursive(&$_GET,'abc');

print_r($_GET);
