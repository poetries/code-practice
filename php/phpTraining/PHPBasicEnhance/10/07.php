<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/23
 * Time: 19:20
 */

//递归求1 2 3 4....+100和

function sum($n){
    if($n == 1){
        return 1;
    }
    else
        return $n +sum($n-1);
}
echo sum(10);
echo '<br>';

//递归技巧与案例
//假设法

//用递归打印当前目录下的所有文件目录及子目录

function printdir($path,$lev=1){
    $dh = opendir($path);//假设自己已经打印一层目录

    //读目录
    while($row=readdir($dh)!==false){
        echo str_repeat('&nbsp;',$lev),$row,'<br>';

        if($row == '.'|| $row=='..')
        {
            continue;
        }

        if(is_dir($path.'/'.$row)){
            printdir($path.'/'.$row,$lev+1);
        }
    }
    closedir($dh);
}
$path = '.';//传一个当前目录
printdir($path);