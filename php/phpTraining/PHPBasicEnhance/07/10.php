<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/23
 * Time: 0:03
 */

// 用for循环或者while循环, 配置strpos
// 计算某父串中, 子串出现的个数?

/*
函数名 subnum
参数: string $str 待查父串,
        string $sub,子串
return int ,即子串个数
*/

/*
思路:
先从头查找子串,找到后,则偏移过去子串,继续查找. 直到查不到.
*/
function subnum($str,$sub) {
    $sublen = strlen($sub); // 计算出子串的长度
    $strlen = strlen($str); // 计算出父串的长度

    if($sublen > $strlen) {
        return 0;
    } // 如果子串比父串长,没必要找了

    for($offset = 0,$num=0;($offset = strpos($str,$sub,$offset))!==false;) {
        $num += 1;
        $offset += $sublen;
    }

    /* 如果你熟悉for循环,可以这么写
    for($offset = 0,$num=0;($offset = strpos($str,$sub,$offset))!==false;$num += 1,$offset += $sublen) {
    }
    */

    return $num;

}



$str = 'how are you! fine thank you,fine, may be you are right, 256, I dont think so,let me see,I can not fine';

echo '找到',subnum($str,'fine'),'个fine';

echo '<br />';


/*
知识综合起来,就能发挥比较大的作用,
此处用的for循环 + strpos, 计算子串的个数
*/


echo '我也找到',substr_count($str,'fine'),'个fine';


/*
这是为什么让大家重视字符串,
PHP的字符串太强大了.

你要是不了解,可能会多花冤枉时间,费力写出一个函数来,结果,本来就有.

*/