<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/23
 * Time: 0:02
 */

// 当需要写一大段文本,好多行,里面又有单引号,又有双引号,导致转义的时候,都比较麻烦.
// 还可以用heredoc, nowdoc两种界定字符串的方式


$age = 29;

$str = <<<cont
我来写一行,
再来第2行, ' " \,
dsafd  abc \t \r\n haha
$age
cont;

echo $str;

/**
heredoc的写法
<<<标识符
中间写大段的文本
标识符;

注意:
1:标识符的名称和变量名的要求一样.
2:heredoc的标识符,一定是独占一行,而且前面没有任何其他字符.
3:heredoc对文本的处理,和 双引号一样,即\r\n\t,变量,等,能解析出来.
 **/


// heredoc写大段文本挺方便,但是对内部的字符解析,和双引号一样.
// 如果我不想这样,有没有类似heredoc写大段文本,
// 但是,对文本的解析又像 单引号那样简单.
// 有没有这样的用法呢?
// 答: 有
// 到了5.3.0之后, 又新增了nowdoc方式,能达到如上效果.
echo '<hr />';

$str = <<<'cont'
我来写一行,
再来第2行, ' " \,
dsafd  abc \t \r\n haha
$age
cont;

echo $str;


/***
nowdoc写法和heredoc一样,唯独在标识符两边用单引号包起来,
这样,大段文本的解析,就和单引号一样的效果.

不转义 \n \r \t,变量等等
 ***/