<?php
error_reporting(E_ALL & ~E_NOTICE);
if($tudou = $_POST['tudou']){
//print_r($tudou);
//从土豆API平台得到key 然后查API文档
$key = 'db95372f26ee398d';
//获取itemCodes
//echo basename($tudou);

 $itemcode = basename($tudou);
//API 文档的实例：需要修改http://api.tudou.com/v3/gw?method=item.info.get&appKey=myKey&format=json&itemCodes=yg8CVootoAc
//itemCodes 也就是视频地址的id 最后一小段
$api = 'http://api.tudou.com/v3/gw?method=item.info.get&appKey='.$key.'&format=xml'.'&itemCodes='.$itemcode;

//echo $api;
}

//echo $api;
/**
    echo $pai得到的是一个xml文档，内容是视频的标题，时长，封面等信息
    接下来要做的是用php把xml的各节点信息解析出来

    知识点：DOM来解析

    当前，暂时不用xml解析，用字符串来操作得到地址

*/
//用php中的字符串函数strsub  strpos
$source = file_get_contents($api);
$start = strpos($source,'<html5Url>');
$end = strpos($source,'</html5Url>');
$noad = substr($source,$start,$end-$start);
//echo $noad;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>土豆无广告地址获取方法</title>
</head>
<body>
<h1>这个地址需要chrome、火狐浏览器才能看</h1>
<form method="post">
    <p>
       土豆地址: <input type="text" name="tudou">
    </p>
    <p><input type="submit" value="获取地址"></p>
</form>
    <p>
        无广告地址:
    </p>
</body>
</html>