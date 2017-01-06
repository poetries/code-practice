<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/23
 * Time: 0:03
 */


// 查找字符串中子字符串的位置


$str = 'how are you! fine thank you,fine, may be you are right, 256, I dont think so,let me see,I can not fine';

// 经理说: 你能否找找,这段字符串里,有没有'fine'

echo strpos($str,'fine'),'<br />';  // 13,经过13字节后,找到了fine


var_dump(strpos($str,256)); // 没找到,false
var_dump(strpos($str,97));  // 97找到了,返回值是4

/**

在计算机里,ascii字符集中

65 -> 90  , A-Z
97 -> 122 , a-z

当你第2个参数,写的是整型时,则把理解为是ascii字符的编码
所以 int 97 === 'a';

不熟悉ascii的,百度"ascii 码表"
 **/


// 第3个参数offset的讨论

echo strpos($str,'fine'),'<br />';  // 13,经过13字节后,找到了fine

// 经理又说话了, 这个fine,还有没有fine???
// 第3个可选参数,offset的作用,就体现出来了.
// offset 的意思是 ---偏移量.
// 就是说,把光标先偏移一段距离,再查找,别从头查找.

echo strpos($str,'fine',17),'<br />';