
<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/22
 * Time: 10:25
 */

$a=3;
$b=5;

if($a=5 || $b=7) {
    $a++;
    $b++;
}

/*echo true; // 1*/

var_dump($a);
var_dump($b);


/**
= 赋值操作,优秀级最低.
|| 比 = 高

等价于如下


if($a = (5 || $b)) {

// $a = true;
// $b 没受影响

$a++;
$b++;
}

 **/
