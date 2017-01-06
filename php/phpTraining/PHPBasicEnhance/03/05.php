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
 * Date: 2016/5/22
 * Time: 9:51
 */

// 异或运算 xor


// 异或是指, 两个条件必须"一个真,一个假,才为真"


$li ='女';
$mei = '男';


// 这个异或表达的是,必须一个为男,一个不为男,整体才为真.
if(($li == '男') xor ($mei == '男')) {
    echo '可以结婚';
} else {
    echo '好基友,去北欧';
}

?>
</body>
</html>

