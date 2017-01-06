<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/24
 * Time: 0:02
 */

$arr = array('1'=>'334','3'=>'898','2'=>'779','3'=>'989898');

print_r($arr); // '3'被赋盖了


foreach($arr as $k=>$v){
    echo $k,'~',$v,'<br>';
}
echo '<hr>';
print_r($arr);
