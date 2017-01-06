<html>
<head>
    <meta charset="UTF-8">
    <meta name="keyword" content="布尔教育">
    <title>Document</title>
</head>
<body>
    <?php 

/**
   07-XML 用SimpleXML快速解析文档
 * DOMDocument 来解析操作xml

 xml文件的解析 分析这么几步

 1、得到面（整个文档）
 $xml->new DOMDocument('1.0','utf-8');
 $xml->load('xxx.xml');

 2、得到串(节点列表对象 nodelist Object)
 $xml->getElementsByTagName('节点名')；

 3、得到点(节点/元素)
 $nodelist->item(0/1/2...)

 利用DOM的标准，来层层解析xml,思路明确但是麻烦

 simpleXML xpath
 实战：用xml充当数据库 做词典查询

  simpleXML解析xml文件非常简单 因为一次性把xml文档解析成一个大的对象



 */
  //从文件载入xml文档
$simxml = simplexml_load_file('06-1.xml');
// print_r($simxml);

// echo $simxml->goods[0]->name;//天龙八部

//看看AppStore下有几个
echo '有',$simxml->count(),'子元素<br>';//2个

$sons = $simxml->children();
foreach ($sons as $k) {
    echo "分别有",$k->count(),'个子元素',$k->getName(),'<br>';
}

?>
</body>
</html>