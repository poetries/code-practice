<?php

//xpath快速解析
//$sql = 'xxx'  路径表达式
//$xpath->query($sql)
//xpath是从根节点到某个节点经过得路径
//查询04.xml 里面的每本书的title
//bookstore/book/title
$xml = new DOMDocument('1.0','utf-8');
$xml->load('04.xml');
$xpath = new DOMXPATH($xml);

//路径表达式
/*$sql = 'bookstore/book/title';
$rs = $xpath->query($sql);
print_r($rs);
echo $rs->item(0)->nodeValue;

*/

//查询book节点下面的第一个title节点

/*$sql = 'bookstore/book[1]/title';
$rs = $xpath->query($sql);
print_r($rs->item(0)->nodeValue);*/


//查询book下面的节点价格>40

$sql = 'bookstore/book[price>30]/title';
$rs = $xpath->query($sql);
echo $rs->item(0)->nodeValue;
 ?>