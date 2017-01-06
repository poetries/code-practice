<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/27
 * Time: 15:58
 */

error_reporting(E_ALL & ~E_NOTICE);

if($tudou=$_POST['tudou']){

    $itemcode = basename($tudou);
    $key = 'db95372f26ee398d';

    $api = 'http://api.tudou.com/v3/gw?method=item.info.get&appKey=' . $key .'&format=xml' . '&itemCodes=' . $itemcode;

    echo $api;
    //DOM xml

    $dom = new DOMDocument('1.0','utf-8');
    $dom->load($api);

    $noad = $dom->getElementsByTagName('html5Url')->item(0)->nodeValue;

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>土豆无广告地址获取方法</title>
</head>
<body>
<pre>
    测试的视频地址：http://www.tudou.com/programs/view/c5ODxMR2zvk/
</pre>
<h1>这个地址需要chrome、火狐浏览器才能看</h1>
<form method="post">
    <p>
土豆地址: <input type="text" name="tudou">
    </p>
    <p><input type="submit" value="获取地址"></p>
</form>
    <p>
无广告地址:<?php echo $noad;?>
    </p>
</body>
</html>
