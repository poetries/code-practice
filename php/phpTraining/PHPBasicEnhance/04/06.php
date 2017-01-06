<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/22
 * Time: 15:50
 */

/**
1:写一个程序打印1到100这些数字。
但是遇到数字为3的倍数的时候，打印“Fizz”替代数字，
5的倍数用“Buzz”代替，
既是3的倍数又是5的倍数打印“abcde”。
 **/

/*
$i = 1;

while($i <= 100) {
    if($i % 3 == 0) {
        echo 'Fizz','<br />';
    } else if($i % 5 == 0) {
        echo 'Buzz','<br />';
    } else if(($i % 3 == 0) && ($i % 5) == 0) {
        echo 'abcde';
    } else {
        echo $i,'<br />';
    }

    $i = $i + 1;
}

*/
// 这个程序出错了. 因为 15的倍数,既是3的倍数,也是5的倍数.
// 如果碰到15的倍数,那么 在第一个if中,已经为真
// 后面的不再执行.
// 15的倍数,被3这一段给拦截了.


/*
$i = 1;

while($i <= 100) {
    if($i % 15 == 0) {
        echo 'abcde<br />';
    } else if($i % 3 == 0) {
        echo 'Fizz';
    } else if($i % 5 == 0) {
        echo 'Buzz';
    } else {
        echo $i,'<br />';
    }

    $i += 1;
}
*/

$i = 0;

while(++$i <= 100) {
    if($i % 15 == 0) {
        echo 'abcde<br />';
    } else if($i % 3 == 0) {
        echo 'Fizz<br />';
    } else if($i % 5 == 0) {
        echo 'Buzz<br />';
    } else {
        echo $i,'<br />';
    }
}