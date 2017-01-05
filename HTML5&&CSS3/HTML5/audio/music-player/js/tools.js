
function getId(idName){
	return document.getElementById(idName);
}
//事件兼容写法
function addEventHander(obj,eventName,hander,type){
    if (document.attachEvent){
        obj.attachEvent("on"+eventName,hander);
	} else if(document.addEventListener) {
		obj.addEventListener(eventName,hander,type);
	}
}

//设置时间格式
function time(cTime) {
	var cTime = parseInt(cTime);
	//var h = zero(Math,floor(cTime/3600));
	var m = zero(Math.floor(cTime%3600/60));
	var s = zero(Math.floor(cTime%60));
	return m + ":" + s;
}

//补零函数
function zero(num){
	if(num < 10){
		return "0" + num;
}else {
	return " " + num;
	}
}