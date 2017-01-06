<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/22
 * Time: 23:23
 */

// 参数默认值


// 来人,报国籍.
// 要是指明自己是某国人,即说我来自某国
// 不指明,就默认为"中国"
function intro($country='中国') {
    echo '我来自',$country,'<br />';
}

intro();
/**
intro($country='中国') {
$country='中国';
echo '我来自',$country,'<br />';
}


 **/


intro('美国');
/*
intro($country='中国') {
    $country='中国';
    $country='美国';
    echo '我来自',$country,'<br />';
}
*/


intro('日本');
/*
intro($country='中国') {
    $country='中国';
    $country='日本';
    echo '我来自',$country,'<br />';
}
*/



/*****
默认参数,并不能改变 实参与形参 严格按顺序赋值的原则.
 *****/


function sum($x=4,$y,$z) {
    return 2*$x + 3 * $y + $z;
}

// sum(5,6); // 行吗?
/*
5--->$x
6--->$y
没有值--->$z

sum($x=4,$y,$z) {
    $x = 4;
    $x = 5;
    $y = 6;

    // z 没有接到值.

    return 2*$x + 3 * $y + $z;
}
*/



// 想一想,既然有了默认参数,调用时,又没能少传实参?
// 想一想,怎么样才能少传一个实参,利用上默认参数?


// 番茄回答, 把','把第一个参数空出来 (点评:高,实在是高)
// sum(,5,6); // 行不通,语法错误



// 如果参数有默认值的话,要把该参数,写到最后面