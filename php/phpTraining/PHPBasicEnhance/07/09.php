<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/23
 * Time: 0:03
 */

// 1:写一个函数,判断指定的父串中,有没某子串

function findsub($str,$find) {
    if(strpos($str,$find)){
        return true;
    } else {
        return false;
    }
}


function findsub2($str,$find) {
    if(strpos($str,$find) === false){
        return false;
    } else {
        return true;
    }
}



$title = 'today is sunny';

if(findsub($title,'is')) {
    echo '有is子串<br />';
} else {
    echo '没有is子串<br />';
}

/*
下面这个判断,出问题了,
因为strpos返回了0, 而0用if判断时,当成false来处理的.
*/
if(findsub($title,'today')) {
    echo '有today子串<br />';
} else {
    echo '没有today子串<br />';
}



if(findsub2($title,'today')) {
    echo '有today子串<br />';
} else {
    echo '没有today子串<br />';
}