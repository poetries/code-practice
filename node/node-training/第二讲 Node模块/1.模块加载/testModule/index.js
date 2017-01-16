/**
 * 一般文件夹模块，模块名就是文件夹的名称
 * Node会默认去找文件夹下面的index.js
 * 文件夹模块的好处就是，可以将一些小模块，组成一个大模块，统一对外部提供接口
 * 包就是一种文件夹模块
 * 门户模式
 */
exports.foo = function(){
    console.log(module.filename);
};
