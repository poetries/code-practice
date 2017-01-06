<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/24
 * Time: 0:04
 */


// 指针循环数组时的陷阱
$arr = array(-3,-2,-1,0,1,2,3);

// for+游标操作
for(;current($arr);next($arr)) {
    echo current($arr),'<br />';
}

// -3,-2,-1,当指向0的时候,0为假,因此,for循环退出.


// 如果数组某单元的值为"",0,false,'0',null
// 都将导致循环的退出.

// 怎么解决?
// 稍后用each来解决!