
<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/22
 * Time: 23:22
 */


// 考考你,对形参,实参理解了没有?


function foo($num) {
    $num +=1;
    $num *=2;
    $num /= 3;
    $num +=999;
    return $num;
}


$price = 100;


echo foo($price),'<br />';
echo $price;

// 因为,在函数运行,$price的(值) 传递给 $num
// 因此,函数体内的$num,无论怎么变,和$price无关了.
