/**
 *
 * @authors Your Name (you@example.org)
 * @date    2016-12-24 23:13:52
 * @version $Id$
 *
 * ajax({
 *     method:'get',
 *     url:'index.php?',
 *     data:{
 *         'name':'xq',
 *         'age':18
 *     },
 *     success:function(txt){
 *         //....
 *     },
 *     async:true
 * })
 */


function ajax(json){
    var xhr = createXHR();
    json.data = param(json.data);
    //解决ie缓存
    json.url = json.url + '?rand='+Math.random();
    if(json.method === 'get'){
        json.url += json.url.indexOf('?') == -1?'?'+json.data:""+json.data;
    };
    if(json.async === true){
        xhr.onreadystatechange = function(){
            if(xhr.readyState == 4){
                if(xhr.status == 200){
                    //要把数据怎么处理
                    json.success(xhr.responseText);
                }else{
                    alert("错误信息:"+xhr.status+"---错误状态:"+xhr.statusText);
                };
            };
        };
    };
    xhr.open(json.method,json.url,json.async);
    if(json.method === 'post'){
        xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
        xhr.send(json.data);
    }else{
        xhr.send(null);
    };

    if(json.async === false){
        if(xhr.status == 200){
            //要把数据怎么处理
            json.success(xhr.responseText);
        }else{
            alert("错误信息:"+xhr.status+"---错误状态:"+xhr.statusText);
        };
    };
};


function param(data){
    var arr = [];
    for(var k in data){
        arr.push(encodeURIComponent(k)+"="+encodeURIComponent(data[k]));
    }
    //["user=xq","age=18"]
    return arr.join("&");
}


function createXHR(){
    if(typeof XMLHttpRequest != "undefined"){
        return new XMLHttpRequest();
    }else if(typeof ActiveXObject != "undefined"){
        var version = [
            'MSXML2.XMLHttp.6.0',
            'MSXML2.XMLHttp.3.0',
            'MSXML2.XMLHttp',
        ];
        for(var i=0;i<version.length;i++){
            try{
                return new ActiveXObject(version[i]);
            }catch(e){
                //跳过
            }
        }
    }else{
        throw new Error("你的系统或者浏览器不支持XHR对象");
    }
};


function bind(dom,eventType,Fn){
    if(dom.attachEvent){
        dom.attachEvent("on"+eventType,Fn);
    }else{
        dom.addEventListener(eventType,function(){
            Fn.call(dom);
        },false);
    };
};