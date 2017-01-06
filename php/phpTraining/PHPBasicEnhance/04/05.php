<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/22
 * Time: 15:49
 */

// 循环结构

// 编程语言,一般都有 for,while,do/while循环

/*
先看while

假设某人"心理强度" 是 100
每打他一拳,心理强度减少1,

当心理强度< 30,就能打服.


*/

$hard = 100;
$hit = -1;

/*
$hard = $hard + $hit;
if($hard >= 30) {
    echo $hard,'不服<br />';
} else {
    echo $hard,'服了<br />';
}


$hard += $hit;
if($hard >= 30) {
    echo $hard,'不服<br />';
} else {
    echo $hard,'服了<br />';
}

$hard += $hit;
if($hard >= 30) {
    echo $hard,'不服<br />';
} else {
    echo $hard,'服了<br />';
}

$hard += $hit;
if($hard >= 30) {
    echo $hard,'不服<br />';
} else {
    echo $hard,'服了<br />';
}

$hard += $hit;
if($hard >= 30) {
    echo $hard,'不服<br />';
} else {
    echo $hard,'服了<br />';
}
*/

// 不服,接着打; 直到服了为止.
// 即上面的代码段,重复执行,直到$hard < 30;

/*
while(表达式) {
    语句;
}

意思是:
判断表达式是否为真,如果为真,则执行语句.
执行完语句之后,再回到while开始处,判断表达式是否为真.
如果为真....
.....
...

如果假,本次循环结束
*/

/*
while($hard >= 30) {
    $hard += $hit;
    if($hard >= 30) {
        echo $hard,'不服<br />';
    } else {
        echo $hard,'服了<br />';
    }
}

echo '29时,hard>=30不成立,来这儿了';
*/


// 问: while循环,有没有刚来,表达式就假,即里面的语句,一次都不执行,这种情况,有没有可能?
// 答: 当然有


$hard = 20; // 软蛋一个,不用你打了.

while($hard >= 30) {
    $hard += $hit;
    if($hard >= 30) {
        echo $hard,'不服<br />';
    } else {
        echo $hard,'服了<br />';
    }
} // 页面空空的,一次没执行,因为()中的表达式,刚开始就为假.



// 如果碰到下列情况
/*
while(true) {
    echo 'haha<br />';
}

死循环, 因为无论执行多少次,true始终为true,将永远执行下去.
小心死机.
*/


/*
思考这种情况:
某看守所,"新收"上来就得挨顿打,不管你是硬还是软.
都要"入学考试"


转成程序语言: 不管你一开始,服不服,总得先打一顿.
*/


$hard = 20;

do {

    $hard += $hit;
    if($hard >= 30) {
        echo $hard,'不服<br />';
    } else {
        echo $hard,'服了<br />';
    }

} while($hard >= 30);


// do,即执行, 上来先执行一下语句,然后再去判断.
// 所以,do/while,至少执行一次.


/***
while循环就像 去快餐吃饭,
服务员先让你付钱,没钱请走人


do/while 则是先吃饭,再判断有没有钱.
有可能,没钱,吃了霸王餐.

 ***/