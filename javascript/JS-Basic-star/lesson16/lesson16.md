**回顾：**

1.DOM 文档对象模型

- document

   - 功能

       - `getElementById`：通过传入的ID，返回标识了这个ID的唯一对象的内存地址
       - `getElementsByTagName`:通过传入的标签名字，返回所有该标签对象（`HTMLCollection`）
       - `getElementsByClassName`:通过类的名字，返回所有该类的元素对象（`HTMLCollection`）
       - `createElement`:想要创建出来的元素能够绘制在页面中，那么它必须在DOM树中

   - 总结： `document`对象是DOM原型的核心对象，它是内存DOM树的根，所以它提供了很多功能让我们快速的找到DOM树中的某些DOM节点（对象）

   - `element`

         - 功能方法：（自定义属性非常灵活好用）
           - `setAttribute/getAttribute` //getAttribute获取标签的属性 --用来操作标签的属性
           - `setAttribute`设置标签的属性
           - `appendChild`:添加子元素

         - 属性：

           - `id`
           - `className`，`style`
           - `name`,`value`(只有表单元素有 其他是没有的)
           - `href`,`src`...(对应的元素)
           - `innerHTML/innerText`  innerText返回文本信息
           - `children`://子元素集合
           - `parentNode`//父元素


   - 总结：元素的功能属性直接可以通过元素对象`点`出来，除此意外的`自定义属性`，请通过`get/setAtribute`去操作

---

**新知识：**

- 1.**事件（事故）基础**

   - 白话含义：就是当一个事物遇到某个事情的时候，要做的事情
       -（事件源）
       -（事件监听名称）
       -（事件处理程序）

- 2.常用事件

      - `onclick:`当事件源被点击的时候调用处理程序
      - `onmouseover:`鼠标进入事件
      - `onmouseout:`鼠标移出事件
      - `onmousedown:`鼠标按下去的时候
      - `onmouseup:`鼠标抬起来的时候
      - `onscroll:`当事件源滚动条滚动的时候

      - `onkeydown:`当键盘按下的时候
      - `onkeypress:`当键盘按下去的时候
      - `onkeyup:`当键盘弹上来的时候

      - `onfocus:`当事件源获得光标
      - `onblur:`当事件源失去光标
      - `onchange:`当事件源`blur`的时候内容改变了的话

   - **浏览器事件注意事项：**

       - 1.以后我们不要把事件写在标签上,而使用`js`方式操作

       - 2.js方式操作的话：

           + 非IE浏览器第一个对象就会传入`event`事件源对象
           + IE浏览器第一个对象就不会传入`event`事件源对象（`event = event||window.event`;）

           + 非IE浏览器的事件源属性是`target`属性（`event.target = event.target||event.srcElement`;）
           + IE浏6览器的事件源属性是srcElement属性


- 3.事件冒泡机制
- 4.案例

