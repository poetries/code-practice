#### 按钮组件
---

- 基本的按钮组

```html
  <div class="btn-group">
	  <button class="btn btn-default">left</button>
	  <button class="btn btn-default">middle</button>
	  <button class="btn btn-default">right</button>
  </div>
```

- 按钮工具栏

```html
  <div class="btn-toolbar">
	  <div class="btn-group">
		  <button class="btn btn-default">left</button>
		  <button class="btn btn-default">middle</button>
		  <button class="btn btn-default">right</button>
	  </div>
	  <div class="btn-group">
		  <button class="btn btn-default">left</button>
		  <button class="btn btn-default">middle</button>
		  <button class="btn btn-default">right</button>
	  </div>
	  <div class="btn-group">
		  <button class="btn btn-default">更多</button>
	  </div>
  </div>
```

- 按钮的大小

```html
  <div class="btn-group btn-group-lg">
	  <button class="btn btn-default">left</button>
	  <button class="btn btn-default">middle</button>
	  <button class="btn btn-default">right</button>
  </div>
  <div class="btn-group btn-group-sm">
	  <button class="btn btn-default">left</button>
	  <button class="btn btn-default">middle</button>
	  <button class="btn btn-default">right</button>
  </div>
  <div class="btn-group btn-group-xs">
	  <button class="btn btn-default">left</button>
	  <button class="btn btn-default">middle</button>
	  <button class="btn btn-default">right</button>
  </div>
```

- 嵌套

```html
  <div class="btn-group">
	  <button class="btn btn-default">left</button>
	  <button class="btn btn-default">middle</button>
	  <div class="btn-group">
		  <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">按钮 <span class="caret"></span></button>
		  <ul class="dropdown-menu">
			  <li><a href="">1</a></li>
			  <li><a href="">2</a></li>
			  <li><a href="">3</a></li>
		  </ul>
	  </div>
  </div>
```

- 垂直的按钮组

```html
  <div class="btn-group-vertical">
	  <button class="btn btn-default">left</button>
	  <button class="btn btn-default">middle</button>
	  <div class="btn-group">
		  <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">按钮 <span class="caret"></span></button>
		  <ul class="dropdown-menu">
			  <li><a href="">1</a></li>
			  <li><a href="">2</a></li>
			  <li><a href="">3</a></li>
		  </ul>
	  </div>
  </div>
```

- 两端对齐排列的按钮组

```html
  <div class="btn-group btn-group-justified">
	  <div class="btn-group">
		  <button class="btn btn-default">left</button>
	  </div>
	  <div class="btn-group">
		  <button class="btn btn-default">middle</button>
	  </div>
	  <div class="btn-group">
		  <button class="btn btn-default">right</button>
	  </div>
  </div>
  <div class="btn-group btn-group-justified">
	  <!--<div class="btn-group">-->    为了浏览器兼容问题使用btn-group包裹
		  <a href="" class="btn btn-default">left</a>
	  <!--</div>-->
	  <!--<div class="btn-group">-->
		  <a href="" class="btn btn-default">middle</a>
	  <!--</div>-->
	  <!--<div class="btn-group">-->
		  <a href="" class="btn btn-default">right</a>
	  <!--</div>-->
  </div>
```


- **按钮式下拉菜单**

- 单按钮下拉菜单   `btn-default`  `btn-success`  `btn-primary`   `btn-info`   `btn-danger`   `btn-warning`

```html
 <div class="btn-group">
	 <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">Default <span class="caret"></span></button>
	 <ul class="dropdown-menu">
		 <li><a href="">html</a></li>
		 <li><a href="">javascript</a></li>
		 <li><a href="">jQuery</a></li>
	 </ul>
 </div>
```

- 分裂式按钮下拉菜单

```html
 <div class="btn-group">
	 <button class="btn btn-default">Default</button>
	 <button class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
	 <ul class="dropdown-menu">
		 <li><a href="">html</a></li>
		 <li><a href="">javascript</a></li>
		 <li><a href="">jQuery</a></li>
	 </ul>
 </div>
```

- 按钮下拉菜单的大小   `btn-lg`   `btn-sm`   `btn-xs`

```html
 <div class="btn-group">
	 <button class="btn btn-default btn-lg dropdown-toggle" data-toggle="dropdown">Default <span class="caret"></span></button>
	 <ul class="dropdown-menu">
		 <li><a href="">html</a></li>
		 <li><a href="">javascript</a></li>
		 <li><a href="">jQuery</a></li>
	 </ul>
 </div>
```

- 向上弹出式菜单    `dropup`

```html
 <div class="btn-group dropup">
	 <button class="btn btn-default btn-lg dropdown-toggle" data-toggle="dropdown">Default <span class="caret"></span></button>
	 <ul class="dropdown-menu">
		 <li><a href="">html</a></li>
		 <li><a href="">javascript</a></li>
		 <li><a href="">jQuery</a></li>
	 </ul>
 </div>
```

- **输入框**

- 基本的输入框组

```html
<form action="">
  <div class="input-group">
	  <span class="input-group-addon">@</span>
	  <input type="text" class="form-control"/>
  </div>
  <div class="input-group">
	  <input type="text" class="form-control"/>
	  <span class="input-group-addon">.00</span>
  </div>
  <div class="input-group">
	  <span class="input-group-addon">$</span>
	  <input type="text" class="form-control"/>
	  <span class="input-group-addon">.00</span>
  </div>
</form>
```

- 输入框组的大小    `input-group-lg`  `input-group-xs`  `input-group-sm`

```html
  <form action="">
	  <div class="input-group input-group-lg">
		  <span class="input-group-addon">@</span>
		  <input type="text" class="form-control"/>
	  </div>
  </form>
```

- 复选框和单选框插件

```html
  <form action="">
	  <div class="row">
		   <div class="col-md-6">
			   <div class="input-group">
				   <span class="input-group-addon">
					   <input type="checkbox"/>
				   </span>
				   <input type="text" class="form-control"/>
			   </div>
		   </div>
	  </div>
  </form>
```

- 按钮插件   `input-group-btn`

```html
  <form action="">
	  <div class="row">
		  <div class="col-md-6">
			  <div class="input-group">
				  <span class="input-group-btn">
					  <button class="btn btn-default">Go</button>
				  </span>
				  <input class="form-control" type="text"/>
			  </div>
		  </div>
	  </div>
  </form>
```

- 按钮式下拉菜单

```html
  <form action="">
	  <div class="row">
		  <div class="col-md-6">
			  <div class="input-group">
				  <div class="input-group-btn">
					  <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">dropdown<span class="caret"></span></button>
					  <ul class="dropdown-menu">
						  <li><a href="">资讯</a></li>
						  <li><a href="">新闻</a></li>
						  <li><a href="">关于</a></li>
					  </ul>
				  </div>
				  <input class="form-control" type="text"/>
			  </div>
		  </div>
	  </div>
  </form>
```

- 分裂式按钮下拉菜单

```html
<form action="">
  <div class="row">
	  <div class="col-md-6">
		  <div class="input-group">
			  <div class="input-group-btn">
				  <button class="btn btn-default">dropdown</button>
				  <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
					  <span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu">
					  <li><a href="">资讯</a></li>
					  <li><a href="">新闻</a></li>
					  <li><a href="">关于</a></li>
				  </ul>
			  </div>
			  <input class="form-control" type="text"/>
		  </div>
	  </div>
  </div>
</form>
```