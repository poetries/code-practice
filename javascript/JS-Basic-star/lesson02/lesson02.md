### Lesson02

---

**回顾：**

**1、javascript介绍**

**2、基于对象的内存管理**

- javascript就是来操作这些对象

    - 通过逻辑组织对象之间的关系和行为
    - 如何操作这些对象？通过变量引用

**3、变量**

---

**知识点：**

**1、window作用域**

- 只要在script标签中定义的变量，默认就在window的作用域之下
- 默认就是window这个对象里面写代码

**2、数据类型**

查看数据类型用：typeof 变量名

**Javascript的数据类型有六种（ES6新增了第七种Symbol）**

- 数值（number）：整数和小数（比如1和3.14）
- 字符串（string）：字符组成的文本（比如"Hello World"）
- 布尔值（boolean）：true（真）和false（假）两个特定值
- undefined：表示 未定义 或不存在，即此处目前没有任何值
- null：表示空缺，即此处应该有一个值，但目前为空
- 对象（object）：各种值组成的集合

通常，我们将数值、字符串、布尔值称为原始类型（primitive type）的值，即它们是最基本的数据类型，不能再细分了。而将对象称为合成类型（complex type）的值，因为一个对象往往是多个原始类型的值的合成，可以看作是一个存放各种值的容器。至于undefined和null，一般将它们看成两个特殊值



---

在editplus里面，蓝色标明的是关键字;

- **内存中一共分为几种对象：**

    - 变量
    - DOM对象
    - 常量
    - 自定义对象




- **数据类型转换**

  - **转换函数**

   - `toString()` 转换为字符串，在JavaScript中所有数据类型都可以转换为string类型

    ```javascript
        var n1 = 12;
        var n2 = true;
        var a = [1, 2, 3];
        var o = {};
        function f(){}
        n1.toString(); //"12"
        n2.toString(); //"true"
        a.toString(); //"1,2,3"
        o.toString(); //"[object Object]"
        f.toString(); //"function f(){}"
    ```

   - `parseInt() `解析出一个string或者number类型的整数部分，如果没有可以转换的部分，则返回NaN（`not a number`）

    ```javascript
        var n1 = "12";
        var n2 = "23hello";
        var n3 = "hello";
        parseInt(n1); //12
        parseInt(n2); //23
        parseInt(n3); //NaN
    ```
   - `parseFloat() `解析出一个string的浮点数部分，如果没有可以转换的部分，则返回`NaN`（not a number）

    ```javascript
        var n1 = "1.2.3";
        var n2 = "1.2hello"
        var n3 = "hello"
        parseFloat(n1); //1.2
        parseFloat(n2); //1.2
        parseFloat(n3); //NaN 
    ```

- **强制类型转换**

  - `Boolean(value)`- 把给定的值转换成`Boolean`型

    ```javascript
        Boolean(123); //true
        Boolean(""); //false
        Boolean([]); //true
        Boolean({}); //true
        Boolean(null); //false
        Boolean(undefined); //false
    ```

  - `Number(value)`-把给定的值转换成数字（可以是整数或浮点数）

    ```javascript
        Number("123"); //123
        Number("123h"); //NaN
        Number(true); //1
        Number(false); //0
        Number(undefined); //NaN
        Number(null); //0
        Number([]); //0
        Number({}); //NaN
    ```
 - `String(value)`- 把给定的值转换成字符串

    ```javascript
        String(123); //"123"
        String([1,2]); //"1,2"
        String(undefined) //"undefined"
        String(null) //"null"
        String({}) //"[object Object]"
    ```

- **隐式转换**

    - 数字＋字符串：数字转换为字符串 `console.log(12+"12")`; //1212
    - 数字＋布尔值：true转换为1，false转换为0 `console.log(12+true)`; //13
    - 字符串＋布尔值：布尔值转换为true或false `console.log("hello"+true)`; //hellotrue
    - 布尔值＋布尔值 `console.log(true+true)`; //2


- **null和undefined**


   - `undefined` 表示一种未知状态，声明了但没有初始化的变量，变量的值时一个未知状态。访问不存在的属性或对象window.xxx）方法没有明确返回值时，返回值是一个undefined.当对未声明的变量应用typeof运算符时，显示为undefined。
   - `null`表示尚未存在的对象,null是一个有特殊意义的值。可以为变量赋值为null，此时变量的值为“已知状态”(不是undefined)，即null。（用来初始化变量，清除变量内容，释放内存）


    `undefined==null`   //结果为true,但含义不同。
    `undefined===null` //false,两者类型不一致，前者为“undefined”，后者为“object”



**3、javascript脚本执行顺序**

- 第一步定义： 分为var定义 和函数定义function
- 第二步执行： 其他所有
- 先从上往下定义完所有的后，再从上往下执行 除了var  function定义外的 其他都是执行 如：赋值 函数调用


---

- 在栈里面找到的，就不去堆里面找，因为栈空间小，就近原则【总之：先在栈里面找，找不到再去堆里面找】在栈里面开辟，就能找到堆里面的地址 如：var b = function(){}



---

**作业：**

- 各种数据类型去理解一下

   - 举例子

- 自定义对象书写格式（自定一定10个对象）

    - 运行代码测试

- 函数定义在内存中的变化

    - 画图（常量池）


---

## 总结一下`==`运算的规则：(隐式转换)

- JS中的值有两种类型：原始类型(`Primitive`)、对象类型(`Object`)。

- 原始类型包括：`Undefined`、`Null`、`Boolean`、`Number`和`String`等五种。

- `Undefined`类型和`Null`类型的都只有一个值，即`undefined`和`null`；`Boolean`类型有两个值：`true`和`false`；`Number`类型的值有很多很多；String类型的值理论上有无数个。

- 所有对象都有`valueOf()`和`toString()`方法，它们继承自Object，当然也可能被子类重写

---

- `undefined == null`，结果是`true`。且它俩与所有其他值比较的结果都是`false`。

- `String == Boolean`，需要两个操作数同时转为`Number`。

- `String/Boolean == Number`，需要`String/Boolean`转为`Number`。

- `Object == Primitive`，需要`Object`转为`Primitive`(具体通过`valueOf`和`toString`方法)

---

![](https://pic2.zhimg.com/19f0997f259fcf4545d17ed568227c81_b.png)



