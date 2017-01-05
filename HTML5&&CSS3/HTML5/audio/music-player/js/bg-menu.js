$(function(){
	//菜单显示隐藏
	$("#menu_btn").on("click",function(){
		$(".scrollCon").slideToggle(500);
	});
	$("#music_song_btn").on("click",function(){
		$(".music_song_content").toggle(1000);
	});
	
	//背景设置
	$(".skin_btn,.pic_comm").on("click",function(){
		$(".skin_content").slideToggle(500);
		
	});
	$(".skin_title").find("span").on("click",function(){
		$(this).addClass("active").siblings().removeClass("active");
	});
	$(".skin_title span").on("click",function(){
		var index = $(this).index();
		$(".skin_img .pic_comm").eq(index).addClass("active").siblings().removeClass("active");
	});

	$(".pic_comm img").click(function(){
		var picUrl = $(this).attr("src");
		
		$("body").css({"background":"url("+picUrl+")"+" no-repeat"});
	});
	
	//爱心 音量 下载样式切换
	$("#love").click(function(){
		$(this).toggleClass("love");
	});
	$("#download").click(function(){
		$(this).toggleClass("download");
	});
	$("#ylj").click(function(){
		$(this).toggleClass("ylj");
	});
//	
});
