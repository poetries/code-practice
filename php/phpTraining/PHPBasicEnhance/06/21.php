
<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/22
 * Time: 23:27
 */


$age = 5;

function t() {
    global $age; // global关键字,用在变量名前,声明:这个变量用的是"变局范围"内的$age
    // 而不要在局部内生成$age
    $age++;
}


t();

echo $age; //

/****
函数 和 全局变量, 并不是水火不容,

1: 通过引用传参,能影响全局变量

2: 通过global声明, 也能直接使用外部的变量 (不推荐,好多公司明确禁止使用global,自己想想危害)

3: 直接操作超级变局变量.

 ****/
