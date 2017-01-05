 window.onload = function(){
 	
 	var canvas = getId("canvas");
 	var playBtn = getId("play");
 	var prev = getId("prev");
 	var next = getId("next");
 	var audio = new Music(canvas,40);
 	var url = data[0].src;
 	var n = 0;
 	audio.request(url);
 	playBtn.style.backgroundImage = "url(images/zanhover.png)";
 	
 	playBtn.onclick = function(){
 		var status = audio.status;
 		if(status !=0){ //不是准备阶段
 			if(status == 1){ //播放中
 				audio.pause();
 				playBtn.style.backgroundImage = "url(images/playhover.png)";
 			}else if(status == 2){ // 暂停
 				audio.reset();
 				playBtn.style.backgroundImage = "url(images/zanhover.png)";
 			}
 		}
 	}
 	
 	
 	prev.onclick = function(){
		n--;
		if (n < 0) {
			n = data.length - 1;
		}
		url = data[n].src;
		audio.switchSong(url,n);
 	}
 	next.onclick = function(){
 		n++;
		if (n > data.length - 1) {
			n = 0;
		}
		url = data[n].src;
		audio.switchSong(url,n);
 	}
 	
 	var allTime = getId("allTime");
 	var currTime = getId("curTime")
 	audio.onplay = function(duration){
 		allTime.innerHTML = time(duration);
 		currTime.innerHTML = audio.currentTime;
 	}
 	
 	
 	
 	
 	
 	
 	
 	
 	
 	
 	
 	
 	
 	
 	
 	
 	
 	
 	
 	
 	
 	//拖拽
	var skin = getId("skin");
	var music_song_content = getId("music_song_content");
	
	skin.onmousedown=function(){
		document.onmousemove=moveDiv1;
	}
	skin.onmouseup=function(){
		document.onmousemove=null;
	}
	function moveDiv1(e){
		var e= e|| e.event;
		var scrollTop=document.body.scrollTop||document.documentElement.scrollTop;
		var scrollLeft=document.body.scrollLeft||document.documentElement.scrollLeft;

		skin.style.left=e.clientX-skin.offsetWidth/2+scrollLeft+"px";
		skin.style.top=e.clientY-skin.offsetHeight/2+scrollTop+"px"
	}
	
	//动态创建li歌曲列表
	var str = "";
	for (var i = 0;i < data.length;i++) {
		str += "<li><span class=\"song\">"+data[i].name
		+"</span><span class=\"singer\">"
	+data[i].singer+"</span></li>";

	}
	var oUl = getId("menu_aside_content");
	oUl.innerHTML = str;
	

 }
