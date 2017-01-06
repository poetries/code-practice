<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/22
 * Time: 15:48
 */

// 分支结构
// 顾名思义,有分支,就像一条大路,走了3岔口,该选择一个走下去了.


// 最简单的,单路分支

$age = 18;

if($age >=18 ) {
    echo '你';
    echo '已';
    echo '成年';
} // 这个if中的代码, 要么执行,不么不执行.
// 括号中的表达式,如果为真,则执行,否则,不执行.



echo '<br />';
// 双路分支, if/else


$year = 2012;
$birth = 1965;

$age = $year - $birth;

if($age > 28) {
    echo '你是中老年'; // 代码段1
} else {
    echo '你是有为青年'; // 代码段2
}

// if为真,则代码段1执行
// if为假,则代码段2执行.
// if/else 中的两个代码,有且只有一段被执行.



echo '<br />';

$today = '0920';


if($today == '0707') {
    echo '牛郎有时间';
} else {
    echo '织女有时间';
}

// 想想, 牛郎,织女永远见不到面了.
// if else 离的很近,但是没有缘分.


echo '<br />';
// 多路分支


$age = 450;

if($age <= 16) {
    echo '少年';
} else if($age > 16 && $age<=28) {
    echo '青年';
} else if($age > 28 && $age <= 300) {
    echo '中老年';
} else {
    echo '动物园的乌龟跑了';
}
