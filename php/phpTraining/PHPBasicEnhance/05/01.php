<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/22
 * Time: 15:52
 */

echo time();//返回时间戳
echo "<br>";

print_r(microtime(true));

echo "<br>";

$start = microtime(true);
for($i = 1;$i<105760000;$i++)
{
    $temp = 125777625689/46751;
}


$end = microtime(true);
//检测页面开始和结束 执行的时间 时间戳用来计算程序运行时间
echo $end - $start;