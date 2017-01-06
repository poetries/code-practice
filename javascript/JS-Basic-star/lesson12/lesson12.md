**回顾：**

   - 1.`String`

   - 2.`Math`  `Math.random()`

**新知识：**

- 1.`Date` 日期类

- 2.`Array`

- 3.`Regex`

    - a.`[]`一个字符的范围
    - b.有顺序要求的
    - c.`\w==[a-zA-Z0-9_]`  `\d==[0-9]`
    - d.{count}设置匹配数量比如`\w{5}`
    - e.//的正则表达式匹配局部，`/^$/`的正则表达式是匹配全部
    - f.`()`的作用就是为了分组匹配

**作业：**

- 日历
- 数组实现21点游戏
- 正则表达式验证

  - 给字符串原型添加功能isMobile
  - 给字符串原型添加功能isNumber
  - 给字符串原型添加功能isCardId
  - 给字符串原型添加功能is...

---

- 简单的封装对象

```javascript
String.prototype.isEmail = function(){

  email = this;
  if (email.indexOf("@")!=-1&&email.indexOf(".")!=-1)
  {
    if(email.indexOf("@")<email.lastIndexOf("@")){
      alert("邮箱不合法");
    }else{
      alert("邮箱合法");
    }
  }

}
var email = "jingguanliuye@gmail.com";
email.isEmail();
```

---

```javascript
//===============================日历练习(方法简洁 高效)======================================



//var year = parseInt(prompt("请输入日历年份："));
//var month = parseInt(prompt("请输入日历月份："))-1;

Date.prototype.printCalendar = function(){

var year = this.getFullYear(),month = this.getMonth();
var date = new Date(year,month,1);

//alert(date.toLocaleString());
document.write("<div class='date'>"+year+"年"+(month+1)+"月</div>");
document.write("日 一 二 三 四 五 六<br />");


var day = date.getDay();
for(var i=0;i<day;i++){
  document.write('  ');
}

var count = new Date(year,month+1,0).getDate();//这里的0返回一个月的最后一天
for(var i=1;i<=count;i++){
  document.write(i+'  ');
  if((i+day)%7==0){
    document.write('<br/>');
  }
}


}
new Date(2012,2).printCalendar();
```

---

![](..images/DOM16.png)
