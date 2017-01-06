<?php 

//接受单词并解析查询单词

$goods = isset($_GET['goods']?trim($_GET['goods']:''));
if (empty($goods)) {
	exit('你想查询什么?');
}

//解析xml并查询

$xml = new DOMComment('1.0','utf-8');
$xml->load('09-1.xml');

$namelist = $xml->getElementsBtTagName('goods_name'); 
foreach ($collection as $value) {
	
}

 ?>