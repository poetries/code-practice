window.addEventListener("load",eventWindowLoaded,false);
function eventWindowLoaded(){
	canvasApp();
}
function canvasSupport(){
	return Modernizr.canvas;
}
function eventWindowLoaded(){
	var pattern = new Image();
	pattern.src = "texture.jpg";
	pattern.onload = eventAssetsLoaded;
}
function eventAssetsLoaded(){
	canvasApp();
}

function canvasApp(){
	var message = "Your text";
	var fontSize = "50";
	var fontFace = "serif";
	var textFillColor = "#ff0000";
	var textAlpha = 1;
	var shadowX = 1;
	var shadowY = 1;
	var shadowBlur = 1;
	var shadowColor = "#707070";
	var textBaseline = "middle";
	var textAlign = "center";
	var fillOrStroke = "fill";
	var fillWeight = "normal";
	var fillStyle ="normal";
	var fillType = "colorFill";
	var textFillColor2 = "#000000";
	var pattern = new Image();


	if (!canvasSupport()) {
		return;
	}

	var theCanvas = document.getElementById('canvasOne');
	var context = theCanvas.getContext("2d");

	var formElement = document.getElementById('textBox');
	formElement.addEventListener("keyup",textBoxChanged,false);

	formElement = document.getElementById('fillOrStroke');
	formElement.addEventListener("change",fillOrStrokeChanged,false);

	formElement = document.getElementById('textSize');
	formElement.addEventListener("change",textSizeChanged,false);

	formElement = document.getElementById('textFillColor');
	formElement.addEventListener("change",textFillColorChanged,false);


	formElement = document.getElementById('textFont');
	formElement.addEventListener("change",textFontChanged,false);


	formElement = document.getElementById('textBaseline');
	formElement.addEventListener("change",textBaselineChanged,false);


	formElement = document.getElementById("textAlign");
	formElement.addEventListener("change",textAlignChanged,false);


	formElement = document.getElementById('fontWeight');
	formElement.addEventListener("change",fontWeightChanged,false);

	formElement = document.getElementById('fontStyle');
	formElement.addEventListener("change",fontStyleChanged,false);

	formElement = document.getElementById('shadowX');
	formElement.addEventListener("change",shadowXChanged,false);

	formElement = document.getElementById('shadowY');
	formElement.addEventListener("change",shadowYChanged,false);

	formElement = document.getElementById('shadowBlur');
	formElement.addEventListener("change",shadowBlurChanged,false);

	formElement = document.getElementById('shadowColor');
	formElement.addEventListener("change",shadowColorChanged,false);

	formElement = document.getElementById('textAlpha');
	formElement.addEventListener("change",textAlphaChanged,false);

	formElement = document.getElementById('textFillColor2');
	formElement.addEventListener("change",textFillColor2Changed,false);

	formElement = document.getElementById('fillType');
	formElement.addEventListener("change",fillTypeChanged,false);

	formElement = document.getElementById('canvasWidth');
	formElement.addEventListener("change",canvasWidthChanged,false);

	formElement = document.getElementById("canvasHeight");
	formElement.addEventListener("change",canvasHeightChanged,false);

	formElement = document.getElementById('canvasStyleWidth');
	formElement.addEventListener("change",canvasStyleSizeChanged,false);

	formElement = document.getElementById('canvasStyleHeight');
	formElement.addEventListener("change",canvasStyleSizeChanged,false);

	formElement = document.getElementById('createImageData');
	formElement.addEventListener("click",createImageDataPressed,false);


	pattern.src = "texture.jpg";

	drawScreen();

	function drawScreen(){
		//background
		context.globalAlpha = 1;
		context.shadowColor = "#707070";
		context.shadowOffsetX = 0;
		context.shadowOffsetY = 0;
		context.shadowBlur = 0;
		context.fillStyle = "#ffffaa";
		context.fillRect(0,0,theCanvas.width,theCanvas.height);

		//边框
		context.strokeStyle = "#000";
		context.strokeRect(5,5,theCanvas.width-10,theCanvas.height-10);

		//文本
		context.textBaseline = textBaseline;
		context.textAlign = textAlign;
		context.font = fontWeight+ " "+fontStyle + " " +fontSize + "px " + fontFace;
		context.shadowColor = shadowColor;
		context.shadowOffsetX = shadowX;
		context.shadowOffsetY = shadowY;
		context.shadowBlur = shadowBlur;
		context.globalAlpha = textAlign;


		var xPosition = (theCanvas.width/2) - (textWidth/2);
		var yPosition = (theCanvas.height/2);

		var metrics = context.measureText(message);
		var textWidth = metrics.width;


		var tempColor;
		if (fillType == "colorFill") {
			tempColor = textFillColor;
		}else if(fillType == "linearGradient"){
			var gradient = content.createLinearGradient(xPositiontextWidth/2,yPosition,textWidth,yPosition);
			gradient.addColorStop(0,textFillColor);
			gradient.addColorStop(0,textFillColor2);
			tempColor = gradient;
		}else if(fillType == "radialGradient"){
			var gradient = content.createLinearGradient(xPosition,yPosition,fontSize,xPosition+textWidth,yPosition,1);
			gradient.addColorStop(0,textFillColor);
			gradient.addColorStop(.6,textFillColor2);
			tempColor = gradient;
		}else if(fillType == "pattern"){
			var tempColor = context.createPattern(pattern,"repeat");
		}else {
			tempColor = textFillColor;
		}




		switch(fillOrStroke) {
			case "fill":
				context.fillStyle = tempColor;
				context.fillText(message,xPosition,yPosition);
				break;
			case "stroke":
				context.strokeStyle = tempColor;
				context.strokeText(message,xPosition,yPosition);
				break;
			case "both":
				context.fillStyle = tempColor;
				context.fillText(message,xPosition,yPosition);
				context.strokeStyle = "#000000";
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

	function textBaselineChanged(e){
		var target = e.target;
		textBaseline = target.value;
		drawScreen();
	}


	function textAlignChanged(e){
		var target = e.target;
		textAlign = target.value;
		drawScreen();
	}



	function fillOrStrokeChanged(e){
		var target = e.target;
		fillOrStroke = target.value;
		drawScreen();
	}



	function textSizeChanged(e){
		var target = e.target;
		fontSize = target.value;
		drawScreen();
	}



	function textFillColorChanged(e){
		var target = e.target;
		textFillColor = "#"+target.value;
		drawScreen();
	}



	function textFontChanged(e){
		var target = e.target;
		fontFace = target.value;
		drawScreen();
	}



	function fontWeightChanged(e){
		var target = e.target;
		fontWeight = target.value;
		drawScreen();
	}



	function fontStyleChanged(e){
		var target = e.target;
		fontStyle = target.value;
		drawScreen();
	}



	function shadowXChanged(e){
		var target = e.target;
		shadowX = target.value;
		drawScreen();
	}



	function shadowYChanged(e){
		var target = e.target;
		shadowY = target.value;
		drawScreen();
	}



	function shadowBlurChanged(e){
		var target = e.target;
		shadowBlur = target.value;
		drawScreen();
	}



	function shadowColorChanged(e){
		var target = e.target;
		shadowColor = target.value;
		drawScreen();
	}



	function textAlphaChanged(e){
		var target = e.target;
		textAlpha = (target.value);
		drawScreen();
	}



	function textFillColor2Changed(e){
		var target = e.target;
		message = "#"+target.value;
		drawScreen();
	}



	function fillTypeChanged(e){
		var target = e.target;
		fillType = target.value;
		drawScreen();
	}



	function canvasWidthChanged(e){
		var target = e.target;
		the.canvas.width = target.value;
		drawScreen();
	}



	function canvasHeightChanged(e){
		var target = e.target;
		the.canvas.height = target.value;
		drawScreen();
	}

	function canvasStyleSizeChanged(e){
		var styleWidth = document.getElementById('canvasStyleWidth');
		var styleHeight = document.getElementById('canvasStyleHeight');
		var styleValue = "width:"+styleWidth.value +"px;height:"+styleHeight.value+"px;";
		theCanvas.setAttribute("style",styleValue);
		drawScreen();
	}
	function createImageDataPressed(e){
		var imageDataDisplay = document.getElementById('imageDataDisplay');
		imageDataDisplay.value = theCanvas.toDataURL();
		window.open(imageDataDisplay.value,"canvasImage","left=0,top=0,width="+",toolbar=0,resizable=0");
	}




}