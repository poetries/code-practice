"use strict";

var box = document.querySelector("#box");
box.onclick = function () {
	animateTime(box, {
		"width": 300,
		"height": 300,
		"left": 800
	}, 1500, "linear", function () {
		undefined.innerHTML = "运动结束";
	});
};

alert(box);