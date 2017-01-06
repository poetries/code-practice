<?php 

header('Content-type:text/html;charset=utf-8');

// $username = $_POST['username'];
$username = $_GET['username'];

if($username == 'admin'){
	// echo '用户名不能是admin';
	//后台一般这样写 只返回布尔值 需要在页面中判断
	echo "true";
}else {
	// echo '用户名可以注册';
	echo "false";
}

 ?>