回顾：

- 1.BOM 浏览器对象模型

       - a.`screen` 指的不是浏览器的宽度，指的是整个电脑屏幕的分辨率
            可以拿到屏幕可用分辨率

       - b.`navigator`
            可以通过`userAgent`判断当前浏览器信息

       - c.`location`

           - `URL`：统一资源定位符 `Union Resource Location`

           - 可以通过`href`属性重定向（改变）页面的URL，进行页面跳转

       - d.`history`
            go方法能够让我们进行历史回退或者前进

       - e.`frames`
            获得当前窗体的子页面（`iframe`）

       - f.`document`
            `DOM`模型的核心对象

---

- 所有的DOM对象都是在堆内存创建的 都是有一个构造器生成的
- 查看对象的构造器器方法：
  - step1：查看标签的对象以及构造器`var body = document.body;console.log(body.toString())`
  - step2：查看对象是否是这个构造器创建出来的 `console.log(body instanceof HTMLBodyElement)`


---

新知识：

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

**DOM 操作：**

- 图片切换的相册效果
- tab切换效果
- 表单验证

- 特效就是DOM操作的具体应用 DOM操作就是用js来写HTML代码

- 节点/元素/标签：

  - 三种常用的节点类型：

    - 元素节点
    - 属性节点
    - 文本节点

- **操作DOM对象：**

    - 修改：--找到这个节点
    - 删除：--找到这个节点
    - 添加：--先造出一个节点 然后插入 插入到哪里？找节点来定位

- 这些都离不开节点的查找

- 节点的查找：（最重要）

 - 1、`document.getElementById`---根据`id`查找节点 [返回的是节点本身]
 - 2、`document.getElementsByTagName`--根据标签名字来查找[返回的是数组]document.getElementsByTagName[i]
 - 3、`document.getElemenstByName`--根据`name`属性来查找节点（一般用在表单中）[返回的是数组]`document.getElemenstByName[i]``

- **注意：**早期浏览器都认为name只出现在表单中 

- 因此`document.getElemenstByName`只对表单中的元素发挥作用 后来部分浏览器把`Name`属性扩展到一般的元素 如：`div` 但是IE浏览器还是只能对表单使用`byName `因此处于兼容性 我们只能对表单使用` byName`

- `DOM`中查找节点的思路：（由大到小 个别情况 由子到父）

  - 由大到小：（通过下面的来定位）

    - 1、`document.getElementById`---根据id查找节点 [返回的是节点本身]
    - 2、`document.getElementsByTagName`--根据标签名字来查找[返回的是数组]document.getElementsByTagName[i]
    - 3、`document.getElemenstByName`--根据`name`属性来查找节点（一般用在表单中）[返回的是数组]`document.getElemenstByName[i]`

- 如果还没有查到自己想要的节点，还可以继续根据上面已经找到的节点再次定位来查找

- **怎么继续定位？**

  - 答案：childNodes/child

- **继续查找：**

- 1、查找子元素 `children[index]/childNodes`

- 2、查找父元素 `node.parentNode` -->获取父元素

- 3、查找兄弟元素 `nextSibling` `previousSibling`

- 4、`nextSibling` `previousSibling` `firstChild` `lastChild `这四个属性容易受到`空白文本`的影响 `建议不用`

```javascript
//============给Object原型加一个方法 消除文本节点对DOM操作的影响 例如：nextSibling` `previousSibling` `firstChild` `lastChild （受到换行 和文本节点影响）

Object.prototype.next = function(){
  //NodeType == 3 text的代号
  //NodeType == 1 tag的代号
  if(this.nextSibling){//判断下一个兄弟节点是否存在
  switch(this.nextSibling.nodeType){
    case 1:
      return this.nextSibling;
    case 3:
      return this.nextSibling.nextSibling;
  }
}else{
  return null;
}
console.log(div1.next().next().innerText);
```

- 5、对于查到的某个元素里面的子元素非常多 这时候还可利用`getElementsByTagname`进一步筛选
       
**注意：**对于元素对象和document对象相比 元素对象只能利用getElementsByTagName函数 其他两个不能用


- 节点查找也是通过由大到小来定位：找到大的元素进一步细化 完全可以找到页面上任意一个元素控制他

- 子元素 不好找 就找他的父元素

- 要过滤空白文本节点，用children取他的文本节点

- **DOM与节点的关系：**

  - **node:**

    - `childNodes[]`
    - `parentNode`
    - `firstChild`
    - `getElementsByTagName('元素标签')`
    - `lastchild`
    - `nextSibling`
    - `previousSibling`

    - `children[index]` `children` 不是w3c标准 但是各大浏览器兼容性很好


---


通过给原型添加方法在元素后面创建标签

启示：在项目中，很多很多地方都需要一个方法但是系统没提供，这时可以通过原型扩展

```javascript
//var p = document.createElement('p');
//p.innerHTML = "this is a p";
//var child = document.getElementsByTagName('div');

//给Div的HTMLDivElement构造器原型加一个创建元素的方法 要所有的元素都有这个方法 改成 Object
HTMLDivElement.prototype.createElement = function(tagName){
  var child = document.createElement(tagName);
  this.appendChild(child);
  return child;
}
var child = document.getElementsByTagName('div')[2].createElement("p");
child.innerHTML = 'pppppp';

```
