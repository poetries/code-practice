
<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/22
 * Time: 23:21
 */


/***
函数的声明的语法

最简单的函数声明
function foo() { //没有参数
}

也可以带有参数
function foo($arg1,$arg2,$arg3) { // 可以有1个或N个参数

return 值;// 可以return 值,也可以不return
}


/***
函数就是一个加工机

输入黄豆,加工,return 豆浆
输入苹果,加工,return 罐头
输入淑女,加工,return 辣妹

 ***/



/***
函数的调用?

函数以其名称来调用
 ***/


function foo() {
    echo 'foo';
}

foo();

echo '<br />';
// 如果函数指定的参数的话.
// 还需要传参数

function bar($num) {
    echo $num * 10;
}

// bar(); // 出错,缺少参数

bar(9);




/***
至此,我们先讨论清
函数概念
函数声明语法
函数调用方法


接下来,讨论深入的东西

函数的命名规范
函数的参数个数与默认参数
函数的传参方式
函数参数的作用域[2012年9月25日晚,讲到此]
函数的返回值
函数的执行权与交回
动态函数
 ***/