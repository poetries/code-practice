#### 下拉菜单插件
---

```html
   <div class="dropdown">
       <button class="btn btn-primary" data-toggle="dropdown"> 下拉菜单 <span class="caret"></span> </button>
       <ul class="dropdown-menu">
           <li><a href="#">首页</a></li>
           <li><a href="#">产品</a></li>
           <li><a href="#">资讯</a></li>
           <li><a href="#">关于</a></li>
       </ul>
   </div>
```

- 如果按钮在容器外部，可以通过 `data-target` 进行绑定

```html
   <button class="btn btn-primary" id="btn" data-toggle="dropdown" data-target="#dropdown">
```

- `Dropdown`插件的方法：，但仍然需要 `data-*`
   - `$('#btn').dropdown();`
   - `$('#btn').dropdown('toggle');`

- `Dropdown`插件的事件：
   - `show.bs.dropdown `    在 `show` 方法调用时立即触发。
   - `shown.bs.dropdown `   在下拉菜单完全显示出来，并且等 `CSS` 动画完成之后 触发。
   - `hide.bs.dropdown`     在 `hide` 方法调用时，但还未关闭隐藏时触发。
   - `hidden.bs.dropdown`   在下拉菜单完全隐藏之后，并且等 `CSS` 动画完成之后 触发。

```javascript
   $('#dropdown').on('show.bs.dropdown', function () {
        alert('在调用 show 方法时立即触发！');
   });
```

#### 滚动监听插件
---

- `data-offset`  默认值为 `10`，固定弄内容距滚动容器 `10` 像素以内， 就高亮显示所对应的菜单
- `data-spy `    设置 `scroll`，将设置滚动容器监听
- `data-target`  设置`#nav`，绑定指定监听的菜单

- `scroll`插件的方法：

```javascript
   $("#scroll").scrollspy({
        //offset: 0,
        target: "#nav"
   });
```

- `activate.bs.scrollspy`    每当一个新条目被激活后都将由滚动监听插件触 发此事件。
- 事件绑定在导航上

```javascript
   $('#nav').on('activate.bs.scrollspy', function () {
        alert('新条目被激活后触发此事件！');
   });
```

- 滚动监听还有一个更新容器 `DOM` 的方法
   - `refresh`  更新容器 `DOM` 的方法
   
```javascript
   function removeSec(e) {
       $(e).parents('.sec').remove();
       $('#content').scrollspy('refresh');
   }
```

#### 按钮插件
---

- 单个切换

```html
   <button class="btn btn-primary" data-toggle="button" autocomplete="off">单个切换</button>
```

- 注：在 `Firefox` 多次页面加载时，按钮可能保持表单的禁用或选择状态。解决方案是： 添加` autocomplete="off"。`

- 单选按钮

```html
<div class="btn-group" data-toggle="buttons">
   <label for="" class="btn btn-primary active">
		<input type="radio" name="sex" autocomplete="off" checked> 男
   </label>
   <label for="" class="btn btn-primary">
		<input type="radio" name="sex" autocomplete="off"> 女
   </label>
</div>

```

- 复选按钮

```html
<div class="btn-group" data-toggle="buttons">
   <label for="" class="btn btn-primary active">
		<input type="checkbox" name="fa" autocomplete="off" checked> 音乐
   </label>
   <label for="" class="btn btn-primary">
		<input type="checkbox" name="fa" autocomplete="off"> 体育
   </label>
   <label for="" class="btn btn-primary">
		<input type="checkbox" name="fa" autocomplete="off"> 美术
   </label>
   <label for="" class="btn btn-primary">
		<input type="checkbox" name="fa" autocomplete="off"> 电脑
   </label>
</div>
```

- 加载状态

```html
   <button id="myButton" type="button" data-loading-text="Loading..." class="btn btn-primary" autocomplete="off"> 加载状态 </button>

```

```javascript
   $('#myButton').on('click', function () {
        var btn = $(this).button('loading');
        setTimeout(function () {
            btn.button('reset');
        }, 1000);
   });
```

- `Button` 插件中的 `button` 方法中有三个参数：`toggle`、`reset`、`string`(比如 `loading`、 `complete`)。
- 可代替    `data-toggle="button"`

```javascript
   $('button').on('click', function () {
        $(this).button('toggle');
   });
```

#### 折叠插件
---

- 基本实例

```html
   <button class="btn btn-primary" data-toggle="collapse" data-target="#content"> Bootstrap </button>
   <div class="collapse" id="content">
        <div class="well">
            Bootstrap 是 Twitter 推出的一个用于前端开发的开源工具包。它由 Twitter 的设计师 Mark Otto 和 Jacob Thornton 合作开发,是一个 CSS/HTML 框架。目 前,Bootstrap 最新版本为 3.0 。
        </div>
   </div>
```

- `Collapse`插件的方法：`hide`、`show`、`toggle`

```javascript
   $('button').on('click', function () {
        $('#collapseOne').collapse('toggle');
   });
```

- `Collapse`插件的事件：
  - `show.bs.collapse`     在 `show` 方法调用时立即触发
  - `shown.bs.collapse `   折叠区完全显示出来是触发
  - `hide.bs.collapse `    在 `hide` 方法调用时触发
  - `hidden.bs.collapse`   该事件在折叠区域完全隐藏之后触发