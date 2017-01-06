<?php
	header('content-type:text/html;charset="utf-8"');

	$arr = array(
		array('name'=>'阿飞','age'=>'18'),
		array('name'=>'清心','age'=>'25'),
		array('name'=>'star','age'=>'30'),
		array('name'=>'黄河','age'=>'28'),
		array('name'=>'晴雪','age'=>'26'),
		array('name'=>'阿飞','age'=>'18'),
		array('name'=>'清心','age'=>'25'),
		array('name'=>'star','age'=>'30'),
		array('name'=>'黄河','age'=>'28'),
		array('name'=>'晴雪','age'=>'26'),
		array('name'=>'star','age'=>'30'),
		array('name'=>'黄河','age'=>'28'),
		array('name'=>'晴雪','age'=>'26'),
	);
	
	echo json_encode($arr);
?>