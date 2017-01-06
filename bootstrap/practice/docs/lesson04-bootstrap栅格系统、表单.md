- 栅格系统
  - 1）响应式网格系统随着屏幕或视口（`viewport`）尺寸的增加，系统会自动分为最多`12`列。
  - 2）工作原理
      - 行必须放置在`.container`(固定宽度)或者`.container-fluid(100%宽度)`  `class`内，获得适当的对齐`(alignment)`和内边距`(padding)`
      - 内容放置在列中，唯有列可以是行的直接子元素
      - 预定义的网格类，比如 `.row` 和 `.col-lg-4`，可用于快速创建网格布局
      - 列通过内边距`（padding）`来创建列内容之间的间隙
  - 3)媒体查询
     - 超小设备（手机，小于 `768px`） 
     - 没有任何媒体查询相关的代码，因为这在 Bootstrap 中是默认的（还记得 `Bootstrap` 是移动设备优先的吗？）
     - 小型设备（平板电脑，大于等于`768px`）`@media (min-width: @screen-sm-min) and (max-width: @screen-sm-max) { ... }`
     - 中型设备（台式电脑，大于等于`992px`）`@media (min-width: @screen-md-min) and (max-width: @screen-md-max) { ... }`
     - 大型设备（大台式电脑，大于等于`1200px`）`@media (min-width: @screen-lg-min) { ... }`
  - 4）栅格参数
     - 超小屏幕 手机 (`<768px`)	
	 - 小屏幕 平板 (`≥768px`)	
	 - 中等屏幕 桌面显示器 (`≥992px`)	
	 - 大屏幕 大桌面显示器 (`≥1200px`)
     - 栅格系统行为	 
	   - 总是水平排列	
	   - 开始是堆叠在一起的，当大于这些阈值时将变为水平排列C
     - `.container ` 最大宽度	`None `（自动）`750px`  `970px`  `1170px`
     - 类前缀 `.col-xs-	 `  `.col-sm-`	 `.col-md-`	  `.col-lg-`
     - 列（`column`）数	`12`
     - 最大列（`column`）宽	自动 `~62px` `~81px`	`~97px`
     - 间隙宽度	 `30px` （每列左右均有 `15px`）
     - 可嵌套	 是
     - 偏移（`Offsets`）是
     - 列排序	是
  - 5）四种屏幕分类全部激活
 ```html
   <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 a">4</div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 a">4</div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 a">4</div>
            ....
        </div>
   </div>
 ```

- 可以设置列偏移，让中间保持空隙
```html
   <div class="container">
        <div class="row">
            <div class="col-md-8">1-8</div>
            <div class="col-md-3 col-md-offset-1">10-12</div>
        </div>
   </div>
```

- 可以嵌套，嵌满也是 12 列
```html
   <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="col-md-8">1-8</div>
                <div class="col-md-4">9-12</div>
            </div>
            <div class="col-md-3"> 10-12 </div>
        </div>
   </div>
```
- 可以把两个列交换位置，`push` 向右移动（推），`pull` 向左移动（拉）
```html
   <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-push-4">8</div>
            <div class="col-md-4 col-md-pull-8">4</div>
        </div>
   </div>
```

- 表单
  - 1）垂直或基本表单
  - 2）内联表单
    - 让表单左对齐浮动，并表现为 `inline-block `内联块结构`<form class="form-inline">`
      注：当小于 `768px`，会恢复独占样式
  - 3）水平表单
    - 让表单内的元素保持水平排列
  - 4）表单组合
    - 前后增加片段
```html
<div class="input-group">
	 <div class="input-group-addon">￥</div>
	 <input type="text" class="form-control">
	 <div class="input-group-addon">.00</div>
</div>
```
- 5）输入框、文本域
   - 原生的 HTML5 的 input 类型的支持
   - 包括：
      - `text`
      - `password`
      - `datetime`
      - `datetime-local`
      - `date`
      - `month`
      - `time`
      - `week`
      - `number`
      - `email`
      - `url`
      - `search`
      - `tel `
      - `color`
   - `<input type="text" class="form-control" placeholder="文本输入">`
   - `<textarea class="form-control" rows="3"></textarea>`
  - 6）复选框（`Checkbox`）和单选框（`Radio`）
```html
<div class="checkbox">
 <label><input type="checkbox" value="">选项 1</label>
</div>
<div class="radio">
 <label>
	<input type="radio" name="optionsRadios" id="optionsRadios1"
	   value="option1" checked> 选项 1
 </label>
</div>
```
- 内联的复选框和单选框
```html
<label class="checkbox-inline">
 <input type="checkbox" id="inlineCheckbox1" value="option1"> 选项 1
</label>
<label class="radio-inline">
 <input type="radio" id="optionsRadiosinline" value="option1"> 选项 1
</label>
```

- 7）选择框    multiple 多行显示
```html
<select class="form-control" multiple>
	 <option>1</option>
	 <option>2</option>
	 <option>3</option>
	 <option>4</option>
	 <option>5</option>
</select>
```

- 8）静态控件   `.form-control-static`
- 9）表单控件状态
   - 输入框焦点
   - 当输入框 `input` 接收到` :focus` 时，输入框的轮廓会被移除，同时应用 `box-shadow`。
   - 禁用的输入框 `input`
   - 如果您想要禁用一个输入框 `input`，只需要简单地添加 `disabled` 属性，这不仅会禁用输入框，还会改变输入框的样式以及当鼠标的指针悬停在元素上时鼠标指针的样式。
   - 禁用的字段集 `fieldset`
   - 对 `<fieldset>` 添加 `disabled` 属性来禁用` <fieldset>` 内的所有控件。
   - 校验状态
      - `.has-warning`、`.has-error` 或 `.has-success` 类到这些控件的父元素即可。
   - 任何包含在此元素之内的 `.control-label`、`.form-control` 和 `.help-block` 元素都将接受这些校验状态的样式。
- 10）表单帮助文本
```html
<form role="form">
	 <input class="form-control" type="text" placeholder="">
	 <span class="help-block">一个较长的帮助文本块，超过一行，需要扩展到下一行。本实例中的帮助文本总共有两行。</span>
</form>
```

- 11）控件尺寸
   - `.input-lg`和`col-lg-*`来设置表单的高度和宽度
```html
<div class="form-group">
  <input class="form-control input-lg" type="text" placeholder="input-lg">
</div>
<div class="row">
  <div class="col-lg-2">
	 <input type="text" class="form-control" placeholder="col-lg-2">
  </div>
  <div class="col-lg-3">
	 <input type="text" class="form-control" placeholder="col-lg-3">
  </div>
  <div class="col-lg-4">
	 <input type="text" class="form-control" placeholder="col-lg-4">
  </div>
</div>
```