'use strict';

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

var _slicedToArray = function () { function sliceIterator(arr, i) { var _arr = []; var _n = true; var _d = false; var _e = undefined; try { for (var _i = arr[Symbol.iterator](), _s; !(_n = (_s = _i.next()).done); _n = true) { _arr.push(_s.value); if (i && _arr.length === i) break; } } catch (err) { _d = true; _e = err; } finally { try { if (!_n && _i["return"]) _i["return"](); } finally { if (_d) throw _e; } } return _arr; } return function (arr, i) { if (Array.isArray(arr)) { return arr; } else if (Symbol.iterator in Object(arr)) { return sliceIterator(arr, i); } else { throw new TypeError("Invalid attempt to destructure non-iterable instance"); } }; }();

var _constants = require('./constants');

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _toConsumableArray(arr) { if (Array.isArray(arr)) { for (var i = 0, arr2 = Array(arr.length); i < arr.length; i++) { arr2[i] = arr[i]; } return arr2; } else { return Array.from(arr); } }

var arr = [1, 2, 3, 45, 6];

var _loop = function _loop(_i) {
    arr[_i].onclick = function () {
        console.log(_i);
    };
};

for (var _i = 0; _i < arr.length; _i++) {
    _loop(_i);
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
function push(array) {
    for (var _len = arguments.length, items = Array(_len > 1 ? _len - 1 : 0), _key = 1; _key < _len; _key++) {
        items[_key - 1] = arguments[_key];
    }

    array.push.apply(array, items);
}
var go = regeneratorRuntime.mark(function go() {
    return regeneratorRuntime.wrap(function go$(_context) {
        while (1) {
            switch (_context.prev = _context.next) {
                case 0:
                    _context.next = 2;
                    return 1;

                case 2:
                    _context.next = 4;
                    return 2;

                case 4:
                    _context.next = 6;
                    return 3;

                case 6:
                case 'end':
                    return _context.stop();
            }
        }
    }, go, this);
});
var f = function f(v) {
    return v;
};
var isEven = function isEven(n) {
    return n % 2 == 0;
};
var square = function square(n) {
    return n * n;
};

[1, 2, 3].map(function (x) {
    return x * x;
});

var handler = {
    id: "123456",
    init: function init() {
        var _this2 = this;

        document.addEventListener("click", function (event) {
            return _this2.doSomething(event.type);
        }, false);
    },
    doSomething: function doSomething(type) {
        console.log("Handling " + type + " for " + this.id);
    }
};

var s = new Set();
[2, 3, 5, 4, 5, 2, 2].map(function (x) {
    return s.add(x);
});
var _iteratorNormalCompletion = true;
var _didIteratorError = false;
var _iteratorError = undefined;

try {
    for (var _iterator = s[Symbol.iterator](), _step; !(_iteratorNormalCompletion = (_step = _iterator.next()).done); _iteratorNormalCompletion = true) {
        i = _step.value;
        console.log(i);
    }
} catch (err) {
    _didIteratorError = true;
    _iteratorError = err;
} finally {
    try {
        if (!_iteratorNormalCompletion && _iterator.return) {
            _iterator.return();
        }
    } finally {
        if (_didIteratorError) {
            throw _iteratorError;
        }
    }
}

var first = arr[0],
    second = arr[1];


var itemsCopy = [].concat(_toConsumableArray(items));

(function () {
    console.log('Welcome to the Internet.');
})();
var boundMethod = function boundMethod() {
    for (var _len2 = arguments.length, params = Array(_len2), _key2 = 0; _key2 < _len2; _key2++) {
        params[_key2] = arguments[_key2];
    }

    return method.apply(undefined, params);
};

function handleThings() {
    // ...

    var opts = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {};
}

var Queue = function () {
    function Queue() {
        var contents = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : [];

        _classCallCheck(this, Queue);

        this._queue = [].concat(_toConsumableArray(contents));
    }

    _createClass(Queue, [{
        key: 'pop',
        value: function pop() {
            var value = this._queue[0];
            this._queue.splice(0, 1);
            return value;
        }
    }]);

    return Queue;
}();

function getFullName(_ref8) {
    var firstName = _ref8.firstName,
        lastName = _ref8.lastName;
}

function processInput(input) {
    return { left: left, right: right, top: top, bottom: bottom };
}

var _processInput = processInput(input),
    left = _processInput.left,
    right = _processInput.right;

var obj = _defineProperty({
    id: 5,
    name: 'San Francisco'
}, getKey('enabled'), true);

var atom = {
    ref: ref,
    value: 1,
    addValue: function addValue(value) {
        return this.value + this;
    }
};

function divide(a, b) {
    var _ref9 = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : {},
        _ref9$option = _ref9.option,
        option = _ref9$option === undefined ? false : _ref9$option;
}
function handleThings() {
    // ...

    var opts = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {};
}

var jsonData = {
    id: 42,
    status: "OK",
    data: [867, 5309]
};
var id = jsonData.id,
    status = jsonData.status,
    number = jsonData.data;

console.log(id, status, number);

var _require = require("source-map"),
    SourceMapConsumer = _require.SourceMapConsumer,
    SourceNode = _require.SourceNode;

Object.assign(SomeClass.prototype, {
    someMethod: function someMethod(arg1, arg2) {},
    anotherMethod: function anotherMethod() {}
});

var merge = function merge(target) {
    for (var _len3 = arguments.length, sources = Array(_len3 > 1 ? _len3 - 1 : 0), _key3 = 1; _key3 < _len3; _key3++) {
        sources[_key3 - 1] = arguments[_key3];
    }

    return Object.assign.apply(Object, [target].concat(sources));
};