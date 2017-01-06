<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/24
 * Time: 0:07
 */

echo '<pre>';

$arr = array('东','南','西','北');
echo array_shift($arr),'<br />'; // 东
print_r($arr);  // 南,西,北

echo array_shift($arr),'<br />'; // 南
print_r($arr);   // 西 ,北


/***
总结:
1: array_shift作用是 弹出并剪切数组的第一个单元
2: 返回是弹出的单元值
3: array_shift是引用传参,为影响参数数组
4: array_shift在剪切首单元之后,学会把索引重新整理,从0开始计数.
但, 如果是字符串做键,则不受影响.
 ***/




$arr = array();

echo '现在有',array_unshift($arr,'东'),'个单元了<br />';
print_r($arr);

echo '现在有',array_unshift($arr,'南'),'个单元了<br />';
print_r($arr);


echo '现在有',array_unshift($arr,'西'),'个单元了<br />';
print_r($arr);


echo '现在有',array_unshift($arr,'北'),'个单元了<br />';
print_r($arr);


/**
array_unshift总结
1: 作用是把单元追加到数组的头部
2: 返回值是追加后,新数组的单元个数
3: 引用传参,影响参数的值
4: 在头部新加单元后, 索引从0重新排
 **/

echo '</pre>';