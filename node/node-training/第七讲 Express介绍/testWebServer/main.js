/**
 * Created by poetries on 2017/1/17.
 */

var http = require("http");

//req就是客户端发过来的所有相关的数据的封装（数据包含url、http头部信息、cookie等）
//req -- request  res--response
var server = http.createServer(function (req,res) {
    //console.log(req.url);
   // console.log(req);
    console.log(res);
    res.writeHead(200,{"Content-Type":"text/plain"});
    res.end("你好");
}).listen(3000);

console.log("启动web服务器，端口3000");