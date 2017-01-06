<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/22
 * Time: 8:49
 */

$a = 5;
$b = 3;
$c = $a > $b;
$d = 10;
var_dump($c);
echo "<br>";
$e = ($a>$b?$a:$b)>$d ? ($a>$b?$a:$b):$d;
var_dump($e);