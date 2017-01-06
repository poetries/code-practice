<?php
	header("content-type:text/html;charset='utf-8'");

	$user = $_GET['username'];
	$pwd = $_GET["pwd"];

	echo "您的用户名是:{$user},您的密码是:{$pwd}"
?>