// H5音频文件的接口 
window.AudioContext=window.AudioContext||
					window.webkitAudioContext||
					window.mozAudioContext;
// 请求动画帧
window.requestAnimationFrame = window.requestAnimationFrame ||
							   window.webkitRequestAnimationFrame || 
							   window.mozRequestAnimationFrame || 
							   window.msRequestAnimationFrame;

							   
window.onload = function(){
	var oBtnPlay = getId("play") 
,   prev = getId("prev")
,   next = getId("next")
,   love = getId("love")
,   download = getId("download")
,   song_title = getId("song_title")
,   song_author = getId("song_author")
,   music_song_btn = getId("music_song_btn")
,   audio = getId("audio")
,   oUl = getId("menu_aside_content")
,	mark = true
,   singer_pic = getId("singer_pic").getElementsByTagName("img")[0]
,   actx = new AudioContext() //创建音乐对象
,   analyser = actx.createAnalyser() //创建一个分析节点对象
,   audioSrc = actx.createMediaElementSource(audio)  //创建媒体源节点
,   canvas = getId("canvas")
,   ctx = canvas.getContext("2d")
,   canvasColor //音普的渐变颜色
,   num = 100 // 限制绘制在canvas上的音普数量
,   n = 0 // 与Data数组数据挂钩
,  	allTime = getId("allTime")
,   curTime = getId("curTime") 
,   pro_bar = getId("pro_bar") 
,   pro_bar_bg = getId("pro_bar_bg")
,   pro_bar_btn = getId("pro_bar_btn")
,   progress_pencent
,   muteBar_circle = getId("muteBar_circle")
,   ylj = getId("ylj")
,   mutePro = getId("mutePro")
,   muteBar = getId("muteBar")
,	lrcCon = getId("lrcCon")
,	txt = data[0].lrc //保存歌词
;
	
	oBtnPlay.onclick = function(){
		if(mark){
			audio.play();
			singer_pic.className = "rorate";
			this.style.backgroundImage = "url(images/zanhover.png)";
		}else {
			audio.pause();
			singer_pic.className = "";
			this.style.backgroundImage = "url(images/playhover.png)";
		}
		mark = !mark;
		allTime.innerHTML = time(audio.duration);
		
	}

	switchPlay(0);
	function switchPlay(n){
		audio.src = data[n].src;
		singer_pic.src = data[n].star;
		song_title.innerHTML = data[n].name;
		song_author.innerHTML = data[n].singer;
		txt = data[n].lrc;
		
		//音乐下载
		download.setAttribute("href","music/"+data[n].name+".mp3");
		download.setAttribute("download","music/"+data[n].name+".mp3");
		
		//切换的时候更改样式
		
		oBtnPlay.style.backgroundImage = "url(images/zanhover.png)";
		love.setAttribute("class","iconfont music_func_item");
		download.setAttribute("class","iconfont music_func_item");
		singer_pic.className = "rorate";
		load();
		audio.play();
		lrcCon.style.marginTop = 20 + "px";
		currentLrc();
	}
	//上一曲
	prev.onclick = function(){
		n--;
		if (n < 0) {
			n = data.length - 1;
		}
		switchPlay(n);
	}
	
	//下一曲
	function nextSong(){
		n++;
		if (n > data.length - 1) {
			n = 0;
		}
		switchPlay(n);
	}
	next.onclick = function(){
		nextSong();
	}
	
	//动态创建li歌曲列表
	var str = "";
	for (var i = 0;i < data.length;i++) {
		str += "<li><span class=\"song\">"+data[i].name
		+"</span><span class=\"singer\">"
	+data[i].singer+"</span></li>";

	}
	oUl.innerHTML = str;
	
	
	//音乐列表歌曲对应
	var oLi = getId("menu_aside_content").getElementsByTagName("li");
	for (var i = 0; i < oLi.length; i++) {
		oLi[i].index = i;
		oLi[i].onclick = function(){
			n = this.index;
			switchPlay(n);
		}
	}
	//播放完成自动跳转到下一曲
	audio.addEventListener("ended",function(){
		nextSong();
	},false)
	
	//监听歌曲是否加载完成
	
	function load(){
		audio.addEventListener("canplay",function (){
			allTime.innerHTML = time(audio.duration);
		},false);
	}
	
//进度条

audio.addEventListener("timeupdate",function(){
	nowTime();
});

	function nowTime(){
		
		curTime.innerHTML = time(audio.currentTime);
		var n = audio.currentTime / audio.duration;
		
		pro_bar_btn.style.left = n*(pro_bar.offsetWidth - pro_bar_btn.offsetWidth) + "px";
		pro_bar_bg.style.width =n*(pro_bar.offsetWidth - pro_bar_btn.offsetWidth) + "px";
	}

	//拖拽进度条
	pro_bar_btn.onmousedown = function(e){
		//alert(11);
		var e = e || window.event;
		//鼠标按下的点距离滑块本身左边的距离 = 鼠标按下的地方 - 滑块距离左边距离
		var x = e.clientX - this.offsetLeft; 
		document.onmousemove = function(e){
			var _left = e.clientX - x;//滑块距离左边的距离
			var _width = pro_bar.offsetWidth - pro_bar_btn.offsetWidth; //能滑动的区域
			
			if(_left <= 0){
				_left = 0;
			}else if (_left >=_width){
				_left = _width;
			}
			pro_bar_btn.style.left = _left+ + "px";
			pro_bar_bg.style.width = _left + "px";
			progress_pencent = _left/(pro_bar.offsetWidth - pro_bar_btn.offsetWidth);
			audio.currentTime = progress_pencent*audio.duration;
			nowTime();
		}
		document.onmouseup = function(){
			document.onmousemove = null;
			document.onmouseup = null;
		}
	}
	
	// 音量控制
	muteBar_circle.onmousedown = function(ev){
		var ev = ev || window.event;
		var x = ev.clientX - this.offsetLeft;
		document.onmousemove = function(ev){
			var w = ev.clientX - x;
			if (w <= 0)
			{
				w = 0;
			}else if(w >= mutePro.offsetWidth-muteBar_circle.offsetWidth){
				w = mutePro.offsetWidth-muteBar_circle.offsetWidth;
			}
			muteBar.style.width = w + "px";
			var proN = w/(mutePro.offsetWidth-muteBar_circle.offsetWidth);
			audio.volume = proN;
			nowTime();
		}
		document.onmouseup = function(){
			document.onmousemove = null;
			document.onmouseup = null;
		}
	}
	var mark1 = true;
	ylj.onclick = function(){
		audio.volume = 0;
		muteBar.style.width = "0px";
		if(mark1){
			ylj.innerHTML = "&#xe62d;";
		}else {
			ylj.innerHTML = "&#xe621;";
		}
		mark1 = !mark1;
	}

	//歌词同步
	
	function currentLrc(){
		var lrcArr = txt.split("[");
		//console.log(lrcArr);
		var html = '';
		for (var i=0;i < lrcArr.length ;i++ )
		{
			var arr = lrcArr[i].split("]");
			//console.log(arr);
			var time = arr[0].split(".");
			var timer = time[0].split(":");
			//console.log(timer);
			var ms = timer[0]*60 + timer[1]*1;//将时间转换为秒
			//console.log(ms);
			var text = arr[1];//歌词内容
			if (text)
			{
				html += "<p id=gc"+ms+">"+text+"</p>"
			}
			lrcCon.innerHTML = html;
		}
		var sum = 0;
		var curTime = 0;
		var oP= lrcCon.getElementsByTagName("p");
		audio.addEventListener("timeupdate",function(){
			curTime = parseInt(this.currentTime);//获取当前播放的时间
			//console.log(curTime);
			if (document.getElementById("gc"+curTime))
			{	
				//console.log(document.getElementById("gc"+curTime));
				for (var i=0;i<oP.length ;i++  )
				{
					oP[i].style.color = "#ccc";
				}
				document.getElementById("gc"+curTime).style.color = "rgb(119, 241, 12)";
				if (oP[8+sum].id == "gc"+curTime)
				{
					lrcCon.style.marginTop = 20-sum*20 + "px";
					sum++;
				}
			}
		});
	}
	currentLrc();

	
	
	audioSrc.connect(analyser); //媒体源节点链接到分析机制中
	analyser.connect(actx.destination); //将分析机制与目标点链接（扬声器）
	
	//创建音普的渐变颜色
	canvasColor = 	ctx.createLinearGradient(canvas.width*0.5,0,canvas.width*0.5,100); 
	canvasColor.addColorStop(0,"#00f");
	canvasColor.addColorStop(0.5,"#f00");
	canvasColor.addColorStop(1,"#0f0");
	
	//音普绘制
	function draw(){
		//创建一个与音乐频次等长的数组  音量的高低  Uint8Array转化为0-255之间的整数
		var voiceHigh = new Uint8Array(analyser.frequencyBinCount)
		,   step
		,   value
		;
		
		analyser.getByteFrequencyData(voiceHigh); // 将分析出来的音频数据添加到数组中
		//console.log(voiceHigh.length); // 1024
		step = Math.round(voiceHigh.length / num);
		ctx.clearRect(0,0,canvas.width,canvas.height);
		ctx.beginPath();
		for (var i = 0;i < num; i++) { // 把音量1024分为100组
			value = (voiceHigh[step*i]) / 3; //使数值高度保持在一百以内
			ctx.fillStyle = canvasColor;
			//7每根音普线条的之间的间隙  -value+1音普不播放的时候中间有一条线
			ctx.fillRect(i*10 + canvas.width / 2,90,7,-value+1); //音普中间高频部分
			ctx.fillRect(canvas.width / 2 - (i-1)*10,90,7,-value+1); 
			//ctx.fillRect(i*10 + canvas.width / 2,90,7,value+1); //反向对称绘制
		}
		//ctx.closePath();
		requestAnimationFrame(draw);
	}
	
	draw();
	
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
	

	
	

}


