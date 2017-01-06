<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/20
 * Time: 20:24
 */

//PHP 文件处理
//打开文件
//fopen() 函数用于在 PHP 中打开文件。
//此函数的第一个参数含有要打开的文件的名称，第二个参数规定了使用哪种模式来打开文件：

$file=fopen("welcome.txt","w+");

//注释：如果 fopen() 函数无法打开指定文件，则返回 0 (false)

//fclose() 函数用于关闭打开的文件：
$file = fopen("test.txt","r");

//some code to be executed

fclose($file);

//如果 fopen() 函数不能打开指定的文件，下面的实例会生成一段消息：
$file=fopen("welcome.txt","r") or exit("Unable to open file!");

//检测文件末尾（EOF）
//feof() 函数检测是否已到达文件末尾（EOF）。
//在循环遍历未知长度的数据时，feof() 函数很有用。
//注释：在 w 、a 和 x 模式下，您无法读取打开的文件！

if (feof($file)) echo "文件结尾";


//逐行读取文件
//fgets() 函数用于从文件中逐行读取文件。
//注释：在调用该函数之后，文件指针会移动到下一行。
//实例
//下面的实例逐行读取文件，直到文件末尾为止：

$file = fopen("welcome.txt", "r") or exit("Unable to open file!");
//Output a line of the file until the end is reached
while(!feof($file))
{
    echo fgets($file). "<br>";
}
fclose($file);

//逐字符读取文件
//fgetc() 函数用于从文件中逐字符地读取文件。
//注释：在调用该函数之后，文件指针会移动到下一个字符。
//实例
//下面的实例逐字符地读取文件，直到文件末尾为止：

$file=fopen("welcome.txt","r") or exit("Unable to open file!");
while (!feof($file))
{
    echo fgetc($file);
}
fclose($file);



?>
</body>
</html>