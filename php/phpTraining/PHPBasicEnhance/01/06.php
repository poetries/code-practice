<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/22
 * Time: 8:46
 */

/ 常量的检测

// 我们知道,一个变量是否已声明,可以检测到,用isset即可检测



// 开发时,我想知道,某个常量有没有定义,
// 如果还没定义,我就去定义.

// 怎么样判断一个常量 是否定义过呢?
// 用defined('常量名'); 即可检测
// 如果常量已定义,返回true
// 如果常量没定义,返回false


if(defined('HEI')) { // 此行,HEI常量从未被定义过,返回false,程序走else段
    echo 'HEI常量已经定义<br />';
} else {
    echo 'HEI常量还没定义,我来定义<br />';
    define('HEI',8846);
}


echo '<hr />';

if(defined('HEI')) { // 此行,HEI已经在上面的else被定义了,返回true
    echo 'HEI常量已经定义,值是',HEI;
} else {
    echo 'HEI常量还没定义,我来定义<br />';
    define('HEI',8846);
}

