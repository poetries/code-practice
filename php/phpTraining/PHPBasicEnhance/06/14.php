<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/22
 * Time: 23:25
 */


// 函数执行权的交回


function foo() {
    echo 'a';
    echo 'b';
    echo 'c';
    echo '<br />';
}


echo 'x','<br />';

foo();


echo 'z','<br />';

// x a b c z
/*

当函数语句运行完之后,执行权就交回.
或者是碰到 return 之后,函数也会交回执行权.



*/


function bar() {
    echo 'a';
    echo '<br />';

    return;

    echo 'b';
    echo 'c';
}



echo '<hr />';

echo 'x','<br />';
bar();
echo 'z','<br />';




function test() {
    return 'hello';
    return 'wolrd';
}

echo '哈哈<br />';
echo test();
echo '呵呵<br />';


/***
上面的例子,体现了函数碰到return,就交回执行权.


一个函数如果在return 后面写一些语句-----没有意义的.
 ***/