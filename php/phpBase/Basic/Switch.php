<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/19
 * Time: 23:51
 */

//如果您希望有选择地执行若干代码块之一，请使用 switch 语句。

$favcolor="red";
switch ($favcolor)
{
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, or green!";
}