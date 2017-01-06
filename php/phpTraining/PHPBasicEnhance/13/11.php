
<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/24
 * Time: 0:08
 */
echo '<pre>';
// 数组面试题
/*
1: 如何给数组追加一个单元

答: array_push() 函数
也可以直接赋值 $arr['key'] = value;
*/


/*
如何给数组排序
可以用sort,asort,ksort
*/

$arr = array('39','78','57','99');
print_r(sort($arr));
print_r($arr); // 从小到大排序了. 更强的用法,自己看手册


/*
字符串和数组怎么取长度?
答:字符串用 strlen ,mb_strlen
数组用count

如果用count计算字符串长度,返回1
*/


/**
用数组知识完成下题
把 '1234567'转换成'1,234,567'

用刚学的数组的模拟栈与队列来做
 **/

/*
function formstr($str) {
    $bak = array();
    $arr = str_split($str);

    $i = 0;

    while($cnt = count($arr)) {
        array_unshift($bak,array_pop($arr));
        $i++;
        if($i%3==0 &&) {
            array_unshift($bak,',');
        }
    }

    return implode($bak);
}

$str = '1234567';
print_r(formstr($str));echo '<br />'; // 1,234,567

$str = '123456';
print_r(formstr($str));echo '<br />'; // ,123,456 前面多了逗号
*/


function formstr($str) {
    $bak = array();
    $arr = str_split($str);

    $i = 0;

    while($cnt = count($arr)) {
        array_unshift($bak,array_pop($arr));
        $i++;
        if($i%3==0 && $cnt != 1) { // $cnt!=1的意义仔细思考一下
            array_unshift($bak,',');
        }
    }

    return implode($bak);
}

$str = '1234567';
print_r(formstr($str));echo '<br />'; // 1,234,567

$str = '123456';
print_r(formstr($s