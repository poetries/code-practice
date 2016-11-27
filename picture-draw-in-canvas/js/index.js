/**
 * Created by poetries on 2016/11/27.
 */
window.addEventListener("load",eventWindowLoaded,false);

function eventWindowLoaded(){
    canvasApp();
}
function canvasSupport(){
    return Modernizr.canvas;
}
function canvasApp(){
    if (!canvasSupport()) {
        return;
    }else{
        var theCanvas = document.getElementById('canvas');
        var context = theCanvas.getContext("2d");
    }
    var mouseX;
    var mouseY;

    var tileSheet = new Image();
    tileSheet.addEventListener("load",eventSheetLoaded,false);
    tileSheet.src = "tanks_sheet.png";
    var imageData = context.createImageData(32,32);

    function eventSheetLoaded(){
        startUp();
    }
    function startUp(){
        context.fillStyle = "#aaaaaa";
        context.fillRect(0,0,256,256);
        drawTileSheet();
    }
    function drawTileSheet(){
        context.drawImage(tileSheet,0,0);
    }
    function highlightTile(tileId,x,y){
        context.fillStyle = "#aaaaaa";
        context.fillRect(0,0,256,128);
        drawTileSheet();

        imageData = context.getImageData(x,y,32,32);
        for (j=3; j<imageData.data.length;j+=4) {
            imageData.data[j] = 128;
        }
        var startX = Math.floor(tileId%8)*32;
        var startY = Math.floor(tileId/8)*32;
        context.strokeStyle = "red";
        context.strokeRect(startX,startY,32,32);
    }

    function onMouseMove(e){
        mouseX = e.clientX - theCanvas.offsetLeft;
        mouseY = e.clientY - theCanvas.offsetTop;

    }
    function onMouseClick(e){
        console.log("click:"+mouseX+","+mouseY);
        if (mouseY<128) {
            var col = Math.floor(mouseX/32);
            var row = Math.floor(mouseY/32);
            var tileId = (row*7)+(col+row);
            highlightTile(tileId, col*32, row*32);

        }
    }
    theCanvas.addEventListener("mousemove",onMouseMove,false);
    theCanvas.addEventListener("click",onMouseClick,false);
}