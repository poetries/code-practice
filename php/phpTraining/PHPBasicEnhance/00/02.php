<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/22
 * Time: 0:03
 */

/*
1: php的变量怎么声明
用$变量名 来声明
*/


$price = 40.1;

/*
2:PHP变量的命名规范

变量名 是"字母,下滑线,数字的组合,并且数字不能做开头"

*/

$_ = 3;

$_price = 5;


$man1 = 'zhangsan';

$man2 = 'lisi';


echo $price,$_,$_price,$man1,$man2,'<br />';




/*
3: PHP变量名 是区分大小写的

意味着, $a, $A, 不是一同个变量.

*/

$name = 'xiaohua';
$Name = 'xiaogang';


echo $name,'~',$Name,'<br />';



/*
4: 也可以用中文来做变量,但是严重不推荐
*/

$姓名 = '刘备';
echo $姓名;
