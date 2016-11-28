
function computerDistance(startCoords,destCoords){
	var startLatRads = degreesToRadians(startCoords.latitude);
	var startLongRads = degreesToRadians(startCoords.longitude);
	var destLatRads = degreesToRadians(destCoords.latitude);
	var destLongRads = degreesToRadians(destCoords.longitude);
	 
	var Radius = 6371;
	var distance = Math.acos(Math.sin(startLatRads) * Math.sin(destLatRads) +Math.cos(startLatRads) * Math.cos(destLatRads)*Math.cos(startLatRads - destLatRads))* Radius;
	return distance;
}

function degreesToRadians(degrees){
	var radians = (degrees * Math.PI)/180;
	return radians;
}
