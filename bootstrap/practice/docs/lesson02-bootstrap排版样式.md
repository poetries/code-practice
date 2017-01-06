- 标题
  - 从 `h1` 到 `h6`

```html
<h1>Bootstrap 排版</h1> //36px
<h2>Bootstrap 排版</h2> //30px
<h3>Bootstrap 排版</h3> //24px
<h4>Bootstrap 排版</h4> //18px
<h5>Bootstrap 排版</h5> //14px
<h6>Bootstrap 排版</h6> //12px
 //段落添加强调文本
<h2>bootstrap课程</h2>
<p class="lead">hello world</p>
```

- 内联文本元素
添加标记，`<mark>`元素或`.mark` 类
```html
   <p>Bootstrap<mark>排版</mark></p>
   //各种加线条的文本
   <del>Bootstrap 排版</del>  //删除的文本
   <s>Bootstrap 排版</s>  //无用的文本
   <ins>Bootstrap 排版</ins>  //插入的文本
   <u>Bootstrap 排版</u>  //效果同上，下划线文本
   //各种强调的文本
   <small>Bootstrap 排版</small>  //标准字号的 85%
   <strong>Bootstrap 排版</strong>    //加粗 700
   <em>Bootstrap 排版</em>    //倾斜
   <p class="text-left">向左对齐文本</p>
   <p class="text-center">居中对齐文本</p>
   <p class="text-right">向右对齐文本</p>
   <p class="text-justify">对齐文本。该段落会根据屏幕的大小对超出屏幕的文字进行换行</p>
   <p class="text-nowrap">该段落不会根据屏幕的大小对超出屏幕的文字进行换行。</p>
   <p class="text-lowercase">BOOTSTROP</p>
   <p class="text-uppercase">bootstrap</p>
   <p class="text-capitalize">bootstrap</p> //单词首字母大写
 ```
 
- 缩略语
   - HTML 元素提供了用于缩写的标记，比如 WWW 或 HTTP。Bootstrap 定义 ``<abbr>`` 元素的样式为显示在文本底部的一条虚线边框，
   - 当鼠标悬停在上面时会显示完整的文本（只要您为 ``<abbr>`` title 属性添加了文本）。为了得到一个更小字体的文本，
   - 请添加 ``.initialism`` 到 ``<abbr>``
 ```html
   <abbr title="World Wide Web">WWW</abbr><br>
   <abbr title="Real Simple Syndication" class="initialism">RSS</abbr>
 ```
 
- 地址
  - address默认为 display:block;，需要使用标签来为封闭的地址文本添加换行
  
```html
   <address>
     <strong>Twitter, Inc.</strong><br>
     795 Folsom Ave, Suite 600<br>
     San Francisco, CA 94107<br>
     <abbr title="Phone">P:</abbr> (123) 456-7890
   </address>
   <address>
     <strong>Full Name</strong><br>
     <a href="mailto:#">first.last@example.com</a>
   </address>
```

- 引用
   - 默认样式引用，增加了左边线，设定了字体大小和内外边距
   `<blockquote> Bootstrap 框架 </blockquote>`
   - 反向
   `<blockquote class="blockquote-reverse "> Bootstrap 框架 </blockquote>`
   - 多种引用样式
   
```html
   <blockquote>
       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
       <footer class="text-right">Someone famous in <cite title="Source Title">Source Title</cite></footer>
   </blockquote>
 ```
 
- 列表
   - 有序列表、无序列表、自定义列表
   - `.list-unstyled`
   - `.list-inline`
   - `.dl-horizontal `  应用于`<dl> `元素和` <dt>`元素中
   
- 代码
   - `.pre-scrollable`  使 `<pre>` 元素可滚动 scrollable
   - 内联代码   `<code>&lt;section&gt;</code>`
   - 用户输入   `press <kbd>ctrl + ,</kbd>`
   - 标记变量   `<var>y</var> = <var>m</var><var>x</var> + <var>b</var>`
   - 程序输出   `<samp>This text is meant to be treated as sample output from a computer program.</samp>`
   - 代码块     `<pre>&lt;article&gt;Please input...&lt;/article&gt;</pre>`