<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/22
 * Time: 0:44
 */

// 变量的销毁

if(isset($age)) {
    echo 'age变量已设置';
} else {
    echo 'age变量未设置';
}


$age = 22;


if(isset($age)) {
    echo 'age变量已设置';
} else {
    echo 'age变量未设置';
}



unset($age);  // $age变量被销毁了.

if(isset($age)) {
    echo 'age变量已设置';
} else {
    echo 'age变量未设置';
}


// 为什么要把变量销毁
// 因为内存空间是有限的,销毁变量,可以腾出空间.
// 拆迁就是unset,拆掉的是旧房子,腾出的地皮,用来储存新值.