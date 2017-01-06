<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/23
 * Time: 10:45
 */

//文件包含

//include inclue_once
//require require_once
//文件包含作用  代码的重用 可以把常用的代码写在一个文件里 需要时 引用即可

//include和require区别：
//  如果引入文件不存在 include尽量往下执行 报warning
//require则直接报fatal error，脚本立即停止执行

//注意：不加_once 速度快


//include './01-1.php';
//include './01-2.php';
//include './01-2.php';

include_once './01-1.php';
include_once './01-2.php';
include_once './01-2.php';

require '01-1.php';

t();
echo '<br>';

echo $age ;

echo '<br>';

//_once的作用 只能引用一次 如不能重复引用



