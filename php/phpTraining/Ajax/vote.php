<?php 

	//纯粹利用http协议完成ajax效果
	$cnt = file_get_contents("./res.txt");
	$cnt +=1;
	file_put_contents("./res.txt",$cnt);

	//利用http的204协议
	
	header("HTTP/1.1 204 No Content");
 ?>