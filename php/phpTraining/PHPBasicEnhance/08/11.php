
<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/23
 * Time: 8:01
 */

// 用5种以上方式获取文件的后缀
// 例: a.jpeg.exe, 获得 exe,或者 .exe



$file = 'a.jpeg.exe';

// 方法1
function getext($file) {
    return strrchr($file,'.');
}

echo getext($file),'<br />';


// 找最后一个 . 出现的位置,再substr截取
// strrpos是找子字符最后一次出现的位置
//

$file = 'a.jpeg';

function getext2($file) {
    return substr($file,strrpos($file,'.'));
}
echo getext2($file),'<br />';


// 把字符串反过来,然后再找第一个点出现的位置.
function getext3($file) {
    $file = strrev($file);
    return strrev(substr($file,0,strpos($file,'.')));
}

echo getext3($file),'<br />';



// 用系统函数 pathinfo

function getext4($file) {
    /*
    $arr = pathinfo($file);
    return $arr['extension'];
    */

    return pathinfo($file,PATHINFO_EXTENSION);

}

echo getext4($file);


// 如果学了数组,还可以有多种做法. 先讨论到此.