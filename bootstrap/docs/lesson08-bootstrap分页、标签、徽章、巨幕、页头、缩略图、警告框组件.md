#### 分页
---

- 默认的分页

```html
  <ul class="pagination">
	  <li><a href="">&laquo;</a></li>
	  <li><a href="">1</a></li>
	  <li><a href="">2</a></li>
	  <li><a href="">3</a></li>
	  <li><a href="">&raquo;</a></li>
  </ul>
```

- 禁用和激活状态

```html
<ul class="pagination">
  <li class="disabled"><a href="">&laquo;</a></li>
  <li class="active"><a href="">1</a></li>
  <li><a href="">2</a></li>
  <li><a href="">3</a></li>
  <li><a href="">&raquo;</a></li>
</ul>
```

- 分页的尺寸  `pagination-lg`    `pagination-sm`

- 翻页（`Pager`）

```html
  <ul class="pager">
	  <li><a href="">previous</a></li>
	  <li><a href="">next</a></li>
  </ul>
```

- 对齐的链接

```html
  <ul class="pager">
	  <li class="previous"><a href="">&larr; previous</a></li>
	  <li class="next"><a href="">next &rarr;</a></li>
  </ul>
```

- 可选的禁用状态

```html
  <ul class="pager">
	  <li class="previous disabled"><a href="">&larr; previous</a></li>
	  <li class="next"><a href="">next &rarr;</a></li>
  </ul>
```


#### 标签
---

```html
<span class="label label-default">Default</span>
<span class="label label-primary">Primary</span>
<span class="label label-success">Success</span>
<span class="label label-info">Info</span>
<span class="label label-warning">Warning</span>
<span class="label label-danger">Danger</span>
```


- 徽章`badge`

```html
   <a href="">Messages <span class="badge">20</span></a>
   <button class="btn btn-default">Messages <span class="badge">20</span></button>
```

- 巨幕 `jumbotron`

```html
   <div class="jumbotron">
       <div class="container">
           <h1>hello world!!!</h1>
           <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured
               content or information.</p>
           <p><a class="btn btn-primary" href="">Learn more</a></p>
       </div>
   </div>
```

- 页头 `page-header`

```html
   <div class="page-header">
	   <h1>Example page header
		   <small>Subtext for header</small>
	   </h1>
   </div>
```

#### 缩略图
---

- 默认样式

```html
<div class="col-md-3 col-sm-6">
   <a class="thumbnail" href="">
	   <img src="images/kittens.jpg" alt=""/>
   </a>
</div>
```

- 自定义内容

```html
<div class="col-md-3 col-sm-6">
   <div class="thumbnail">
	   <img src="images/kittens.jpg" alt=""/>
	   <div class="caption">  <!--text-center-->
		   <h3>缩略图标签</h3>
		   <p>一些示例文本。一些示例文本。</p>
		   <p>
			   <a href="#" class="btn btn-primary" role="button">按钮</a>
			   <a href="#" class="btn btn-default" role="button">按钮 </a>
		   </p>
	   </div>
   </div>
</div>
```

#### 警告框
---

- 基本默认样式

```html
  <div class="alert alert-success">成功！很好地完成了提交。</div>
  <div class="alert alert-info">信息！请注意这个信息。</div>
  <div class="alert alert-warning">警告！请不要提交。</div>
  <div class="alert alert-danger">错误！请进行一些更改。</div>
```

- 可关闭的警告框` <button type="button" class="close" data-dismiss="alert">&times;</button>`

- 警告中的链接

```html
  <div class="alert alert-success">
	  <a href="#" class="alert-link">成功！很好地完成了提交。</a>
  </div>
```