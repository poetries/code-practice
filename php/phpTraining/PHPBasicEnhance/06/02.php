<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/22
 * Time: 23:21
 */

/*
从数学的角度来理解

函数的概念: 函数是变量之间的关系.

例: y = 2*x;

当:x=1, 则y=2
当:x=3, 则y=6
...
...

可以看出,y 与 x之间存储一种关系.
返回的y是根据x的值乘以2.

*/


/*
问男生:你谈过几个女朋友?
男生的真实谈过的女朋友 == 他说的个数/3
女生的真实谈过的男朋友 == 她说的个数*3

来一个男友个数推测机
$real = $say * 3;


给我一个数,我帮你算出一个3倍后的数---这样一个量与量的关系.

给函数一个值,
函数乘以3,
再还给我


此时的函数,像不像 豆浆机?

入口处输入: 黄豆

机器内: 搅拌黄豆

出口: 豆浆


*/

function she($say) { // 参数是入口

    $real = $say * 3; // 函数体是加工处

    return $real;   // 出口

}


$num = 5;
echo '大S说她谈过',$num,'次恋爱<br />';

echo '推测其真实谈过',she($num),'次恋爱';