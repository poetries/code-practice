
<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/24
 * Time: 0:18
 */

// 在开发中,报错级别高一点
// 在上线产品中,报错级别要低

define('DEBUG',true);  // 在开发时,声明一个DEBUG模式

if(defined('DEBUG')) { //检测到处于开发模式
    error_reporting(E_ALL);
} else {
    error_reporting(0);
}


echo $a+$b; // notice不报
echo 3/0;   // warning报出来
echo dsafdsa(); // fatal报出来