<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php


//1、要把xml文件读入进来，形成一个xml文档对象（对应js中的document对象）
//2、再通过getElementsByTagName(标签名)得到一组节点（对应js中的document.getElementsByTagName）
//3、取2中得到的对象中的某一个，得到具体的节点

//DOMdocument Object有什么用？
//答：他可以把你的xml文件载入内存并分析 你就可用object分析xml


//1、创建DOM解析对象
//如何通过php的DOM树对象来解析xml

$dom = new DOMdocument('1.0','utf-8');
//print_r($dom);
//echo "<br>";

//2、载入xml文档进行分析
$dom->load('./04.xml');

//3、得到title节点列表
//分析：title对象节点很多，因此得到的是节点列表对象
$ts = $dom->getElementsByTagName('title');
//print_r($ts); //DOMNodeList Object

//DOMNodeList 有一个属性：length 代表取得节点的数量
//有一个方法：item（N）代表取得的第N个节点

/*echo '我们得到了',$ts->length,'个书名<br>';
echo '第一个节点是';print_r($ts->item(0));*/

//'天龙八部'是一个文本节点是title的子节点\
$title0 = $ts->item(0);//item 列表对象
print_r($title0->childNodes);//打印结果是一个列表对象(子节点列表)
echo $title0->childNodes->length,'个子节点','<br>';

$text = $title0->childNodes->item(0);
print_r($text);
echo $text->wholeText;//天龙八部

echo '<hr>';

echo $dom->getElementsByTagName('title')->item(0)->childNodes->item(0)->wholeText;//天龙八部
echo $dom->getElementsByTagName('title')->item(1)->childNodes->item(0)->wholeText;//连城诀
//或者：下面的方法偷懒
echo $dom->getElementsByTagName('title')->item(1)->nodeValue;//连城诀


?>
</body>
</html>