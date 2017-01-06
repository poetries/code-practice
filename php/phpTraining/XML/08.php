<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php

/**
 * 练习xml转数组
 *
 *对象 用属性名->属性值，存储变量
 *数组 用键名->键值，来存储变量
 *二者区别不大 在js里面 对象就可以看成关联数组来操作
 *
 * 
 */

/*$simxml = simplexml_load_file('06-1.xml');
print_r($simxml);

echo '<hr>';

//利用强制类型转换 把对象转成数组
print_r((array)$simxml);

echo '<hr>';

//写一个函数把simplexml对象转成数组
//思路：先把最外层对象转成数组 在循环数组 某个单元只要还是对象 就调用吱声来转换

function toArray($sim)
{
	$arr = (array)$sim;

	foreach ($arr as $k=>$v) {
		if($v instanceof simplexmlelement || is_array($v)){
			$arr[$k] = toArray($v);
		}
	}
	return $arr; 

}

print_r($simxml);
print_r($xmlarr = toArray($simxml));


echo '<hr>';
//从数据库取出来的往往是数组形式 给别人开放接口时 往往用 array to  xml


//一维数组转换成xml
//思路：循环数组每个单元 加入到xml文档节点中去
$arr = array('name'=>'小明','age'=>20);

function arr2xml($arr){
	$simxml = new SimpleXMLElement('<?xml version="1.0" encoding="utf-8"?><root></root>');
	//simpleelement对象如何增加子节点
	foreach ($arr as $k=>$v) {
		$simxml->addChild($k,$v);
	}
	return $simxml->savexml();
}
header('content->type:text/xml');
echo arr2xml($arr);


echo '<hr>';*/

//三维数组

$arr = array(
	'name'=>'小明',
	'age'=>20,
	'job'=>array(
		'title'=>'经理',
		'薪水'=>5000,
		'team'=>array(
			'小轩',
			'小红',
			'小军')
		)
	);

function arr2xml($arr,$node=null){
	if($node === null){
	$simxml = new SimpleXMLElement('<?xml version="1.0" encoding="utf-8"?><root></root>');}
	else {
		$simxml = $node;
	}
	//simpleelement对象如何增加子节点
	foreach ($arr as $k=>$v) {

		if(is_array($v))
		{
			arr2xml($v,$simxml->addChild($k));
		}
		else if(is_numeric($k))
		{
		  $simxml->addChild('item'.$k,$v);
		}
		else {
			$simxml->addChild($k,$v);
		}
	}
	return $simxml->saveXML();
}
header('content->type:text/xml');
echo arr2xml($arr);


?>
</body>
</html>