
<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/22
 * Time: 15:49
 */

$day = 2;//1234567;

/*
if($day == 1) {
    echo '星期一';
} else if($day == 2) {
    echo '星期二';
} else if($day == 3) {
    echo '星期三';
} else if($day == 4) {
    echo '星期四';
} else if($day == 5) {
    echo '星期五';
} else if($day == 6) {
    echo '星期六';
} else if($day == 7) {
    echo '星期七';
} else {
    echo '你来自火星';
}
*/

// 对于一个变量的值,有多种可能性,用if/else if来比较,当然是可以的.
// 但是,有一种更简单的分支结构来替换他.
// switch case


$day = 5;

switch ($day) {
    case 1:
        echo '星期一';
        break;
    case 2:
        echo '星期二';
        break;
    case 3:
        echo '星期三';
        break;
    case 4:
        echo '星期四';
        break;
    case 5:
        echo '星期五';  // 从上到下,判断$day和case 指定的值,是否相等,如相等,则执行以后的语句
        break;          // 因此,一定要用break退出.
    case 6:
        echo '星期六';
        break;
    case 7:
        echo '星期七';
        break;
    default:
        echo '你来自火星';
}


/*****
如果没用switch case的话, 我们可以用什么来代替?

if /else if/else 多路分支来代替


问: if/else if ,与switch case相比,各适合于什么样的场合?

答: switch case ,只能判断某变量 是否 与指定的值相等.
比如 值与 1,2,3..7比较,

但是,不能用来判断 范围.

而if /else if 可用来判断范围,甚至更复杂的判断表达式也可以.

而 case,却只能提供一个准备的值,和变量做 ==的比较.


如果需要和几个确认的值比较是否相等,适合用switch


 *****/
