0:js对象的概念
数组是有序的"键值对", 下标/索引 ---> 值,
对象是一组无序的键值对.

创建数组可以用[v1,v2,v3],不必指定索引.
因为数组的索引默认从0而且逐一递增,因此不必指定,系统自动分配.
创建对象{age:22,height:175};

引用数组的单元: 假设数组变量arr,arr[index],索引值的范围是0--length-1;
引用对象的单元: 假设对象变量obj,obj[property],obj.property

遍历数组: for(i=0;i<arr.length-1;i++) {}
var obj = {name:zhang,height:175,age:22};
for(var per in obj) {

}

把'name'赋给per,此时per等于'name',[做相应的操作]
把'height'赋给per, 此时per等于'height',[做相应的操作]
把'age'赋给per,此时per等于'age',[做相应操作]



1:js内置对象的方法
在js里,除undefined外,其他一切数据都被js当成对象来处理.

以String为例:
var str = 'hello'; //str只是一个字符串,属性/方法那些东西是对象才有的特性.

但是,如果引用str的属性或者调用方法时, 
在调用的前一瞬间,js引擎会把字符串包装成一个"对象", 
还包装了一些属性:length, indexOf(),substr()等.
这个过程是系统完成的,我们不必关心.

我们要关心的:到底包装了哪些属性和方法

同理:
var arr = ['a','b','c'];
var arr = new Array('a','b','c');


内置对象:
日期时间对象类: Date()
var today = new Date();  
// Date()函数是所有日期时间对象的一个"抽象模板",而today是通过Date()造出来的一个具体对象.

还有一个对象,是js已经创建完毕的,不必再new来得到.
Math 数学对象
Math.random();
.....
Math.ceil();


2:DOM操作---节点查找

DOM操作---
节点增加
节点删除
节点修改

以上3点都得先"节点查找"

目标:能查找页面上任意一个节点.
节点查找的思路:
页面最大的是document--文档对象.

我们的思路: 
一般是从大到小, 先定位.
定位后再根据父子/兄弟关系说详细定位.


从document的角度出发,我们可以用以下3种方法先寻找:
document.getElementById(); // 返回值是"节点"
document.getElementsByTagName(); //返回值是"数组"
document.getElementsByName(); //返回的是"数组"

注意:ByName只能在表单中,才能保证兼容(低版本IE不支持);


通过以上3种方式定位后,如果找到的节点已经比较小/具体,
可以以这个节点为坐标,
通过 children, parentNode, nextSibling,previousSibling来
定位子元素,父元素,下一个兄弟节点,上一个兄弟节点.

如果通过以上3种方式定位,找到的节点依然非常大,内部的子节点依然非常多,
我们还可以继续利用getElementsByTagName()继续寻找
例: nodeP.getElementsByTagName('span');// 此时在nodeP里面继续寻找span标签

注意:找到的一个节点不是唯一的,因此,寻找的时间要注意2点,1是寻找效率,2是寻找的"无歧义性"
