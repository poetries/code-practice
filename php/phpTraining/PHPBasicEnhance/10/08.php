
<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/23
 * Time: 19:57
 */

//递归与静态变量

//static 变量有一个特点 --在第一次函数调用声明后存在且不随函数结束而结束
//当函数再次调用时可用上次结果

function t(){
    static $a = 10;
    //$a = 10;
    $a+=1;

    return $a;
}

echo t();//11
echo t();//12
echo t();//13

echo "<br>";

$arr = array(1,2,3,array(4,array(5,6)));

//写函数递归 计算所有单元和

function sum($arr){
   static $sum = 0;
    foreach ($arr as $v){
       if( is_array($v)){
            sum($v);
        }else {
           $sum += $v;
       }

    }
    echo $sum,'<br>';//21 21 21
    return $sum;
}

echo sum($arr);//21