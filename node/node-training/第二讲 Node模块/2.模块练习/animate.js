/**
 * Created by poetries on 2017/1/16.
 */

//var animate = require("poetriesanimate");
function getId(id) {
    return document.getElementById(id);
}

getId("box").onclick = function () {
    animate.animateTime(getId("box"),{
        "left":800
    },1000,"elasticOut",function () {
        this.style.background = "yellow";
    })
}