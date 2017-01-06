<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/23
 * Time: 7:58
 */

/*
 str_replace 字符串替换函数
 str:string 字符串
 replace: 替换
*/

// 准备,把hi换成hello
$str = 'hi,this is lily,history';

$newstr = str_replace('hi','hello',$str);

echo $str,'<br />',$newstr,'<br />';

// 能不能帮我统计一下,替换了几次呢?

$newstr = str_replace('hi','hello',$str,$num);
echo $str,'<br />',$newstr,'<br />';
echo '替换hi',$num,'次';


echo '<hr />';

// 再次要求,把hi换成hello, 再把li 换成 ul
// 可以用数组参数,指定多种替换.
$search = array('hi','li');
$replace = array('hello','ul');

$newstr = str_replace($search,$replace,$str);

echo $newstr,'<br />';



/*
hi 单词===>hello单词

但

this单词中间的一部分的hi,也被换了,导致this单词都错了.

能不能,专替换hi单词呢?
如果hi是单词的一部分,则不替换?

*/


/*
突然奇想,
hi=>hello, hello=>hi
*/

$str = 'hi lily, hello jim';

$newstr = str_replace(array('hi','hello'),array('hello','hi'),$str);
echo $newstr,'<br />'; // 觉得应该变成 hello lily, hi jim, 实际打印是 hi lily,hi jim

/**
分析:
hi->hello
hello lily, hello jim

hello->hi
hi lily, hi jim
 **/




/*
strtr ,以单个字符对应来替换的
比如 strtr($str,'hi','ab'), 则执行 h->a ,i->b

如果看着不舒服,可以换个写法

*/

$str = 'hi lily, hello jim';
echo strtr($str,'hi','ab'),'<br />';// he lely, hello jem


// 用户在网站有可能输入全角字符,由我们的程序统一把全角转半角
$str = '你好。，１２３４５，';

echo strtr($str,array('１'=>'1','２'=>'2'));


/****
全半角转换,用strtr非常方便
在网站开发中,这个功能也常见.

比如,ecshop里就有,如下

function make_semiangle($str)
{
$arr = array('０' => '0', '１' => '1', '２' => '2', '３' => '3', '４' => '4',
'５' => '5', '６' => '6', '７' => '7', '８' => '8', '９' => '9',
'Ａ' => 'A', 'Ｂ' => 'B', 'Ｃ' => 'C', 'Ｄ' => 'D', 'Ｅ' => 'E',
'Ｆ' => 'F', 'Ｇ' => 'G', 'Ｈ' => 'H', 'Ｉ' => 'I', 'Ｊ' => 'J',
'Ｋ' => 'K', 'Ｌ' => 'L', 'Ｍ' => 'M', 'Ｎ' => 'N', 'Ｏ' => 'O',
'Ｐ' => 'P', 'Ｑ' => 'Q', 'Ｒ' => 'R', 'Ｓ' => 'S', 'Ｔ' => 'T',
'Ｕ' => 'U', 'Ｖ' => 'V', 'Ｗ' => 'W', 'Ｘ' => 'X', 'Ｙ' => 'Y',
'Ｚ' => 'Z', 'ａ' => 'a', 'ｂ' => 'b', 'ｃ' => 'c', 'ｄ' => 'd',
'ｅ' => 'e', 'ｆ' => 'f', 'ｇ' => 'g', 'ｈ' => 'h', 'ｉ' => 'i',
'ｊ' => 'j', 'ｋ' => 'k', 'ｌ' => 'l', 'ｍ' => 'm', 'ｎ' => 'n',
'ｏ' => 'o', 'ｐ' => 'p', 'ｑ' => 'q', 'ｒ' => 'r', 'ｓ' => 's',
'ｔ' => 't', 'ｕ' => 'u', 'ｖ' => 'v', 'ｗ' => 'w', 'ｘ' => 'x',
'ｙ' => 'y', 'ｚ' => 'z',
'（' => '(', '）' => ')', '〔' => '[', '〕' => ']', '【' => '[',
'】' => ']', '〖' => '[', '〗' => ']', '“' => '[', '”' => ']',
'‘' => '[', '’' => ']', '｛' => '{', '｝' => '}', '《' => '<',
'》' => '>',
'％' => '%', '＋' => '+', '—' => '-', '－' => '-', '～' => '-',
'：' => ':', '。' => '.', '、' => ',', '，' => '.', '、' => '.',
'；' => ',', '？' => '?', '！' => '!', '…' => '-', '‖' => '|',
'”' => '"', '’' => '`', '‘' => '`', '｜' => '|', '〃' => '"',
'　' => ' ');

return strtr($str, $arr);
}

 ****/
