/**
* 加载完成后 添加script文件 （推荐方法） 只需请求一次 加载多个JavaScript文件
*/
function loadScript(url,callback){
	var script = document.createElement("script");
	script.type = "text/javascript";
	if(script.readyState){//IE
		script.onreadystatechange = function(){
			if(script.readyState == "loaded" || script.readyState == "complete"){
				onreadystatechange = null;
				callback();
			}
		}
		
	}else {
		script.onload = function(){
			callback();
		}
	}
	script.src = url;
	document.getElementsByTagName("head")[0].appendChild(script);
}
loadScript("js/defer.js",function(){
	console.log("加载成功");
});
loadScript("js/async.js",function(){
	console.log("加载成功");
});
