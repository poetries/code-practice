<?php
 /*用DOM生成如下文档：
<appstore>
    <goods goods_id="j001">
        <name>天龙八部</name>
        <intro><![CDATA[这是一部好书]]></intro>
    </goods>
</appstore>

步骤：
1、先创建“天龙八部文本节点”
2、在创建普通的name节点
3、把文办节点放入name节点中

4、创建cdata节点
5、创建intro节点
6、把ctata加点放入intro中

7、创建goods节点
8、把name/intro节点放入goods节点中

9、创建属性节点goods_id
10、把属性节点放入goods节点中

11、创建AppStore节点
12、把goods放入AppStore中

13、在把AppStore放入文档中

 在上面步骤中体现了：
 创建普通节点
 创建文本节点
 创建VDATA节点
 创建属性节点
 增加子节点

 */

//创建DOM文档对象
$dom  = new DOMDocument('1.0','utf-8');

//1、先创建“天龙八部文本节点”
$t1 = $dom->createTextNode('天龙八部');

//2、在创建普通的name节点
$name = $dom->createElement('name');

//3、把文本节点放入name节点中
$name->appendChild($t1);

//4、创建cdata节点
$cdata = $dom->createCDATASection('天龙八部是部好书');

//5、创建intro节点

$intro = $dom->createElement('intro');

//6、把ctata加点放入intro中
$intro->appendChild($cdata);

//7、创建goods节点
$goods = $dom->createElement('goods');

//8、把name/intro节点放入goods节点中
$goods->appendChild($name);
$goods->appendChild($intro);

//9、创建属性节点goods_id
$attr = $dom->createAttribute('goods_id');
$attr->value = 'j001';

//10、把属性节点放入goods节点中
$goods->appendChild($attr);

//11、创建AppStore节点
$appstore = $dom->createElement('appstore');

//12、把goods放入AppStore中
$appstore->appendChild($goods);


//13、在把AppStore放入文档中
$dom->appendChild($appstore);

//最后想输出 保存都行

//输出
header('content-type:text/xml');
echo $dom->savexml();//直接输出

//保存

//echo $dom->save('06.xml')?'OK':'FAIL';



?>
