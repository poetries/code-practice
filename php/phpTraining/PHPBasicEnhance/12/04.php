<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/24
 * Time: 0:03
 */

$arr = array('a','b','c','d');
echo current($arr),'<br />'; // a

foreach($arr as $v) {
    echo $v,'<br />';
}

var_dump(current($arr));
// 此处是false,因为foreach循环时,试图努力的往后移动指针,直到移出界,foreach结束
// foreach结束后,并没有帮我们把指针初始化


foreach($arr as $v) {
    echo $v,'<br />';
} // 第1个foreach应该把指针移到尾部去了, 第2个foreach,会不会受第1个foreach的影响,

// 答:foreach在运行前,会自动reset数组,因此不会受上一次的影响.



// 问:foreach循环后,会不会帮我们把数组reset指针初始化?
// 答;不会,第9行可以证明.