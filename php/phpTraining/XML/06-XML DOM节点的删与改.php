<?php

/**-XML DOM节点的删与改
 * 
 * <appstore>
    <goods goods_id="j001">
        <name>天龙八部</name>
        <intro><![CDATA[这是一部好书]]></intro>
    </goods>
        <goods goods_id="j002">
        <name>神雕侠侣</name>
        <intro><![CDATA[这是一部好看的电视剧]]></intro>
    </goods>
	</appstore>
 */

// error_reporting(0);


//完成节点的删除 修改

//创建DOM对象
$dom = new DOMDocument('1.0','utf-8');

//载入xml
$dom->load('06-1.xml');

//把天龙八部商品删除
// 查找goods节点 得到列表 从列表中选取天龙八部节点

$t1 = $dom->getElemntsByTagName('goods')->item(0);
$t1 ->parentNode->removeChild($t1);
//删除节点
header('content-type:text/xml;');
echo $dom->savexml();

//修改节点 节点不能被修改 只被替换

$name = $dom->getElemntsByTagName('name')->item(0);
$xia = $dom->createTextnode('侠客行');

$name->replaceChild($xia,$name->firstChild);


 ?>