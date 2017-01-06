<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/21
 * Time: 0:21
 */

// $_GET地址栏传值,可能有的同学还没碰到过,如不知道,先照做.


$who = $_GET['who'];


$laoda = '刘备';
$laoliang = '关羽';
$laosan = '张飞';


// $who有可能是 laoda,laoliang,laosan
echo $$who;


