$(function(){
	var y = 0;
var _h = 0;
var _t = 0;
var newTop = 0;
var _height = 0;
var  percent = 0;
var scrollTextH = 0;
$(".scrollBtn").mousedown(function (e) {

    y = e.clientY; //鼠标按下距离浏览器顶部的距离
    _h = $(".scrollBtn").offset().top; //滑块距离浏览器顶部的距离
    _t = y-_h;//鼠标按下的位置距离滑块顶端的距离
    _height =  $(".scrollBar").height()- $(".scrollBtn").height();

    $(document).mousemove(function (e) {
        newTop = e.clientY - _t - $(".scrollBar").offset().top;//鼠标按下的位置距离scrollBar顶部的距离
        if (newTop<0){
            newTop = 0;
        }else if (newTop>_height){
            newTop = _height;
        }
        $(".scrollBtn").css("top",newTop);
        //document.title = newTop;

        //计算滑块在能滑动范围内的比例
        percent = newTop/_height;
        scrollTextH = percent*($(".scrollText").height()-$(".scrollCon").height());
        $(".scrollText").css("top",-scrollTextH);
    });
    $(document).mouseup(function () {
        $(document).unbind("mousemove");
        $(document).unbind("mouseup");

    });
        return false;//阻止浏览器默认行为
   });
});
