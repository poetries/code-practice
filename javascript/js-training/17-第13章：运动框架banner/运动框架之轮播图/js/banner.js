// 收集所有的banner特效


var banner = {
    base: function () {
        var imgLis = document.querySelector("#imgBox").querySelectorAll("li"),
            btns = document.querySelector("#btn").querySelectorAll("li"),
            len = btns.length;

        for (var i=0;i<len;i++) {
            (function(index){
                btns[index].onmouseover = function(){
                    for (var j=0;j<len;j++){
                        btns[j].className = "";
                        imgLis[j].style.display = "none";
                    }
                    imgLis[index].style.display = "block";
                    this.className = "active";
                }
            })(i);
        }
    },
    fadeInFadeOut:function () {
        var box = document.querySelector("#box"),
            imgLis = document.querySelector("#imgBox").querySelectorAll("li"),
            btns = document.querySelector("#btn").querySelectorAll("li"),
            len = btns.length,
            index = 0,
            timer = null;

        for (var i=0;i<len;i++) {
            (function(index){
                btns[index].onmouseover = function(){
                    for (var j=0;j<len;j++){
                        btns[j].className = "";
                        move(imgLis[j],{"opacity":0},function(){
                            this.style.display = "none"; //回调消除切换引起的残影
                        });
                    }
                    imgLis[index].style.display = "block";
                    move(imgLis[index],{"opacity":100});
                    this.className = "active";
                }
            })(i);
        }
        function autoPlay(){
            index++;
            index %=len;//限制长度
            for (var j=0;j<len;j++){
                btns[j].className = "";
                move(imgLis[j],{"opacity":0},function(){
                    this.style.display = "none"; //回调消除切换引起的残影
                });
            }
            //先显示 在把opacity变成1
            imgLis[index].style.display = "block";
            move(imgLis[index],{"opacity":100});
            btns[index].className = "active";
        }
        timer = setInterval(autoPlay,2000);
        box.onmouseover = function(){
            clearInterval(timer);
        }
        box.onmouseout = function(){
            timer = setInterval(autoPlay,2000);
        }
    },
    zuoyou: function () {
        var box = document.querySelector("#box");
        var imgUl = document.querySelector("#imgBox");
        var btns = document.querySelector("#btn").querySelectorAll("li");
        var len = btns.length;
        var index = 0;
        var timer = null;

        for (var i=0;i<len;i++) {
            (function(index){
                btns[index].onmouseover = function(){
                    for (var j=0;j<len;j++){
                        btns[j].className = "";
                    }
                    move(imgUl,{"left":-970*index});
                    this.className = "active";
                }
            })(i);
        }
        function autoPlay(){
            index++;
            index %=len;//限制长度
            for (var j=0;j<len;j++){
                btns[j].className = "";
            }
            move(imgUl,{"left":-970*index});
            btns[index].className = "active";
        }
        timer = setInterval(autoPlay,2000);
        box.onmouseover = function(){
            clearInterval(timer);
        }
        box.onmouseout = function(){
            timer = setInterval(autoPlay,2000);
        }
    },
    shangxia: function () {
        var box = document.querySelector("#box");
        var imgUl = document.querySelector("#imgBox");
        var btns = document.querySelector("#btn").querySelectorAll("li");
        var len = btns.length;
        var index = 0;
        var timer = null;

        for (var i=0;i<len;i++) {
            (function(index){
                btns[index].onmouseover = function(){
                    for (var j=0;j<len;j++){
                        btns[j].className = "";
                    }
                    move(imgUl,{"top":-350*index});
                    this.className = "active";
                }
            })(i);
        }
        function autoPlay(){
            index++;
            index %=len;//限制长度
            for (var j=0;j<len;j++){
                btns[j].className = "";
            }
            move(imgUl,{"top":-350*index});
            btns[index].className = "active";
        }
        timer = setInterval(autoPlay,2000);
        box.onmouseover = function(){
            clearInterval(timer);
        }
        box.onmouseout = function(){
            timer = setInterval(autoPlay,2000);
        }
    },
    prev:function(){

    },
    next:function(){

    },
    auto:function(){

    },
    wufeng:function(){
        var box = document.querySelector("#box");
        var imgUl = document.querySelector("#imgBox");
        var btns = document.querySelector("#btn").querySelectorAll("li");
        var len = btns.length;
        var lenImg = imgUl.querySelectorAll("li").length;
        var index = 0; //控制img的索引
        var cindex = 0;//控制按钮的索引
        var timer = null;

        for (var i=0;i<len;i++) {
            (function(index){
                btns[index].onmouseover = function(){
                    for (var j=0;j<len;j++){
                        btns[j].className = "";
                    }
                    cindex = index;//保持索引同步
                    move(imgUl,{"left":-970*index});
                    this.className = "active";
                }
            })(i);
        }
        function autoPlay(){
            index++;
            cindex++;
            cindex %=len;//限制长度
            for (var j=0;j<len;j++){
                btns[j].className = "";
            }
            move(imgUl,{"left":-970*index},function(){

                if(index == lenImg-1){
                    this.style.left = 0;
                    index = 0;
                }
            });
            btns[cindex].className = "active";
        }
        timer = setInterval(autoPlay,2000);
        box.onmouseover = function(){
            clearInterval(timer);
        }
        box.onmouseout = function(){
            timer = setInterval(autoPlay,2000);
        }
    },
    active:function(){

    }
};

