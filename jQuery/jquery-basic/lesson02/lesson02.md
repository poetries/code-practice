**新知识点：**

---

- **1.过滤器**

  - `filter:`放任何`selector`规则，从被`filter`的代理对象中选择匹配的元素返回新的代理对象

- **2.代理对象属性和样式操作**

  - `attr`
  - `prop`(一般属性值是`boolean`的值或者不用设置属性值，一般使用)
  - `css`(最好不用，一般我用来做测试)
  - `addClass` / `removeClass`

  - **总结：** `$()jquery`核心方法的作用和使用场景

    - 如果是一个字符串参数并且没有标签对（选择器） `$(ul.nav")`
    - 如果是一个字符串参数并且有标签对（创建html标签）`$("<img>")` --最终加到`DOM`树中 `$xx.append("<img>");`
    - 如果是传入一个`element` `dom`对象，直接包装为`proxy`对象返回 `$(DOM对象)`
    - 如果第一个参数是字符串，第二个是`element dom`对象的话，那么就是在`element`这个`dom`对象里面寻找选择器对应的元素并且代理	`$("li",$DOM对象)`

- 3.代理对象文档模型操作

- 4.动画

- 5.数据交互

---

- `length`和`size()`返回个数

- `$(this)`这里的`this`是原生的`DOM`对象(`jQuery`中传入原生的DOM对象) 相当于`this==document.getElementsByClassName()`

- `each()`循环代理对象中的元素

---

- 操作原生`DOM`的时候用的方式：一下只能操作一个

  - 操作属性：`setAttribute` / `getAttribute`
  - 操作样式：`style.xx = value`
  - 操作类样式：`className=''`
  - 获取`DOM`的子元素`children`属性
  - DOM里面添加一个子元素`appendChild()`


- 操作`jQuery`代理对象的时候：批量操作`DOM`对象(全都是通过方法操作)

- 操作属性：`attr()`、`prop()` 
  - `attr`和`prop`区别：如果属性的值是布尔类型的值 用`prop`操作 反之`attr`

- 操作样式：`css()`
- 操作类样式：`addClass()` `removeClass()`
- 操作`DOM`子元素：`children()`
- 添加子元素：`append()`


