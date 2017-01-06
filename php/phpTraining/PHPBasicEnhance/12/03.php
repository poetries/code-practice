<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/24
 * Time: 0:03
 */

// 不用foreach
// 就用for循环来循环数组

$arr = array('name'=>'张三','age'=>'28','height'=>'176','area'=>'山西');
// 以昨天的知识,用for循环是没办法循环此数组的.



// 但结合游标操作之后,就可以处理
for(;current($arr);next($arr)) {
    echo key($arr),'~',current($arr),'<br />';
}

// 用for循环也能循环关联数组
// 这里只是为了练习游标操作,用for来处理 ,在实际开发中,用foreach



// 来点更有意思的,走一步,跳一步.
$arr = array('中','华','人','民','共','国');
for(;current($arr);next($arr),next($arr)) {
    echo current($arr),'<br />';
}


// 再来点有意思的,走2步,退1步
// 什么时候走2步,什么时候退1步? 怎么标志?

echo '<hr />';
reset($arr); // 想想这句话为什么要用?
for($flag = true;current($arr);) {
    echo current($arr),'<br />';
    if($flag) {
        next($arr);
        next($arr);
        $flag = false;
    } else {
        prev($arr);
        $flag = true;
    }
}

