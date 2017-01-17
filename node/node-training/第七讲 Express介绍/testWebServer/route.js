/**
 * Created by poetries on 2017/1/17.
 */
var http = require("http");

var server = http.createServer(function (req,res) {
    var path = req.url.replace(/\/?(?:\?.*)?$/,'').toLowerCase();
    console.log(path);
    switch(path){
        case '':
        case '/index':
            res.writeHead(200,{"Content-Type":"text/html"});
            res.end("<html><head><meta charset='utf-8'><title>主页</title></head><body><h1>主页</h1><br><a href='/about'>about</a></body>");
            break;
        case '/about':
            res.writeHead(200,{"Content-Type":"text/html"});
            res.end("<html><head><meta charset='utf-8'><title>关于</title></head><body><h1>关于</h1><br><a href='/'>index</a></body>");
            break;
        default:
            res.writeHead(404,{"Content-Type":"text/html"});
            res.end("<html><head><meta charset='utf-8'><title>404</title></head><body><h1>页面没找到</h1><br><a href='/'>index</a></body>");


    }
}).listen(5000);
console.log("启动web服务器，端口5000");