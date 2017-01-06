<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/23
 * Time: 8:01
 */

// 大小写转换


$str = 'HeLLo, ThiS IS LilY, BUT,I LoVE HanMEImei';

// 转成小写
echo strtolower($str),'<br />';


// 转成大写
echo strtoupper($str),'<br />';


// 每个单词的首字母大写
// 但是,只是帮你把每个单词的首字母变大写,其他的字母,他不做影响.
echo ucfirst($str),'<br />';


// 因此,我们想把每个单词的首字母大写,而且,只有首字母大写.
echo ucfirst(strtolower($str));