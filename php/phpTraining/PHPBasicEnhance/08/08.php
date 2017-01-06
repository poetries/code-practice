<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/23
 * Time: 8:01
 */

if(strcmp('D','a') > 0) {
    echo 'D&gt;a';
} else if(strcmp('D','a') < 0) {
    echo 'D &lt; a';
} else {
    echo '相等';
}

// D比a还小, 因为是按二进制中 ascii码比的.