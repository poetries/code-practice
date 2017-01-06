#### 弹出框
---

- 弹出框点击一个元素，弹出一个包含标题和内容的容器

```html
//基本用法
<button class="btn btn-lg btn-danger" type="button" data-toggle="popover" title="弹出框" data-content="这是一个弹出框插件">
	点击弹出/隐藏弹出框
</button>
```

- `JavaScript` 初始化  `$('button').popover();`

- `Popover` 插件中的属性：
   - `data-animation`   默认 `true`，在 `popover` 上应用一个 `CSS` `fade` 动画。 如果设置 `false`，则不应用。
   - `data-html`        默认 `false`，不允许提示内容格式为 `html`。如果设置 为 `true`，则可以设置 `html` 格式的提示内容
   - `data-placement`   默认值 `top`，还有 `bottom`、`left`、`right` 和 `auto`。 如果`auto`会自行调整合适的位置，如果是`auto` `left` 则会尽量在左边显示，但左边不行就靠右边。
   - `data-selector `   默认 `false`，可以选择绑定指定的选择器。
   - `data-original-title` 默认空字符串，弹出框的标题。优先级比 `title` 低
   - `title  `          默认字空符串，弹出框的标题。
   - `data-trigger`     默认值 `click`，表示怎么触发 `popover`，其他值为： `hover`、`focus`、`manual`。多个值用空格隔开，manual 手动不能和其他同时设置。
   - `data-delay`       默认值 `0`，延迟触发 `popover(毫秒)`，如果传数字则， 表示 `show`/`hide` 的毫秒数，如果传对象，结构为： {show:500,hide:100}
   - `data-container`   默认值 `false`，将 `popover` 附加到特定的元素上。比 如组合按钮组提示，容器不够，可以附加 `body` 上。` container : 'body'`
   - `data-template `   更改提示框的 `HTML` 提示语的模版，默认值为：

```html
<div class="popover">
	<div class="arrow"></div>
	<h3 class="popover-title"></h3>
	<div class="popover-content"></div>
</div>
```
- `data-content`    默认值为空，弹出框的内容。
- `data-viewport`    设置外围容器的边际，具体代码看示例。

```javascript
   $('button').popover({
		trigger:"click",
		placement:"right",
		viewport : {
			selector : '#view'
		}
   });
```

- `Popover` 插件中的方法：
  - 显示 `$('button').popover('show');`
  - 隐藏 `$('button').popover('hide');`
  - 反转显示和隐藏 `$('button').popover('toggle');`
  - 隐藏并销毁 `$('button').popover('destroy');`

- `Popover` 插件中的事件：
  - `show.bs.popover` 在调用 `show` 方法时触发
  - `shown.bs.popover` 在显示整个弹窗时时触发
  - `hide.bs.popover` 在调用 `hide` 方法时触发
  - `hidden.bs.popover` 在完全关闭整个弹出时触发

```javascript
   $('button').on('show.bs.tab', function () {
        alert('调用 show 方法时触发！');
   });
```

#### 警告框
---

- 警告框即为点击小时的信息框

```html
//基本实例
<div class="alert alert-warning">
	<button class="close" type="button" data-dismiss="alert">
		<span>&times;</span>
	</button>
	<p>警告：您的浏览器不支持！</p>
</div>
```

- 添加淡入淡出效果   `<div class="alert alert-warning fade in">`

- 如果用 `JavaScript`，可以代替 `data-dismiss="alert"`
- `Alert` 插件中的方法：

```javascript
   $('.close').on('click', function () {
        $('#alert').alert('close');
   })
```

- `Alert` 插件中的事件：
   - `close.bs.alert`   当 `close` 方法被调用后立即触发
   - `closed.bs.alert`  当警告框被完全关闭后立即触发

```javascript
   $('#alert').on('close.bs.alert', function () {
        alert('当 close 方法被触发时调用！');
   });
```

#### 标签页
---

- 标签页也就是通常所说的选项卡功能

```html
   //基本用法
   <ul class="nav nav-tabs">
        <li class="active"><a href="#html5" data-toggle="tab">HTML5</a></li>
        <li><a href="#bootstrap" data-toggle="tab">Bootstrap</a></li>
        <li><a href="#jquery" data-toggle="tab">jQuery</a></li>
        <li><a href="#extjs" data-toggle="tab">ExtJS</a></li>
   </ul>
   <div class="tab-content" style="padding: 10px;">
        <div class="tab-pane active" id="html5">...</div>
        <div class="tab-pane" id="bootstrap">...</div>
        <div class="tab-pane" id="jquery">...</div>
        <div class="tab-pane" id="extjs">...</div>
   </div>
```

- 可以设置淡入淡出效果 fade，而 in 表示首选的内容默认显示

```html
<div class="tab-pane fade in active" id="html5">
```

- 也可以换成胶囊式

```html
   <ul class="nav nav-pills">
```
- `data-target`    使用 `data-target` 绑定或不绑定效果都是一样的

- `Tab` 插件中的方法：

```javascript
   $('#nav a').on('click', function (e) {
        e.preventDefault();
        $(this).tab('show');
   });
```

- `Tab` 插件中的事件：
   - `show.bs.tab`      在调用 `tab` 方法时触发
   - `shown.bs.tab`     在显示整个标签时触发

```javascript
   $('#nav a').on('show.bs.tab', function () {
        alert('调用 tab 时触发！');
   });
```

#### 工具提示
---

- 工具提示就是通过鼠标移动选定在特定的元素上时，显示相关的提示语

```html
   //基本实例
   <a href="#" data-toggle="tooltip" title="超文本标识符">HTML5</a>
```

- `JavaScript` 初始化 ` $('#section').tooltip();`

- `data-animation`   默认 `true`，在 `tooltip` 上应用一个 `CSS fade` 动画。 如果设置 `false`，则不应用。
- `data-html `       默认 `false`，不允许提示内容格式为 `html`。如果设置 为 `true`，则可以设置 `html` 格式的提示内容。
- `data-placement`   默认值 `top`，还有 `bottom`、`left`、`right` 和 `auto`。 如果`auto`会自行调整合适的位置，如果是`auto` `left` 则会尽量在左边显示，但左边不行就靠右边。
- `data-selector`    默认 `false`，可以选择绑定指定的选择器。 `rel="tooltip"`
- `data-original-title` 默认空字符串，提示语的内容。优先级比 title 低
- `title `           默认字空符串，提示语的内容。
- `data-trigger`     默认值 `hover` `foucs`，表示怎么触发 `tooltip`，其 他值为：`click`、`manual`。多个值用空格隔开，`manual` 手动不能和其他同时设置。
- `data-delay`       默认值 `0`，延迟触发 `tooltip(毫秒)`，如果传数字则， 表示 `show`/`hide` 的毫秒数，如果传对象，结构为：`{   show:500,hide:100   }`
- `data-containe`r   默认值 `false`，将` tooltip` 附加到特定的元素上。比 如组合按钮组提示，容器不够，可以附加 `body` 上。` container : 'body'`
- `data-template`    更改提示框的 `HTML` 提示语的模版，默认值为：

```html
<div class='tooltip'>
	<div class='tooltip-arrow'></div>
	<div class='tooltip-inner'></div>
</div>

<a href="#" rel="tooltip"
	data-toggle="tooltip"
	title="超文本标识符"
	data-animation="false"
	data-html="true"
	data-placement="auto"
	data-selector="a[rel=tooltip]"
	data-trigger="click"
	data-delay="500"
	data-template="<b>123</b>" >HTML5
</a>
```

```javascript
$('#selector a').tooltip({
	delay : {
		show : 500,
		hide : 100,
	},
});
```

- `Tooltip`插件中的方法：
  - 显示   `$('#section a').tooltip('show');`
  - 隐藏              `$('#section a').tooltip('hide');`
  - 反转显示和隐藏    `$('#section a').tooltip('toggle');`
  - 隐藏并销毁        `$('#section a').tooltip('destroy');`

- `Tooltip`插件中的事件：
  - `show.bs.tooltip`  在 `show` 方法调用时立即触发
  - `shown.bs.tooltip` 在提示框完全显示给用户之后触发
  - `hide.bs.tooltip`  在 `hide` 方法调用时立即触发
  - `hidden.bs.tooltip` 在提示框完全隐藏之后触发

```javascript
   $('#select a').on('show.bs.tooltip', function () {
        alert('调用 show 时触发！');
   });

   //data-selector
   $("#selector").tooltip({
        selector:"a[rel='tooltip']"
   });
```

- `data-container`

```html
   <div class="btn-group">
       <button class="btn btn-default" title="超文本标记符">left</button>
       <button class="btn btn-default" title="超文本标记符">middle</button>
       <button class="btn btn-default" title="超文本标记符">right</button>
   </div>
```

```javascript
   $("button").tooltip({
       delay:{
           show:500,
           hide:100
       },
       container:"body"
   });
```
