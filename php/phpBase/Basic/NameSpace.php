<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/20
 * Time: 12:55
 */

//PHP 命名空间(namespace)是在PHP 5.3中加入的
//PHP 命名空间可以解决以下两类问题：
//用户编写的代码与PHP内部的类/函数/常量或第三方类/函数/常量之间的名字冲突。
//为很长的标识符名称(通常是为了缓解第一类问题而定义的)创建一个别名（或简短）的名称，提高源代码的可读性

/*定义命名空间
默认情况下，所有常量、类和函数名都放在全局空间下，就和PHP支持命名空间之前一样。
命名空间通过关键字namespace 来声明。*/

// 定义代码在 'MyProject' 命名空间中
namespace MyProject;

// ... 代码 ...

//你也可以在同一个文件中定义不同的命名空间代码，如：

namespace MyProject1;
// MyProject1 命名空间中的PHP代码

namespace MyProject2;
// MyProject2 命名空间中的PHP代码

// 另一种语法
namespace MyProject3 {
    // MyProject3 命名空间中的PHP代码
}


//在声明命名空间之前唯一合法的代码是用于定义源文件编码方式的 declare 语句。所有非 PHP 代码包括空白符都不能出现在命名空间的声明之前

declare(encoding='UTF-8'); //定义多个命名空间和不包含在命名空间中的代码
namespace MyProject {

    const CONNECT_OK = 1;
    class Connection { /* ... */ }
    function connect() { /* ... */  }
}

namespace { // 全局代码
    session_start();
    $a = MyProject\connect();
    echo MyProject\Connection::start();
}

//以下代码会出现语法错误：

/*<html>
<?php
namespace MyProject; // 命名空间前出现了“<html>” 会致命错误 -　命名空间必须是程序脚本的第一条语句
*/?>

//子命名空间
//与目录和文件的关系很象，PHP 命名空间也允许指定层次化的命名空间的名称。因此，命名空间的名字可以使用分层次的方式定义：

namespace MyProject\Sub\Level;  //声明分层次的单个命名空间

const CONNECT_OK = 1;
class Connection { /* ... */ }
function Connect() { /* ... */  }

//上面的例子创建了常量 MyProject\Sub\Level\CONNECT_OK，类 MyProject\Sub\Level\Connection 和函数 MyProject\Sub\Level\Connect。

<!--命名空间使用
PHP 命名空间中的类名可以通过三种方式引用：

1、非限定名称，或不包含前缀的类名称，例如 $a=new foo(); 或 foo::staticmethod();。如果当前命名空间是
currentnamespace，foo 将被解析为 currentnamespace\foo。如果使用 foo 的代码是全局的，不包含在任何命名空间
中的代码，则 foo 会被解析为foo。 警告：如果命名空间中的函数或常量未定义，则该非限定的函数名称或常量名称
会被解析为全局函数名称或常量名称。

2、限定名称,或包含前缀的名称，例如 $a = new subnamespace\foo(); 或 subnamespace\foo::staticmethod();。如果当前
的命名空间是 currentnamespace，则 foo 会被解析为 currentnamespace\subnamespace\foo。如果使用 foo 的代码是
全局的，不包含在任何命名空间中的代码，foo 会被解析为subnamespace\foo

3、完全限定名称，或包含了全局前缀操作符的名称，例如， $a = new \currentnamespace\foo(); 或
\currentnamespace\foo::staticmethod();。在这种情况下，foo 总是被解析为代码中的文字名(literal name)currentnamespace\foo。



