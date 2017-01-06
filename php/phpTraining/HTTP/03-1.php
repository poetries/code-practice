<?php
//php+socket编程

// 性能要求模拟下载 注册 登录 批量发帖

//http请求类的接口

interface Proto
{
	//连接URL
	function conn($url);

	//发送get查询
	function get();

	//发送post查询
	function post();

	//关闭连接
	function close();


}

//实现类
class Http implements Proto
{

	//声明一个回车换行
	const CRLF = '\r\n';

	protected $errno = -1;
	protected $errstr = '';
	protected $respose = '';
	protected $url = null;
	protected $version = 'HTTP/1.1';
	protected $fh = null;

	protected $line = array();
	protected $header = array();
	protected $body = array();



	//公共构造函数
	public function __construct($url){
		$this->conn($url);
		$this->setHeader('Host:' . ' ' .$this->url['host']);
	}

	//此方法负责写请求行
	protected function setLine($method){
		$this->line[0] = $method . ' ' . $this->url['path'] . ' '. $this->version ;
	}
	//此方法负责写头信息
	protected function setHeader($headerline){
		$this->header[] = $headerline;
	}
	//此方法负责写主体信息
	protected function setBody(){

	}

	//连接URL
	public function conn($url){
		$this->url = parse_url($url);
		//判断端口 如果没分析出端口 默认80
		if(!isset($this->url['$url'])){
			$this->url['port'] = 80;
		}
		$this->fh = fsockopen($this->url['host'],$this->url['port'],$this->errno,$this->errstr,3);
	}

	//构造get请求的数据
	public function get(){
		$this->setLine('GET');
		$this->request();
		return $this->respose;
	}

	//构造post查询的数据
	public function post(){

	}

	//真正请求
	public function request(){
		//把请求行 头信心 实体信息 放在一个数组里 便于拼接
		$req = array_merge($this->line,$this->header,array(''),$this->body,array(''));
		// print_r($req);

		$request = implode(self::CRLF,$req);
		//echo $req;

		fwrite($this->fh,$req);

		while(!feof($this->fh)){
			$this->respose .= fread($this->fh,1024);
		}
		$this->close();//关闭连接

	}

	//关闭连接
	function close(){

	}

}


$url = 'http://www.runoob.com/python/python-100-examples.html';
$http = new Http($url);
echo $http->get();


// print_r($http);

 // $http->request()
 // ;

 ?>