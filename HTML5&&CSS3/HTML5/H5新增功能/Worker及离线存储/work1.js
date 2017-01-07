importScripts("dataImg.js");
self.onmessage = function(ev){
	newimg(ev.data.data1,ev.data.data2,ev.data.data3,ev.data.data4);
	var img = ev.data.data4;
	self.postMessage(img);
}