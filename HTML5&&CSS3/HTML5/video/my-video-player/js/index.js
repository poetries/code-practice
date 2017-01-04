window.onload = function(){
	var prev = getId("prev"),
		next = getId("next"),
		video = getId("video"),
		play = getId("play"),
		play_icon = getId("play").getElementsByTagName("i")[0],
		pro = getId("pro"),
		pro_bg = getId("pro_bg"),
		pro_bar = getId("pro_bar"),
		curTim = getId("nowTime"),
		totalTime = getId("totalTime"),
		mute_bg = getId("mute_bg"),
		mute_bar = getId("mute_bar"),
		ylj = getId("ylj"),
		full = getId("full"),
		n = 0,
		mark = true;

		play.onclick = function(){
			if(mark){
				video.play();
				play_icon.innerHTML = "&#xe603;";
				nowTime();
			}else {
				video.pause();
				play_icon.innerHTML = "&#xe605;";
			}
			mark = !mark;
			totalTime.innerHTML = time(video.duration);
			
		}
		//当前播放时间
		video.addEventListener("timeupdate",function(){
			nowTime();
		},false);
		function nowTime(){
			curTim.innerHTML = time(video.currentTime);
			var n = video.currentTime/video.duration;
			pro_bar.style.left = n*(pro.offsetWidth-pro_bar.offsetWidth)+"px";
			pro_bg.style.width = n*(pro.offsetWidth-pro_bar.offsetWidth)+"px";
		}
		//拖拽进度条
		pro_bar.onmousedown = function(ev){
			
			var ev = ev || window.event;
			var x = ev.clientX - this.offsetLeft;
			document.onmousemove = function(ev){
				var _left = ev.clientX - x;
				//console.log(_left);
				if (_left <= 0)
				{
					_left = 0;
				}else if(_left >= (pro.offsetWidth-pro_bar.offsetWidth)){
					_left = pro.offsetWidth-pro_bar.offsetWidth;
				}
				pro_bar.style.left = _left + "px";
				pro_bg.style.width = _left + "px";
				var proN = _left/(pro.offsetWidth-pro_bar.offsetWidth);
				video.currentTime = proN*video.duration;
				//nowTime(); 这里程序有bug 待修复
				curTim.innerHTML = time(proN*video.duration);
				console.log("oVideo.currentTime"+video.currentTime);
				console.log("proN*oVideo.duration "+proN*video.duration );
			}
			document.onmouseup = function(){
				document.onmousemove = null;
				document.onmouseup = null;
			}
		}
		
		//全屏
		full.onclick = function(){
			oVideo.webkitRequestFullScreen();
		}

		prev.onclick = function (){
			n--;
			if(n<0){
				n = 0;
			}
			video.src = data[n].src;

		}
		next.onclick = function (){
			n++;
			if(n>data.length-1){
				n = data.length-1;
			}
			video.src = data[n].src;

		}
		
		//音量控制
	var ylj = getId("ylj");
	var mute_bg = getId("mute_bg");
	var mute_bar = getId("mute_bar");
	var mute = getId("mute");
	
	mute_bar.onmousedown = function(ev){
		var ev = ev || window.event;
		var x = ev.clientX - this.offsetLeft;
		document.onmousemove = function(ev){
			var w = ev.clientX - x;
			if (w <= 0)
			{
				w = 0;
			}else if(w >= mute.offsetWidth-mute_bar.offsetWidth){
				w = mute.offsetWidth-mute_bar.offsetWidth;
			}
			mute_bg.style.width = w + "px";
			mute_bar.style.left = w + "px";
			var proN = w/(mute.offsetWidth-mute_bar.offsetWidth);
			video.volume = proN;
			nowTime();
		}
		document.onmouseup = function(){
			document.onmousemove = null;
			document.onmouseup = null;
		}
	}
	var mark1 = true;
	ylj.onclick = function(){
		if(mark1){
			console.log(11);
			video.volume = 0;
			this.innerHTML = "&#xe62d;";
		}else{
			this.innerHTML = "&#xe621;";
		}
		mark1 = !mark1;
		
	}
		
		

}

	function getId(id){
		return document.getElementById(id);
	}
	
	function time(cTime){
		cTime = parseInt(cTime);
		var h = zero(Math.floor(cTime/3600));
		var m = zero(Math.floor(cTime%3600/60));
		var s = zero(Math.floor(cTime%60));
		return h+":"+m+":"+s;
	}
	function zero(num){
		if (num < 10)
		{
			return "0"+num;
		}else{
			return ' '+num;
		}
	}