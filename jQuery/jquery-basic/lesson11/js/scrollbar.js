(function($){

	$.fn.scrollbar = function(){
		this.each(function(){
			var $scroll = this;
			var $content = $('div.panel',$scroll);
			var $panel = $(':first',$content);
			var $bar = $('<em class="bar"></em>').appendTo($scroll);
			var ch,ph,sh;
			function reset(){
				ch = $content.height();
				ph = $panel.height();
				if(ph==0)return;
				sh = ch/(ph/ch);
				if(sh>ch){
					$bar.hide();
				}else{
					$bar.height(sh);
					$bar.show();
				}
			}
			reset();
			$bar.mousedown(function(e){
				var offsetY = e.offsetY;//当我们在bar上按下去的时候，我们按在了bar的什么位置(y);
				reset();
				$(document.body).mousemove(function(e){
					var top = e.clientY+this.scrollTop-$content.offset().top-offsetY;
					var range = ch-sh;
					if(top<0){
						top=0;
					}else if(top>range){
						top=range;
					}
					$bar.css('top',top);
					var rate = top/range;
					$content.scrollTop((ph-ch)*rate);
					return false;
				}).mouseup(function(){
					$(this).unbind('mousemove');
				});
				return false;
			});
		});
	}
})(jQuery);