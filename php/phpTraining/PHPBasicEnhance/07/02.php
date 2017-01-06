<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/23
 * Time: 0:01
 */

// 再看单引号


$str1 = 'hello';
echo $str1,'<br />';


// $str2 = 'hello 'jack''; // 某字符串是新闻标题,标题又出现单引号,
// 单引号里又出现的单引号怎么办呢?
// '被用来做字符串的边界了,
// 因此,串内想出现',只好用转义来表示


$str2 = 'hello \'jack\'';
echo $str2,'<br />';

// \被用来转义单引号用了,那么如果我确实想表示\,怎么办呢.
// \\ 来 表示 \

$str3 = 'hello \\';
echo $str3;