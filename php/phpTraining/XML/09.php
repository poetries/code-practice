<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
/**
 * xml应用场景：
 * 1、配置文件 如qq的配置文件
 * 在java项目中 xml配置文件很多
 *
 * 2、数据传输 比如：websevice
 * 网站开放的API 如土豆的信息获取 以xml形式传输或交换数据
 *
 * 3、小型数据库
 *
 * 比如，单词库
 *
 *
 * 利用xml做一个小型数据库 在线查询词典
 *
 * 1>把数据的单词导入到xml文件
 * 2>做一个表单用来发送待查询的单词
 * 3>做一个查询页面 解析xml 查询该单词
 *
 */
/*	<goods>
	<name id='n1'>
        <goods_id></goods_id>
		<goods_name></goods_name>
		<shop_price></shop_price>
		<market_price></market_price>
	</name>
	</goods>*/

$xml = new DOMDocument('1.0','utf-8');
$xml->load('09-1.xml');
$goods = $xml->getElementsByTagName('gdods')->item(0);

//连接数据库
//$link = mysql_connect('localhost','123456');//mysql_connect在将来的php版本会被废弃，用mysqli或者PDO代替
$link = mysqli_connect('localhost', 'root', '123456');
mysqli_query('use test',$link);

$rs = mysql_query('select * from goods limit 10');

while ($row = mysql_fetch_assoc($rs)) {
	//每一行数据 只要写到xml节点中国就可以了

	$market_price = $xml-> createElement('market_price');
	$market_price-> appendChild($xml->createtextNode($row['market_price']));

	$shop_price = $xml-> createElement('shop_price');
	$shop_price-> appendChild($xml->createtextNode($row['shop_price']));

	$goods_name = $xml-> createElement('goods_name');
	$goods_name-> appendChild($xml->createtextNode($row['goods_name']));

	$goods_id = $xml-> createElement('goods_id');
	$goods_id-> appendChild($xml->createtextNode($row['goods_id']));

	$name = $xml->createElement('name');
	$name->appendChild($market_price);
	$name->appendChild($shop_price);
	$name->appendChild($goods_name);
	$name->appendChild($goods_id);

	$goods->appendChild($name);
}

$xml->save('09-1.xml');
echo 'ok';


 ?>
</body>


<!-- $xml = new DOMdocument('1.0','utf8');
$xml->load('./book.xml');
$dict = $xml->createElement('dict')->getElementsByTagName('dict')->item(0);
$conn = mysql_connect('localhost','root','111111');
mysql_query('use test',$conn);
mysql_query('set names uft8',$conn);


$rs = mysql_query('select * from cetsix',$conn);
while($row = mysql_fetch_assoc($rs)){


$mean = $xml->CreateElement('mean');
$datamean= $xml->createCDATASection($row['meanings']);
$mean->appendchild($datamean);

$name = $xml->CreateElement('name');
$dataname = $xml->CreateTextNode($row['word']);
$name->appendChild($dataname);


$word =$xml->CreateElement('word');

$word->appendChild($name);
$word->appendChild($mean);
$dictappendchild($word);

}
$xml->save('./dict.xml');
echo 'ok'; -->

</html>