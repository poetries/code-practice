;(function($){
	$.fn.tab=function(options){
		var defaults = {
			//各种参数 各种属性

			currClass:'curr',
			tabNav:'.tabNav>li',
			tabContent:'.tabContent>div',
			eventType:'click'


		}
		var options = $.extend(defaults,options);//options继承了defaults中的属性

		this.each(function(){
			//实现功能的代码 最好不要写死 要可配置
		 var _this = $(this);//$(this)指代div
		 _this.find(options.tabNav).bind(options.eventType,function(){
		 	$(this).addClass(options.currClass).siblings().removeClass(options.currClass);

		 	var index = $(this).index();
		 	_this.find(options.tabContent).eq(index).show().siblings().hide();
		 });

		});

		//返回一个对象
		return this;
	}
})(jQuery);  