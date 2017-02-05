let arr = [1,2,3,45,6];

for (let i = 0; i < arr.length; i++) {
    arr[i].onclick = ()=>{
        console.log(i);
    }
}

// let不像var那样，会发生“变量提升”现象。
// 在代码块内，使用let命令声明变量之前，该变量都是不可用的。这在语法上，称为“暂时性死区”（temporal dead zone，简称TDZ）

var tmp = 123;
if (true) {
    tmp = 'abc'; // ReferenceError
    let tmp;
}
if (true) {
// TDZ开始
    tmp = 'abc'; // ReferenceError
    console.log(tmp); // ReferenceError
    let tmp; // TDZ结束
    console.log(tmp); // undefined
    tmp = 123;
    console.log(tmp); // 123
}
let poerson = {
    name: 'poetries',
    age: 12,
    love: function () {
       setInterval(()=>{
           console.log(this.name+this.age);
       },1000);
    }
}
poerson.love();

// const命令

// const也用来声明变量，但是声明的是常量。一旦声明，常量的值就不能改变
// const的作用域与let命令相同：只在声明所在的块级作用域内有效


import {A, B} from './constants';

console.log(A);
console.log(B);

// 变量的解构赋值
let [a, b, c] = [1, 2, 3];
let [x, , y] = [1, 2, 3];
let [head, ...tail] = [1, 2, 3, 4];

//解构不成功，foo的值都会等于undefined
var [foo] = [];
var [foo] = 1;
var [foo] = false;
var [foo] = NaN;
var [bar, foo] = [1];

//对象的解构赋值

var { foo, bar } = { foo: "aaa", bar: "bbb" };

let {length : len} = 'hello'

//函数参数的解构赋值

function add([x, y]){
    return x + y;
}
add([1, 2])

function move({x = 0, y = 0} = {}) {
    return [x, y];
}
move({x: 3, y: 8}); // [3, 8]
move({x: 3}); // [3, 0]
move({}); // [0, 0]
move(); // [0, 0]

0b111110111 === 503
0o767 === 503
Number.isFinite(15)

Array.of(3, 11, 8)
Array.of(3)

function f( x, y ) {
    return { x, y };
}
var o = {
    method() {
        return "Hello!";
    }
};
function push(array, ...items) {
    array.push(...items);
}
var go = function*(){
    yield 1;
    yield 2;
    yield 3;
}
var f = v => v;
const isEven = n => n % 2 == 0;
const square = n => n * n;

[1,2,3].map(x => x * x);

var handler = {
    id: "123456",
    init: function() {
        document.addEventListener("click",
            event => this.doSomething(event.type), false);
    },
    doSomething: function(type) {
        console.log("Handling " + type + " for " + this.id);
    }
};

var s = new Set();
[2,3,5,4,5,2,2].map(x => s.add(x))
for (i of s) {console.log(i)}

const [first, second] = arr;

const itemsCopy = [...items];

(() => {
    console.log('Welcome to the Internet.');
})();
const boundMethod = (...params) => method.apply(this, params);

function handleThings(opts = {}) {
// ...
}

class Queue {
    constructor(contents = []) {
        this._queue = [...contents];
    }
    pop() {
        const value = this._queue[0];
        this._queue.splice(0, 1);
        return value;
    }
}

function getFullName({ firstName, lastName }) {
}

function processInput(input) {
    return { left, right, top, bottom };
}

const { left, right } = processInput(input);

const obj = {
    id: 5,
    name: 'San Francisco',
    [getKey('enabled')]: true,
};

const atom = {
    ref,
    value: 1,
    addValue(value) {
        return this.value + this;
    },
};



function divide(a, b, { option = false } = {}) {
}
function handleThings(opts = {}) {
// ...
}



var jsonData = {
    id: 42,
    status: "OK",
    data: [867, 5309]
}
let { id, status, data: number } = jsonData;
console.log(id, status, number)

const { SourceMapConsumer, SourceNode } = require("source-map");

Object.assign(SomeClass.prototype, {
    someMethod(arg1, arg2) {

    },
    anotherMethod() {

    }
});

const merge =
    (target, ...sources) => Object.assign(target, ...sources);