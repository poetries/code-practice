
<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/22
 * Time: 23:26
 */


// 动态函数
// 即 函数的名字 可以用变量来表示.

function wel() {
    echo '欢迎<br />';
}


function love() {
    echo '斯密达<br />';
}

function cry() {
    echo '55<br />';
}


// 执行哪一个呢? 不一定,
// 决定,用户输入哪个函数名,我就执行哪个函数


$func = $_GET['func']; // wel/love/cry

echo $func,'<br />';

$func();  // 加个小括号来调用,则会把$func的值,当成"函数名" ,来调用该函数.

// PHP的灵活之处,以后学面向对象时,类名字也可以是变量.
// 同样的操作在java里,就要用反射.