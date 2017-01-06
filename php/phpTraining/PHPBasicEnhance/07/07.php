<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/23
 * Time: 0:03
 */

echo '字节长度是',strlen($str),'<br />'; // 12

echo '字符长度是',mb_strlen($str,'utf-8'),'<br />';

/**
要知道,编码都是有规律的,
utf-8有utf-8的规律,
你告诉mb_strlen,用utf8的规则来判断字符串,

判断出是4个字符.
 **/


/*

strlen 是计算字符串"字节"长度
mb_strlen,是根据编码,计算字符串的"字符"个数.

*/