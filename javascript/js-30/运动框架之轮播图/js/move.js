
function move(dom,json,callBack){
    clearInterval(dom.timer);
    dom.timer = setInterval(function(){
        var mark = true;
        for(var attr in json){
            var cur = null;
            if(attr == "opacity"){
                cur = getStyle(dom,attr)*100;
            }else{
                //如果没写 默认填充成0
                cur = parseInt(getStyle(dom,attr))||0;
            }
            var target = json[attr];
            var speed = (target - cur)*0.2;
            speed = speed>0?Math.ceil(speed):Math.floor(speed);
            if(cur != target){
                if(attr == "opacity"){
                    //IE opacity兼容问题
                    dom.style[attr] = "filter:alpha(opacity="+(cur+speed)+")";
                    dom.style[attr] = (cur + speed)/100;
                }else{
                    dom.style[attr] = cur + speed + "px";
                }
                mark = false;

            };
        }
        if(mark){
            clearInterval(dom.timer);
            callBack && callBack.call(dom);
        }
    },1000/30);
}

function getStyle(dom,attr){
    return dom.currentStyle?dom.currentStyle[attr]:getComputedStyle(dom,null)[attr];
}
