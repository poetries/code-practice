self.onmessage = function(ev){
	//console.log(ev.data);
	var n = 10;
	for (var i=0;i<ev.data.data1 ;i++ )
	{
		for (var j=0;j<ev.data.data2 ;j++ )
		{
			var color = getData(ev.data.data3,j*n+Math.floor(Math.random()*n),i*n+Math.floor(Math.random()*n));

			for (var k=0;k < n ;k++ )
			{
				for (var l=0;l<n ;l++ )
				{
					setData(ev.data.data4,j*n+l,i*n+k,color);
				}
			}
		}
	}
	var img = ev.data.data4;
	self.postMessage(img);
}
function getData(obj,x,y){//一行一列来获取具体某个坐标点的像素值
	var w = obj.width;
	var d = obj.data;
	var color = [];
	color[0] = d[4*(w*y+x)];
	color[1] = d[4*(w*y+x)+1];
	color[2] = d[4*(w*y+x)+2];
	color[3] = d[4*(w*y+x)+3];

	return color;
}

function setData(obj,x,y,color){
	var w = obj.width;
	var d = obj.data;

	d[4*(w*y+x)] = color[0];
	d[4*(w*y+x)+1] = color[1];
	d[4*(w*y+x)+2] = color[2];
	d[4*(w*y+x)+3] = color[3];

}