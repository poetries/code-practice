/*
*@Author:poetries
*@Description:����Ĺ��ܣ�ʵ����������ҳ 
*
*/

(function($){//����ص�����
	$.fn.pageView = function(callback){//fnjQuery��ԭ�� pageView ���� Ҳ���ǲ��������
		//alert(ops);
		//this.ops = ops ||{};//thisָ����ǰ�������jQuery����
		this.callback = callback;
		init.call(this );//��ʼ�����������þ��ǳ�ʼ��HTML�ṹ
		listener.call(this);//�󶨹����¼�  ʵ�ַ�ҳ
	}
	function init(){
		//this.ops//thisָ��Ŀ��������
		
		this.index = 0;//��ǰ����Ϊ0
		this.addClass("ui-pageview");
		this.children("div").addClass("ui-page").each(function(){
			$(this).attr('def',$(this).get(0).className)
		});
		this.$maxIndex = $("div.ui-page",this).size()-1;
	}
	function listener(){
			var $this = this;//�ڵ��õ�ʱ��ָ���ǵ�ǰ�Ĵ������ 
			this.bind("mousewheel",function(e){//��������������thisָ����ԭ���Ķ���
				var dir = e.originalEvent.wheelDelta;
				dir = dir>0?1:0;
				var $index = $this.index;
			
				if(dir){
					if(--$index<0){
						return;
					}
					
				}else{
					if(++$index>$this.$maxIndex){
						return;
					}
					
				}
				if(!$this.is(":animated")){//״̬�ж�
					$this.animate({"top":"-"+$index+"00%"},1000,function(){
						//if($this.callback){
							//$this.callback();
						//}
						$this.callback&&$this.callback($index,$this.children("div").eq($index));//���
					});
					$this.index = $index;
				}
				

			}); 
			$this.callback&&$this.callback(0,$this.children("div").eq(0));
	}
})(jQuery);