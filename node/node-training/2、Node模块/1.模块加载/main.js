/**
 * 通过模块名require一个模块，会从当前目录开始，一级一级的往上级目录查找是否存在node_modules目录
 */

var testModuleByName = require("testModule");
testModuleByName.foo();

/**
 * 通过相对路径require一个模块，是从当前路径开始的相对路径
 * "./"表示当前目录
 * "../"表示上级目录
 * "../../"表示上级的上级目录
 * 当同一个目录下同时存在文件模块和文件夹模块，优先加载文件模块
 * (注意当前目录下还有一个testModule的文件夹)
 */
var testModuleByPath = require("./testModule");
testModuleByPath.foo();

/**
 * 通过绝对路径require一个模块，路径是从根目录开始
 */
var moduleAbsPath = __dirname + "/testModule";
console.log("\n绝对路径：" + moduleAbsPath);
var testModuleByAbsPath = require(moduleAbsPath);
testModuleByAbsPath.foo();

/**
 * 加载文件夹模块，Node会自动去找到并加载文件夹下面的index.js
 */
var testFolderModule = require("./testFolderModule");
testFolderModule.foo();