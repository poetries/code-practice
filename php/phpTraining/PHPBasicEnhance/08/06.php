<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/23
 * Time: 8:00
 */
$str = '12345678';

echo chunk_split($str,3,','); // 每隔3个长度,加一个','

// 不说明第3个参数,则加换行符.


// 想: 把12345678 转换成 12,345,678 的格式.
