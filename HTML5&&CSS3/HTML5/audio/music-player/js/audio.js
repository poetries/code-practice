// 封装一个音乐对象

function Music(canvas, num){
	this.canvas = canvas;
	this.num = num || 10;
	this.status = 0; //保存歌曲的播放状态   0:准备 1:播放中 2:暂停 
	this.init();
}
Music.prototype = {
	//初始化
	init: function(){
				// H5音频文件的接口 
				window.AudioContext=window.AudioContext||window.webkitAudioContext||
									window.mozAudioContext;
				// 请求动画帧
				window.requestAnimationFrame = window.requestAnimationFrame ||
							   window.webkitRequestAnimationFrame || 
							   window.mozRequestAnimationFrame || 
							   window.msRequestAnimationFrame;
				
				try{
					this.audio = new AudioContext();
				}catch(e){
					alert("请升级您的浏览器!!");
				}
	},
	//请求数据 Ajax
	request: function(url){
		var that = this; //保存this 防止变动
		var xhr = new XMLHttpRequest();
		xhr.open("GET",url,true);
		xhr.responseType = "arraybuffer"; //二进制原始缓冲区
		xhr.onload = function(e){
			that.load(this.response);
		}
		xhr.send();
		
	},
	//获取Ajax请求到的数据并且解码成音乐数据
	load: function(dataResult){
		var that = this;
		this.audio.decodeAudioData(dataResult,function(buffer){
			that.prepared(buffer);
			that.play();
		},function(e){
			alert("文件解码失败");
		});
		
	},
	prepared: function(buffer){
		this.buffer = buffer;//保存音频数据
		this.startOffet = 0; //计算开始时间
		this.status = 0; // 准备状态
		this.stop(); // 把上一曲停止
	},
	play: function(){
		this.status = 1; //播放状态
		this.startTime = this.audio.currentTime; // 获取当前播放时间
		this.startOffet = this.startOffet || 0;
		this.audioSourceNode = this.audio.createBufferSource(); //创建一个音乐数据源节点
		this.audioSourceNode.buffer = this.buffer;
		this.analyser = this.audio.createAnalyser(); //创建分析机制
		this.audioSourceNode.connect(this.analyser); // 将源节点和分析机制关联起来
		this.analyser.connect(this.audio.destination); //将分析机制和扬声器关联起来 
		this.audioSourceNode.start(0,this.startOffet%this.buffer.duration);
		//绘制音频
		this.drawSpectrum(this.analyser);
		this.onplay&&this.onplay(this.buffer.duration);
	},
	drawSpectrum: function(){
		var that = this,
		    w = this.canvas.width,
		    h = this.canvas.height,
		    canvas = this.canvas,
		    meterWidth = 7, //每个线条的宽度
		    gap = 10, //频谱条间距
		    capHeight = 2;//频谱条上面帽子高度
		    capStyle = "#fff", //帽子的颜色
		    num = this.num, //频谱条数
		    capPositionArr = []; //保存帽子位置
		    
		var ctx = canvas.getContext("2d"),
			color = ctx.createLinearGradient(0,0,0,200);
			
			color.addColorStop(0,"#00f");
			color.addColorStop(0.5,"#f00");
			color.addColorStop(1,"#0f0");
			
		var draw = function (){
			var voiceHigh = new Uint8Array(that.analyser.frequencyBinCount);
			that.analyser.getByteFrequencyData(voiceHigh);
			var step = Math.round(voiceHigh.length/num); //采样步长
			ctx.clearRect(0,0,w,h);
			for (var i = 0;i < num; i++) {
				var value = voiceHigh[i*step]; //计算每个频谱条的高度	
				if(capPositionArr.length < Math.round(num)){
					capPositionArr.push(value);
				}
				ctx.fillStyle = capStyle;
				//开始绘制帽子
				if(value < capPositionArr[i]){ //当帽子的高度大于频谱的高度时让帽子缓慢下降
					ctx.fillRect(i*gap,h-(--capPositionArr[i]),meterWidth,capHeight);
				}else {//当帽子的高度小于频谱的高度时让帽子被频谱顶上去
					ctx.fillRect(i*gap,h-value,meterWidth,capHeight);
					capPositionArr[i] = value;
				}
				//绘制频谱条
				ctx.fillStyle = color;
				ctx.fillRect(i*gap,h-value+capHeight,meterWidth,value);
			}
			requestAnimationFrame(draw); //调用动画帧
		}
		draw();

	},
	//停止
	stop: function(){
		this.status = 0;
		if(this.audioSourceNode){
			this.audioSourceNode.stop();
		}
	},
	//暂停
	pause: function(){
		this.stop();
		this.status = 2; //暂停状态
		this.startOffset += this.audio.currentTime - this.startTime;
	},
	//恢复播放
	reset: function(){
		this.play();
	},
	//切歌
	switchSong: function(url,n){
		this.stop();
		this.request(url);
		var switchInfo = function(){
			var that = this;
			var singer_pic = getId("singer_pic").getElementsByTagName("img")[0];
			var song_title = getId("song_title");
			var song_author = getId("song_author");
			var download = getId("download");
			var oBtnPlay = getId("play");
			var love = getId("love");
			
			
			singer_pic.src = data[n].star;
			song_title.innerHTML = data[n].name;
			song_author.innerHTML = data[n].singer;
			
			download.setAttribute("href","music/"+data[n].name+".mp3");
			download.setAttribute("download","music/"+data[n].name+".mp3");
			
		    oBtnPlay.style.backgroundImage = "url(images/zanhover.png)";
			love.setAttribute("class","iconfont music_func_item");
			download.setAttribute("class","iconfont music_func_item");
			singer_pic.className = "rorate";
			
			
		};

		switchInfo();

	},
	//音量控制
	volume : function(n){
		this.gainNode = this.audio.createGain();
		this.audioSourceNode.connect(this.gainNode);
		this.gainNode.connect(this.audio.destination);
		this.gainNode.gain.value = n;
	}
	
	
	
	
};
