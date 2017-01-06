
<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/22
 * Time: 23:24
 */


// 小小计算器,只计算+ - * /
function calc($num1,$act,$num2) {
    $res = null;

    switch ($act) {
        case '+' :
            $res = $num1 + $num2;
            break;

        case '-':
            $res = $num1 - $num2;
            break;

        case '*':
            $res = $num1 * $num2;
            break;

        case '/':
            if($num2 == 0) {
                echo '0不能作除数';
                break;
            }
            $res = $num1/$num2;
            break;
    }

    return $res;

}



echo calc(3,'+',2),'<br />';


echo calc(3,'*',7),'<br />';


echo calc(3,'/',0),'<br />';