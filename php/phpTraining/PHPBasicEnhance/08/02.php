<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/23
 * Time: 7:59
 */

// 截取子字符串
// substr

/*
string substr ( string $string , int $start [, int $length ] )
$string: 待截取的长字符串
start: 截取开始的位置
$length: 正数时代表截取的长度,负数时代表截取结束的位置
*/


$str = 'abcdefg';


/*
当第3个参数,不指定时,截取到字符串的"结尾"
*/
echo substr($str,3),'<br />'; // defg


/*
经理说:把字符串末尾的3个字符截取出来
又怎么办呢?
*/

// 办法1,先算出length,再-3
$str = 'abcdefg';
$start = strlen($str) - 3;
echo substr($str,$start),'<br />';

// 办法2,起始位置不走左数,而是呢,填负数,从右往左数.
echo substr($str,-3),'<br />';



/**
经理又要求:
专门截取字符串开头的3个字符

分析:start 应该填0
截取长度: length 应该填3
 **/


// 第3个参数为正数时,代表要截取的长度
$str = 'abcdefghijk';
echo substr($str,0,3),'<br />';



/**
经理又要求:
专门截取除了头3位,和尾巴3位,
即,中间的那些字符串.

分析:start应该是3
length,如何代表长度,多长呢? 不一定,因为字符串的长度不好算.

这时,可以把length写成负数.
如果length是负数,不代表长度,代表
 **/

$str = '123456789';
echo substr($str,3,-3),'<br />';


// 至此,经理没能刁难你,完成任务


/**
这时,我们对经理说:"还需要截什么吗? 中文我也能截,来点任务吧"

substr 它是按字节来操作的,不考虑什么编码.
 **/

$str = '中华民国'; // 我的文件是utf-8编码的.
echo substr($str,6,3),'<br />';


/*
经理说:"小样儿,牛叉是吗"
来截这一段"lily你的代码report给我,中午我们有个meeting,一会带你吃KFC"
*/

$str = "lily你的代码report给我,中午我们有个meeting,一会带你吃KFC";
echo substr($str,0,6),'ab';
// 按字节截,'lily你'是7个字节才完成
// '你'的3个字节,被截了2个,出了问题.


/**
面试题:如何截取中文无乱码,假设UTF-8编码

1: 用系统函数,自己找
2: 根据utf8的编码规则,用substr自己截.
后面:有字符编码专题,同学们可以先研究一下.
 **/

