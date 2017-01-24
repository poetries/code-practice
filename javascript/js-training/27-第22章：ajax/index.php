<?php
    header("Content-Type:text/html;charset=utf-8");
    echo Date('Y-m-d H:i:s');

    if($_POST['user']=="xq" && $_POST['age']==18){
        echo "post欢迎回来~~!";
    }else if($_GET['user']=="xq" && $_GET['age'] ==18){
        echo "get欢迎回来!";
    };
?>