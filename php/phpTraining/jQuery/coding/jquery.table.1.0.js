;(function($){
	$.fn.table=function(options){
		var defaults = {
			//各种参数 各种属性
			evenRowClass:'evenRow',
			oddRowClass:'oddRow',
			currentClass:'currentRow',
			eventType1:'mouseover',
			eventType2:'mouseout',
			


		}
		var options = $.extend(defaults,options);//options继承了defaults中的属性

		this.each(function(){
			//实现功能的代码
			var _this = $(this);//把this缓存起来 重复利用
			//偶数行
			_this.find('tr:even').addClass(options.evenRowClass);

			//奇数行
			_this.find('tr:odd').addClass(options.oddRowClass);

			//鼠标放上去和鼠标离开  实际开发中不用这种
/*			_this.find('tr').mouseover(function() {
				$(this).addClass(options.currentClass);
			}).mouseout(function() {
				$(this).removeClass(options.currentClass);
			});*/

			//bind放可以自由修改 灵活  这里写死了
/*			_this.find('tr').bind('mouseover',function(){
				$(this).addClass(options.currentClass);
			});
			_this.find('tr').bind('mouseout',function(){
				$(this).removeClass(options.currentClass);
			});
*/

	//下面是灵活的写法
			_this.find('tr').bind(options.eventType1,function(){
				$(this).addClass(options.currentClass);
			});
			_this.find('tr').bind(options.eventType2,function(){
				$(this).removeClass(options.currentClass);
			});


		});
		//返回一个对象
		return this;
	}
})(jQuery);  