#### 模态框插件
---

- 模态框的弹窗组件需要三层 `div` 容器元素，分别为 `modal`(模态声明层)、 `dialog`(窗口声明层)、`content`(内容层)
- 在内容层里面，还有三层，分别为 `header`(头部)、`body`(主体)、`footer`(注脚)
- 模态框去掉 `show`，增加一个 `id`

```html
   <div class="modal" id="myModal">
   <!-- 点击触发模态框显示 -->
   <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal"> 点击弹窗 </button>
   <!-- 弹窗的大小有三种，默认情况下是正常，还有 lg(大)和 sm(小) -->
   <div class="modal-dialog modal-lg">
   <div class="modal-dialog sm-lg">
   <!-- 可设置淡入淡出效果 -->
   <div class="modal fade" id="myModal">
```

- 所有的插件，都是基于 `JavaScript`/`jQuery` 的。
- 四个要素：用法、参数、方法和事件。

- **用法**
  - 可以通过 `data` 属性 `data-toggle`  `data-toggle="modal"`  `data-target="#myModal"`
  - `data-toggle` 表示触发类型
  - `data-target` 表示触发的节点
  - 如果不是使用`<button>`，而是`<a>`，其中 `data-target` 也可以使用 `href="#myModal"`取代
  - 建议使用 `data-target`。除了 `data-toggle` 和 `data-target` 两个声明 属性外，还有一些可以用选项

- **参数**
   - `data-backdrop`    布尔值或 `'static'`   默认值 `true`，表示背景存在黑灰透明 遮罩，且单击空白背景可关闭弹窗；
   - 如果为 `false`，表示背景不存在黑灰 透明遮罩，且点击空白背景不可关闭 弹窗；
   - 如果是字符串`'static'`，表示背景存 在黑灰透明遮罩，且点击空白不可关 闭弹窗。
   - `data-keyboard`   布尔值 `true`   如果是 `true`，按 `esc` 键会关闭窗口； 如果是 `false`，按 `esc` 键会不会关闭。
   - `data-show`   布尔值 `true`   如果是 `true`，初始化时，默认显示； 如果是 `false`，初始化时，默认隐藏。
   - `remote`   `url` 路径 空值   如果值不是以`#`号开头，则表示一个 `url` 地址，加载 `url` 内容到 `modal-content` 容器里，并只加载一 次。
   - 如果是`#`号，就是取代 `data-target` 的方法。
   - 在 `JavaScript` 直接设置
   - 通过 `jQuery` 方式声明

```javascript
   $('#myModal').modal({
        show : true,
        backdrop : false,
        keyboard : false,
        remote : 'index.html'
   });
```

- **方法**
  - `toggle .modal('toggle')`; 触发时，反转切换弹窗状态
  - `show .modal('show')`; 触发时，显示弹窗
  - `hide .modal('hide')`; 触发时，关闭弹窗
  - 点击显示弹窗
```javascript
$('#btn').on('click', function () {
	$('#myModal').modal('show');
});
$('#myModal').modal({
	   show : false,
});
```

#### 事件
---

- `show.bs.modal`    在`show` 方法调用时立即触发。
- `shown.bs.modal`  在模态框完全显示出来，并且等 `CSS` 动画完成之后触 发。
- `hide.bs.modal`    在 `hide` 方法调用时，但还未关闭隐藏时触发。
- `hidden.bs.modal`  在模态框完全隐藏之后，并且等 `CSS` 动画完成之后触 发

```javascript
$('#myModal').on('show.bs.modal', function () {
	alert('在 show 方法调用时立即触发！');
});
$('#myModal').on('loaded.bs.modal', function () {
	alert('远程数据加载完毕后触发！');
});
```

#### 轮播图插件
---

- `data` 属性解释：
  - `data-slide` 接受关键字 `prev` 或 `next`，用来改变幻灯片相对于当前位置的位置；
  - `data-slide-to` 来向轮播底部创建一个原始滑动索引，`data-slide-to="2"`将把滑 动块移动到一个特定的索引，索引从 0 开始计数。
  - `data-ride="carousel"`属性用户标记轮播在页面加载时开始动画播放。
  - `data-interval `   默认值 `5000`，幻灯片的等待时间(毫秒)。如果为 `false`，轮播将不会自动开始循环。
  - `data-pause`       默认鼠标停留在幻灯片区域(`hover`)即暂停轮播，鼠 标离开即启动轮播。
  - `data-wrap`        默认值 `true`，轮播是否持续循环。
  - 如果在 `JavaScript` 调用就直接使用键值对方法，并去掉 `data-`；

```javascript
   $('#myCarousel').carousel({  //设置自定义属性
        interval : 2000,//设置自动播放`/2` 秒
        pause : 'hover',//设置暂停按钮的事件
        wrap : false,   //只播一次
   });
```

- **方法：**
   - `cycle` 循环各帧(默认从左到右)
   - `pause` 停止轮播
   - `number` 轮播到指定的图片上(小标从 `0` 开始，类似数组)
   - `prev` 循环轮播到上一个项目
   - `next` 循环轮播到下一个项目

```javascript
   $('button').on('click', function () {//点击按钮执行
        $('#myCarousel').carousel('cycle'); //点击后，自动播放
   }
```

- **事件**

- `slide.bs.carousel` 当调用 `slide` 实例方式时立即触发该事件。
- `slid.bs.carousel` 当轮播完成一个幻灯片触发该事件

```javascript
$('#myCarousel').on('slide.bs.carousel', function () {
        alert('当调用 slide 实例方式时立即触发');
   });
$('#myCarousel').on('slid.bs.carousel', function () {
	alert('当轮播完成一个幻灯片触发');
});
```