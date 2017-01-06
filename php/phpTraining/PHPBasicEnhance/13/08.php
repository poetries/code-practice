<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/24
 * Time: 0:07
 */
echo '<pre>';
/***
先说一点数据结构的知识
队列,栈


队列,就像人排队
来新人,站队伍的后面
要挑人走,队伍最前面的先出去.
特点:先进先出



栈: 就像堵住了出口的单行道.
|a b c d

路被堵了,出去时, d先出
特点:后进先出
 **/



/***
数组完全可以达到队列和栈的效果
需要用到以下几个函数
array_push
array_pop
array_shift
array_unshift
 ***/


// array_push 往数组尾部追加单元
$arr = array();
print_r($arr);

echo '现在有',array_push($arr,'东'),'个单元了<br />';
print_r($arr);


echo '现在有',array_push($arr,'南'),'个单元了<br />';
print_r($arr);

echo '现在有',array_push($arr,'西'),'个单元了<br />';
print_r($arr);


echo '现在有',array_push($arr,'北'),'个单元了<br />';
print_r($arr);

/***
1: array_push的作用是 往数组的尾部压入单元
2: 返回值是: 压入单元成功后,数组的单元个数
3: array_push是引用传值,直接影响参数数组本身
 ***/



// array_pop, 是把数组的尾部单元的值弹出来,并且把尾部单元去掉
echo array_pop($arr),'<br />'; // 北
print_r($arr); //  东,南,西.


echo array_pop($arr),'<br />'; // 西
print_r($arr); //  东,南

echo array_pop($arr),'<br />'; // 南
print_r($arr); //  东

echo array_pop($arr),'<br />'; // 东
print_r($arr); //  array() 空数组

var_dump(array_pop($arr)); // null;
print_r($arr); //  array() 空数组


/**
array_pop 总结
1: 作用是弹出并去掉最后一个单元
2: 返回值是弹出的值
3: array_pop是引用传参,直接影响参数数组的值
 **/

echo '</pre>';