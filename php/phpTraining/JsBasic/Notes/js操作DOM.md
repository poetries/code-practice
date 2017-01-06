
========js操作DOM======
节点创建
节点增加
节点删除
节点修改(替换)



创建节点:
元素节点 例:<p></p>
文本节点 例"我是文本"
属性节点 例<img src="xxxx" />


创建元素节点:
document.createElement('标签名称')

创建文本节点:
document.createTextNode('文字内容');


节点的增加:
找到其父元素,调用 父元素.appendChild(新节点);

想指定插入在父元素的某个子元素之前,
找到父元素,找到定位用的子元素.
调用    父元素.insertBefore(新节点,定位节点)


节点的复制:
节点.cloneNode(true/false); //分别代表复制/不复制 子节点


节点的替换
思路: 有一个新节点,一个旧节点, 还得找到旧节点的父节点.
父节点.replaceChild(新节点,旧节点);






============ js 操作 节点的属性和css属性 ========

对于 <input type="" name="" value="" />
上面type,name,value,这种直接写在节点内部的属性名,
js如何操作?
答: 先找到该节点, 然后节点.属性名

有一个例外: 节点.class ==> 节点.className



对于 css属性
{
    width:200px;
    font-size:14px;
}


如何操作?
答: 
找到节点
节点.style.css属性.
css属性的命名规律:
如果css属性不含"-", 则js中属性与css属性相同.
如果css属性含有"-", 则js中的相应属性为css属性去掉"-",并把"-"后的首字母大写.









