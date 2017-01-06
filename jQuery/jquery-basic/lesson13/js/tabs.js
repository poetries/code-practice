(function($){
	$.fn.tabs = function(){
		$('li',this).click(function(){
			var $this = $(this);
			$this.addClass("on").siblings().removeClass("on");
			$($('a',$this).attr("for")).addClass("on").siblings().removeClass("on");
		});
	};
})(jQuery);