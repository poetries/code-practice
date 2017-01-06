<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/24
 * Time: 0:17
 */

// 合理的判断及转义
if(!get_magic_quotes_gpc()) {  // 如果魔术引号没开
    function _addslashes(&$v,$k) {
        $v = addslashes($v);
    }
    array_walk_recursive(&$_GET,'_addslashes');
    array_walk_recursive(&$_POST,'_addslashes');
    array_walk_recursive(&$_COOKIE,'_addslashes');
}

