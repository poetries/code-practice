<?php
	header('Content-type:text/html;charset = utf-8');

	//判断文件提交的方式
	if(strtolower($_SERVER['REQUEST_METHOD']) !='post'){
		exit_status(array('code' => 1,'msg' => '错误的提交方式'));
	}
	//判断是否上传成功
	//array_key_exists 检查给的键值是否存在于数组中
	//$_FLLES['file']['error'] == 0 代表上传成功 若果>0的话就是失败
	if(array_key_exists('file',$_FILES) && $_FILES['file']['error'] == 0){
		exit_status(array('code' => 0,'msg' => '文件上传成功'));
	}
	//若果上传不成功，返回错误信息
	exit_status(array('code' => 2,'msg' => '文件上传失败'));
	
	function exit_status($str){
		echo json_encode($str);//以json的格式来输出
		exit;
	}
?>