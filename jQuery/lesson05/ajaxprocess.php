<?php
	header("content-type:text/html;charset='utf-8'");

	$user = $_POST['username'];
	$pwd = $_POST["pwd"];

	echo "�����û�����:{$user},����������:{$pwd}"
?>