/* 运动框架 */
function move(obj,attr,value,time){
	var startValue = parseFloat(getStyle(obj,attr));//获取对象的初始属性值
	var nowTime = new Date();
	var timer = setInterval(function(){
		var n = (new Date() - nowTime) / time;//time动画执行时间
		
		if(n >=1){
			n = 1;
			clearInterval(timer);
		}
		obj.style[attr] = startValue + n*(value - startValue) + "px";
		
	},1000/60);//1000/60和浏览器更新频率一样
}

function getStyle(obj,attr){
	return getComputedStyle(obj)[attr] ? getComputedStyle(obj)[attr]:obj.currentStyle[attr];
}
