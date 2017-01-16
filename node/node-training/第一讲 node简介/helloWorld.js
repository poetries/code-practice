/**
 * 定义一个helloWorld函数
 */
function helloWorld(){
    console.log("Hello World!");
}

//如果你想你的模块是一个特定的类型就用Module.exports。如果你想的模块是一个典型的“实例化对象”就用exports
//给Module.exports添加属性类似于给exports添加属性

//请注意，这两种结果并不想同。前面已经提到module.exports是真正的接口，
// exports只不过是它的辅助工具。推荐使用exports导出，除非你打算从原来的“实例化对象”改变成一个类型

/**
 * 对外公开helloWorld函数
 */
//exports.helloWorld = helloWorld;

//等价
module.exports.helloWorld = helloWorld;
