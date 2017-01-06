#### 导航（标签） `nav`
---

- 标签页   `nav-tabs`

```html
  <ul class="nav nav-tabs">
	  <li class="active"><a href="">Home</a></li>
	  <li><a href="">Project</a></li>
	  <li><a href="">Message</a></li>
  </ul>
```

- 胶囊式标签页 `nav-pills`

```html
  <ul class="nav nav-pills">
	  <li class="active"><a href="">Home</a></li>
	  <li><a href="">Project</a></li>
	  <li><a href="">Message</a></li>
  </ul>
```

- 垂直的胶囊式标签页  `nav-stacked`

```html
  <ul class="nav nav-pills nav-stacked">
	  <li class="active"><a href="">Home</a></li>
	  <li><a href="">Project</a></li>
	  <li><a href="">Message</a></li>
  </ul>
```

- 两端对齐的标签页 `nav-justified`

```html
  <ul class="nav nav-pills nav-justified">
	  <li class="active"><a href="">Home</a></li>
	  <li><a href="">Project</a></li>
	  <li><a href="">Message</a></li>
  </ul>
```

- 禁用链接  ` disabled`

```html
  <ul class="nav nav-tabs">
	  <li class="active"><a href="">Home</a></li>
	  <li class="disabled"><a href="">Project</a></li>
	  <li><a href="">Message</a></li>
  </ul>
```

- 带有下拉菜单的标签

```html
  <ul class="nav nav-tabs">
	  <li class="active"><a href="">Home</a></li>
	  <li><a href="">Project</a></li>
	  <li class="dropdown">
		  <a href="" class="dropdown-toggle" data-toggle="dropdown">Message <span class="caret"></span></a>
		  <ul class="dropdown-menu">
			  <li><a href="">关于</a></li>
			  <li><a href="">资讯</a></li>
			  <li><a href="">通讯</a></li>
		  </ul>
	  </li>
  </ul>
```

- 带下拉菜单的胶囊式标签

```html
  <ul class="nav nav-pills">
	  <li class="active"><a href="">Home</a></li>
	  <li><a href="">Project</a></li>
	  <li class="dropdown">
		  <a href="" class="dropdown-toggle" data-toggle="dropdown">Message <span class="caret"></span></a>
		  <ul class="dropdown-menu">
			  <li><a href="">关于</a></li>
			  <li><a href="">资讯</a></li>
			  <li><a href="">通讯</a></li>
		  </ul>
	  </li>
  </ul>
```

#### 导航条 `navbar`    `<nav>`标签中添加 `class` `.navbar`、`.navbar-default`
---

- 默认的导航栏

```html
  <nav class="navbar navbar-default">
	  <div class="navbar-header">
		  <a class="navbar-brand" href="">潭州教育</a>
	  </div>
	  <ul class="nav navbar-nav">
		  <li class="active"><a href="">Home</a></li>
		  <li><a href="">Project</a></li>
		  <li class="dropdown">
			  <a href="" class="dropdown-toggle" data-toggle="dropdown">Message <span class="caret"></span></a>
			  <ul class="dropdown-menu">
				  <li><a href="">关于</a></li>
				  <li><a href="">资讯</a></li>
				  <li><a href="">通讯</a></li>
			  </ul>
		  </li>
	  </ul>
  </nav>
```

- 响应式的导航栏

```html
  <nav class="navbar navbar-default">
	  <div class="navbar-header">
		  <button class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="">潭州教育</a>
	  </div>
	  <div class="collapse navbar-collapse" id="navbar-collapse">
		  <ul class="nav navbar-nav">
			  <li class="active"><a href="">Home</a></li>
			  <li><a href="">Project</a></li>
			  <li class="dropdown">
				  <a href="" class="dropdown-toggle" data-toggle="dropdown">Message <span class="caret"></span></a>
				  <ul class="dropdown-menu">
					  <li><a href="">关于</a></li>
					  <li><a href="">资讯</a></li>
					  <li><a href="">通讯</a></li>
				  </ul>
			  </li>
		  </ul>
	  </div>
  </nav>
```

- 导航栏中的表单

```html
  <form action="" class="navbar-form navbar-right">
	  <div class="form-group">
		  <input class="form-control" type="text" placeholder="Search"/>
	  </div>
	  <button class="btn btn-default">Search</button>
  </form>
```

- 导航栏中的按钮   ` navbar-btn`

```html
<button class="btn btn-default navbar-btn">Submit</button>
```

- 导航栏中的文本    `navbar-text`

```html
<p class="navbar-text">Signed in as Thomas</p>
```

- 固定到顶部、底部   `navbar-fixed-top`    `navbar-fixed-bottom`

```html
  <nav class="navbar navbar-default navbar-fixed-top">
	  <div class="navbar-header">
		  <a class="navbar-brand" href="">潭州教育</a>
	  </div>
	  <ul class="nav navbar-nav">
		  <li class="active"><a href="">Home</a></li>
		  <li><a href="">Project</a></li>
		  <li class="dropdown">
			  <a href="" class="dropdown-toggle" data-toggle="dropdown">Message <span class="caret"></span></a>
			  <ul class="dropdown-menu">
				  <li><a href="">关于</a></li>
				  <li><a href="">资讯</a></li>
				  <li><a href="">通讯</a></li>
			  </ul>
		  </li>
	  </ul>
  </nav>
```

- 静态的顶部 `navbar-static-top`

- 倒置的导航栏  带有黑色背景白色文本的倒置的导航栏    `navbar-inverse`

- 面包屑导航

```html
<ul class="breadcrumb">
   <li><a href="">首页</a></li>
   <li><a href="">列表</a></li>
   <li class="active">详情</li>
</ul>
```