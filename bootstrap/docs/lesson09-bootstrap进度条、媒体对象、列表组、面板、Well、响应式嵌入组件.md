#### 进度条
---

- 默认的进度条

```html
  <div class="progress">
	  <div class="progress-bar" style="width:45%;">45%</div>
  </div>
```

- 情景变化的进度条

```html
  <div class="progress">
	  <div class="progress-bar progress-bar-info" style="width:60%;">60%</div>
  </div>
  <div class="progress">
	  <div class="progress-bar progress-bar-success" style="width:25%;">25%</div>
  </div>
  <div class="progress">
	  <div class="progress-bar progress-bar-danger" style="width:45%;">45%</div>
  </div>
  <div class="progress">
	  <div class="progress-bar progress-bar-warning" style="width:45%;">45%</div>
  </div>
```

- 条纹的进度条 `progress-striped`

```html
  <div class="progress progress-striped">
	  <div class="progress-bar" style="width:45%;">45%</div>
  </div>
```

- 动画的进度条`active`

```html
  <div class="progress progress-striped active">
	  <div class="progress-bar" style="width:45%;">45%</div>
  </div>
```

- 堆叠的进度条

```html
  <div class="progress">
	  <div class="progress-bar progress-bar-warning" style="width:45%;">45%</div>
	  <div class="progress-bar progress-bar-success" style="width:25%;">25%</div>
  </div>
```

#### 媒体对象
---

```html
<div class="media">
   <a href="" class="pull-left"><img class="media-object" src="images/kittens.jpg" alt="" width="95"/></a>
   <div class="media-body">
	   <h4 class="media-heading">媒体标题</h4>
	   这是一些示例文本。这是一些示例文本。
	   这是一些示例文本。这是一些示例文本。
	   这是一些示例文本。这是一些示例文本。
	   这是一些示例文本。这是一些示例文本。
	   这是一些示例文本。这是一些示例文本。
   </div>
</div>
```

#### 列表组
---

- 向列表组添加国徽

```html
  <ul class="list-group">
	  <li class="list-group-item"><a href="">免费域名注册 <span class="badge pull-right">20</span></a></li>
	  <li class="list-group-item"><a href="">免费 Window 空间托管</a></li>
	  <li class="list-group-item"><a href="">每年更新成本</a></li>
  </ul>
```

- 向列表组添加链接

```html
  <div class="list-group">
	  <a href="" class="list-group-item active">免费域名注册</a>
	  <a href="" class="list-group-item">免费 Window 空间托管</a>
	  <a href="" class="list-group-item">每年更新成本</a>
  </div>
```

- 向列表组添加自定义内容

```html
  <ul class="list-group">
	 <li class="list-group-item">Cras justo odio</li>
	 <li class="list-group-item">Dapibus ac facilisis in</li>
	 <li class="list-group-item">Morbi leo risus</li>
	 <li class="list-group-item">Porta ac consectetur ac</li>
	 <li class="list-group-item">Vestibulum at eros</li>
  </ul>
```

#### 面板
---

- 面板标题

```html
      <div class="panel-heading">标题</div>
```

- 面板脚注

```html
      <div class="panel-footer text-right">by zichen</div>
```

- 面板主题

```html
  <div class="panel panel-primary">...</div>
  <div class="panel panel-success">...</div>
  <div class="panel panel-info">...</div>
  <div class="panel panel-warning">...</div>
  <div class="panel panel-danger">...</div>
```

- 带表格的面板

```html
  <div class="panel panel-default">
	  <div class="panel-heading">Panel heading</div>
	  <table class="table">
		  <tr>
			  <td>学号</td>
			  <td>姓名</td>
			  <td>年龄</td>
		  </tr>
	  </table>
  </div>
```

- 带列表组的面板

```html
  <div class="panel panel-danger">
	  <div class="panel-heading">标题</div>
	  <div class="panel-body">面板内容显示区域</div>
	  <ul class="list-group">
		  <li class="list-group-item">免费域名注册</li>
		  <li class="list-group-item">免费 Window 空间托管</li>
		  <li class="list-group-item">图像的数量</li>
		  <li class="list-group-item">24*7 支持</li>
		  <li class="list-group-item">每年更新成本</li>
	  </ul>
	  <div class="panel-footer text-right">by zichen</div>
  </div>
```

#### 响应式嵌入组件
---

- 根据被嵌入内容的外部容器的宽度，自动创建一个固定的比例，从而让浏览器自动确定 内容的尺寸，能够在各种设备上缩放
   这些规则可以直接用于`<iframe>`、`<embed>`、`<video>`和`<object>`元素。
- `16:9` 响应式

```html
   <div class="embed-responsive embed-responsive-16by9">
        <embed width="100%" height="100%" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0"></embed>
   </div>
```

- `4:3` 响应式

```html
<div class="embed-responsive embed-responsive-4by3">
	<embed width="100%" height="100%" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0"></embed>
</div>
<div class="embed-responsive embed-responsive-16by9">
	<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0"></iframe>
</div>
<div class="embed-responsive embed-responsive-4by3">
	<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0"></iframe>
</div>
```

#### `well`
---

- 基本的`well`

```html
<div class="well">您好，我在大的 Well 中！</div>
```html

- 尺寸大小 `well-lg`   `well-sm`

```html
  <div class="well well-lg">您好，我在大的 Well 中！</div>
  <div class="well well-sm">您好，我在小的 Well 中！</div>
```