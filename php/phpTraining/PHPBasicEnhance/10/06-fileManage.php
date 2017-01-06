<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/23
 * Time: 13:56
 */

error_reporting(0);
$path = './';//读当前目录

$url = $_SERVER["REMOTE_URL"];
if(isset($_GET['dir'])){
    $path = $path. '/' .$_GET['dir'];
}else{
    $url = $url.'?dir=.';
}

$dh = opendir($path);//opendir — 打开目录句柄
if($dh===false){
    echo '打开出错';
    exit;
}

$list = array();//把读到的每一行放到空数组里面去
while( ($item = readdir($dh))!==false){
    $list[] = $item;
}
//print_r($list);

//关闭目录句柄
closedir($dh);


?>

<html>
<head>
    <meta charset="UTF-8">
    <title>文件管理系统</title>
    <style>
        td{
            border: 1px solid gray;
        }
    </style>
</head>
<table>
    <tr>
        <td>序号</td>
        <td>文件名</td>
        <td>操作</td>
    </tr>
    <?php  foreach ( $list as $key=>$v) {
     echo '<tr >';
     echo  '<td >',$k,'</td >';
     echo  ' <td >',$v,'</td >';
     echo  '<td >';
     if(is_dir($path.'./'.$v)){
         echo '<a href=" ',$url .'/',$v,'">浏览</a>';
     }else{
         echo '<a href="./',$_GET['dir'],'/',$v,'">查看</a>';
     }
     echo '</tr >';
    }
    ?>
</table>

<body>

</body>
</html>
