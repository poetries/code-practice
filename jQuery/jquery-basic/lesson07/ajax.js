function ajax(aJson){
	var type = aJson.type || 'get';
		// type 接收 传输方法 get or post ，默认 get
	var asyn = aJson.asyn || true;
		// asyn 接收 是否异步 true=异步，false=同步，默认true
	var url = aJson.url;
		// url 接收 传输位置
	var success = aJson.success;
		// success 接收 传输完成后的回调函数
	var data = aJson.data || '';
		// data 接收需要附带传输的数据

	//创建ajax对象
	var xhr = null;
	if ( window.XMLHttpRequest )
	{
		xhr = new XMLHttpRequest();
	}else{
		xhr = new ActiveXObject( 'Microsoft.XMLHTTP' );
	}
		
	//get方法附带数据拼接到url
	if(type=='get'&& data)url += '/?'+ data + '&' + Math.random();
	
	//初始化ajax请求
	xhr.open( type , url , asyn );

	//规定传输数据的格式
	xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
	
	//发送ajax请求（包括post数据的传输）
	type=='get'?xhr.send():xhr.send( aJson.data );
	
	//当ajax请求状态发生改变时执行的函数
	xhr.onreadystatechange = function(){
		//请求成功的话
		if (xhr.readyState == 4)
		{
			if ( xhr.status >= 200 && xhr.status < 300)
			{
				//回调函数
				success && success( xhr.responseText );
			}else{
				alert('哥们儿，不好意思，出错啦' + xhr.status )
			}
		}

	};
}