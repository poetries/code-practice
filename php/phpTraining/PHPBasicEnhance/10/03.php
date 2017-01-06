<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/23
 * Time: 11:38
 */

//php位运算与错误报告
//php脚本的错误 分多个等级 如 致命错误 Notice warning
//如何设置报错级别
//php把不同等级的级别用数字来表示
/*0000 0001
0000 0010
0000 0100
0000 1000

综上：想报告所有错误，可以设置错误级别*/

//让它把所有的错误都爆出
//error_reporting(E_ALL);

//什么错误都不爆
error_reporting(0);
echo $a;

//想报所有错误 除了notice的错误
error_reporting(E_ALL & ~E_NOTICE);// 屏蔽notice 把要排除的报告的错误和所有错误相与
echo E_NOTICE;
echo $a;



