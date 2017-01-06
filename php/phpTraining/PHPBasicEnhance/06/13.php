<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/22
 * Time: 23:25
 */
// 函数的执行权与执行权的交回.


function t() {
    echo 'a<br />';
    echo 'b<br />';
    echo 'c<br />';
}


echo 'x','<br />';

echo 'z','<br />';

// 运行 x z
// 函数并没有发挥作用,因为没有调用.



/**
函数就像一台加工机,
如豆浆机,如洗衣机等,

豆浆机,洗衣机,人不去调用,会自动运行吗?


同理:函数写好后,并不会自动的发挥作用,得调用时,才能发挥.

 **/


echo 'x','<br />';
t(); //
echo 'z','<br />';  //  z是等到 t函数运行结束后,才运行的


function t3() {
    echo 't3<br />';
}

function t2() {
    echo 't2<br />';
    t3();
}


function t1() {
    t2();
    echo 't1','<br />';
}


t1();




/***
总结:
当调用函数的时候,
程序的执行权 进入到 函数内部.

问:
程序的执行权,进入到函数内部之后
什么时候,交出来执行权呢?
 ***/
