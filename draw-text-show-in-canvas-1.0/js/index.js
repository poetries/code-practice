window.addEventListener("load",eventWindowLoaded,false);
function eventWindowLoaded(){
	canvasApp();
}
function canvasSupport(){
	return Modernizr.canvas;
}
function eventWindowLoaded(){
	canvasApp();
}

function canvasApp(){
	var message = "Your text";
	var fillOrStroke = "fill";

	if (!canvasSupport()) {
		return;
	}

	var theCanvas = document.getElementById('canvasOne');
	var context = theCanvas.getContext("2d");

	var formElement = document.getElementById('textBox');
	formElement.addEventListener("keyup",textBoxChanged,false);

	drawScreen();

	function drawScreen(){
		//background
		context.fillStyle = "#ffffaa";
		context.fillRect(0,0,theCanvas.width,theCanvas.height);

		//Box
		context.strokeStyle = "#000";
		context.strokeRect(5,5,theCanvas.width-10,theCanvas.height-10);

		//Text
		context.font = "50px serif";

		var metrics = context.measureText(message);
		var textWidth = metrics.width;
		var xPosition = (theCanvas.width/2) - (textWidth/2);
		var yPosition = (theCanvas.height/2);

		switch(fillOrStroke) {
			case "fill":
				context.fillStyle = "#FF0000";
				context.fillText(message,xPosition,yPosition);
				break;
			case "stroke":
				context.strokeStyle = "#FF0000";
				context.strokeText(message,xPosition,yPosition);
				break;
			case "both":
				context.fillStyle = "#FF0000";
				context.fillText(message,xPosition,yPosition);
				context.strokeStyle = "#FF0000";
				context.strokeText(message,xPosition,yPosition);
				break;
		}

	}
	// Displaying Basic  text
	function textBoxChanged(e){
		var target = e.target;
		message = target.value;
		drawScreen();
	}


	function fillOrStrokeChanged(e){
		var target = e.target;
		fillOrStroke = target.value;
		drawScreen();
	}



}