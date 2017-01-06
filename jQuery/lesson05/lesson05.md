- **ajax** : `Asynchronous Javascript And XML` （异步的`JavaScript`和`XML`）

#### 一.创建`ajax`对象 `var xhr = new XMLHttpRequest();`

#### 二.准备发送请求

- 1. get / post


- form表单中:
	- `action`:
	- `method`:(默认是` get`)
	- `get`: 会在url里面以 `name=value` , 两个数据之间用 `&` 连接
	- `post`:
- `enctype`: `"application/x-www-form-urlencoded"`



- 2. `url`

- 3. 是否异步
	- 同步(`false`)：阻塞
	- 异步(`true`)：非阻塞
	
#### 三.正式发送请求

#### 四.`ajax`请求处理过程

```javascript
xhr.onreadystatechange = function(){
	if (xhr.readyState == 4)
	{
		alert( xhr.responseText );
	}
};
```

- `onreadystatechange` ：当处理过程发生变化的时候执行下面的函数

- `readyState` ：`ajax`处理过程
  - 0：请求未初始化（还没有调用 open()）。
  - 1：请求已经建立，但是还没有发送（还没有调用 send()）。
  - 2：请求已发送，正在处理中（通常现在可以从响应中获取内容头）。
  - 3：请求在处理中；通常响应中已有部分数据可用了，但是服务器还没有完成响应的生成。
  - 4：响应已完成；您可以获取并使用服务器的响应了。

- responseText ：请求服务器返回的数据存在该属性里面
- status : http状态码
