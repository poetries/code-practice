<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/22
 * Time: 9:36
 */

//自增 自减
$a = 5;
$b = $a++;
var_dump($a,$b); //6 5
echo "<br>";

$a = 10;
$b = $a --;
var_dump($a,$b);//9 10
echo "<br>";

$a = 20;
$b = ++$a;
var_dump($a,$b);//21 21
