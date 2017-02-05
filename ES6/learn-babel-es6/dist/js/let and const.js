'use strict';

var _slicedToArray = function () { function sliceIterator(arr, i) { var _arr = []; var _n = true; var _d = false; var _e = undefined; try { for (var _i = arr[Symbol.iterator](), _s; !(_n = (_s = _i.next()).done); _n = true) { _arr.push(_s.value); if (i && _arr.length === i) break; } } catch (err) { _d = true; _e = err; } finally { try { if (!_n && _i["return"]) _i["return"](); } finally { if (_d) throw _e; } } return _arr; } return function (arr, i) { if (Array.isArray(arr)) { return arr; } else if (Symbol.iterator in Object(arr)) { return sliceIterator(arr, i); } else { throw new TypeError("Invalid attempt to destructure non-iterable instance"); } }; }();

var _constants = require('./constants');

var arr = [1, 2, 3, 45, 6];

var _loop = function _loop(i) {
    arr[i].onclick = function () {
        console.log(i);
    };
};

for (var i = 0; i < arr.length; i++) {
    _loop(i);
}

// let不像var那样，会发生“变量提升”现象。
// 在代码块内，使用let命令声明变量之前，该变量都是不可用的。这在语法上，称为“暂时性死区”（temporal dead zone，简称TDZ）

var tmp = 123;
if (true) {
    _tmp = 'abc'; // ReferenceError
    var _tmp = void 0;
}
if (true) {
    // TDZ开始
    _tmp2 = 'abc'; // ReferenceError
    console.log(_tmp2); // ReferenceError
    var _tmp2 = void 0; // TDZ结束
    console.log(_tmp2); // undefined
    _tmp2 = 123;
    console.log(_tmp2); // 123
}
var poerson = {
    name: 'poetries',
    age: 12,
    love: function love() {
        var _this = this;

        setInterval(function () {
            console.log(_this.name + _this.age);
        }, 1000);
    }
};
poerson.love();

// const命令

// const也用来声明变量，但是声明的是常量。一旦声明，常量的值就不能改变
// const的作用域与let命令相同：只在声明所在的块级作用域内有效


console.log(_constants.A);
console.log(_constants.B);

// 变量的解构赋值
var a = 1,
    b = 2,
    c = 3;
var _ref = [1, 2, 3],
    x = _ref[0],
    y = _ref[2];
var head = 1,
    tail = [2, 3, 4];

//解构不成功，foo的值都会等于undefined

var _ref2 = [],
    foo = _ref2[0];

var _ = 1,
    _ref3 = _slicedToArray(_, 1),
    foo = _ref3[0];

var _false = false,
    _false2 = _slicedToArray(_false, 1),
    foo = _false2[0];

var _NaN = _slicedToArray(NaN, 1),
    foo = _NaN[0];

var _ref4 = [1],
    bar = _ref4[0],
    foo = _ref4[1];

//对象的解构赋值

var _foo$bar = { foo: "aaa", bar: "bbb" },
    foo = _foo$bar.foo,
    bar = _foo$bar.bar;
var _hello = 'hello',
    len = _hello.length;

//函数参数的解构赋值

function add(_ref5) {
    var _ref6 = _slicedToArray(_ref5, 2),
        x = _ref6[0],
        y = _ref6[1];

    return x + y;
}
add([1, 2]);

function move() {
    var _ref7 = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {},
        _ref7$x = _ref7.x,
        x = _ref7$x === undefined ? 0 : _ref7$x,
        _ref7$y = _ref7.y,
        y = _ref7$y === undefined ? 0 : _ref7$y;

    return [x, y];
}
move({ x: 3, y: 8 }); // [3, 8]
move({ x: 3 }); // [3, 0]
move({}); // [0, 0]
move(); // [0, 0]

503 === 503;
503 === 503;
Number.isFinite(15);

Array.of(3, 11, 8);
Array.of(3);

function f(x, y) {
    return { x: x, y: y };
}
var o = {
    method: function method() {
        return "Hello!";
    }
};