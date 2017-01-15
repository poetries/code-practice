let box = document.querySelector("#box");
box.onclick = ()=>{
	animateTime(box,{
		"width":300,
		"height":300,
		"left":800
	},1500,"linear",()=>{
		this.innerHTML = "运动结束";
	})
}

alert(box);
