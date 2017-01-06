#### 辅助类
---

- 文本

```html
      <p class="text-muted">本行内容是减弱的</p>
      <p class="text-primary">本行内容带有一个 primary class</p>
      <p class="text-success">本行内容带有一个 success class</p>
      <p class="text-info">本行内容带有一个 info class</p>
      <p class="text-warning">本行内容带有一个 warning class</p>
      <p class="text-danger">本行内容带有一个 danger class</p>
```

- 背景

```html
<p class="bg-primary">bootstrap课程</p>
<p class="bg-success">bootstrap课程</p>
<p class="bg-info">bootstrap课程</p>
<p class="bg-warning">bootstrap课程</p>
<p class="bg-danger">bootstrap课程</p>
```

- 关闭按钮   `close`

```html
<button class="close">&times;</button>
```

- 下拉式菜单  `caret`

```html
<span class="caret"></span>
```

- 浮动 `pull-left`   `pull-right`

```html
<div class="pull-left">向左快速浮动</div>
<div class="pull-right">向右快速浮动</div>
```

- 清除浮动   `clearfix`

```html
<div class="clearfix"  style="background: #D8D8D8;border: 1px solid #000;padding: 10px;">
	 <div class="pull-left" style="background:#58D3F7;">向左快速浮动</div>
	 <div class="pull-right" style="background: #DA81F5;">向右快速浮动</div>
</div>
```

- 块级内容居中 `center-block`

```html
<div class="row">
 <div class="center-block" style="width:200px;background-color:#ccc;">
	这是 center-block
 </div>
</div>
```

- 显示、隐藏  `show` `hide`

```html
<div class="row" style="padding: 91px 100px 19px 50px;">
 <div class="show" style="width:300px;background-color:#ccc;">
	这是 show class
 </div>
 <div class="hidden" style="width:200px;background-color:#ccc;">
	这是 hide class
 </div>
</div>
```

- 屏幕阅读器和键盘导航  `.sr-only` 来把元素对所有设备隐藏，除了屏幕阅读器    `.sr-only-focusable`

```html
<div class="row" style="padding: 91px 100px 19px 50px;">
 <form class="form-inline" role="form">
	 <div class="form-group">
		<label class="sr-only" for="email">Email 地址</label>
		<input type="email" class="form-control" placeholder="Enter email">
	 </div>
	 <div class="form-group">
		<label class="sr-only" for="pass">密码</label>
		<input type="password" class="form-control" placeholder="Password">
	 </div>
 </form>
</div>
<a class="sr-only sr-only-focusable" href="#content">Skip to main content</a>
```

#### 响应式工具
---

- `visible-xs` `visible-sm`  `visible-md`  `visible-lg`
- `hidden-xs`   `hidden-sm`   `hidden-md`   `hidden-lg`
- 以超小屏幕（`xs`）为例，可用的 `.visible-*-*` 类是：`visible-xs-block`、`visible-xs-inline` 和 `visible-xs-inline-block`
- `visible-print-block`    `visible-print-inline`    `visible-print-inline-block`  浏览器隐藏   打印机可见
      `hidden-print`  浏览器可见   打印机隐藏 `visible-print`

```html
   <div class="container" style="padding: 40px;">
      <div class="row">
         <div class="col-xs-6 col-sm-3" style="background-color: #dedef8;border:1px solid #000;">
            <span class="hidden-xs">特别小型</span>
            <span class="visible-xs">✔ 在特别小型设备上可见</span>
         </div>
         <div class="col-xs-6 col-sm-3" style="background-color: #dedef8;border:1px solid #000;">
            <span class="hidden-sm">小型</span>
            <span class="visible-sm">✔ 在小型设备上可见</span>
         </div>
         <div class="col-xs-6 col-sm-3" style="background-color: #dedef8;border:1px solid #000;">
            <span class="hidden-md">中型</span>
            <span class="visible-md">✔ 在中型设备上可见</span>
         </div>
         <div class="col-xs-6 col-sm-3" style="background-color: #dedef8;border:1px solid #000;">
            <span class="hidden-lg">大型</span>
            <span class="visible-lg">✔ 在大型设备上可见</span>
         </div>
      </div>
   </div>
```

- 字体图标
   - 用法：`<span class="glyphicon glyphicon-search"></span>`

- 下拉菜单
- 基本的下拉菜单

```html
  <div class="dropdown">
	 <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></button>
	 <ul class="dropdown-menu">
		<li><a href="">Html</a></li>
		<li><a href="">Javascript</a></li>
		<li><a href="">jQuery</a></li>
		<li><a href="">html5+css3</a></li>
	 </ul>
  </div>
```

- 对齐 `dropdown-menu-right`
- 标题 不要加超链接

```html
  <ul class="dropdown-menu">
	 ...
	 <li class="dropdown-header">Dropdown header</li>
	 ...
  </ul>
```

- 分隔线

```html
  <ul class="dropdown-menu">
	 ...
	 <li class="divider"></li>
	 ...
  </ul>
```

- 禁用的菜单项

```html
<ul class="dropdown-menu" aria-labelledby="dropdownMenu4">
	 <li><a href="#">Regular link</a></li>
	 <li class="disabled"><a href="#">Disabled link</a></li>
	 <li><a href="#">Another link</a></li>
</ul>
```

- 让菜单默认显示 `<div class="dropdown open">`