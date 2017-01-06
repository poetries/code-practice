<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        .error {color: #FF0000;}
    </style>
</head>
<body>

<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/20
 * Time: 15:12
 */

/*使用 PHP 验证表单数据
首先我们对用户所有提交的数据都通过 PHP 的 htmlspecialchars() 函数处理。
当我们使用 htmlspecialchars() 函数时，在用户尝试提交以下文本域:
<script>location.href('http://www.runoob.com')</script>
- 该代码将不会被执行，因为它会被保存为HTML转义代码，如下所示：
&lt;script&gt;location.href('http://www.runoob.com')&lt;/script&gt;
以上代码是安全的，可以正常在页面显示或者插入邮件中。
当用户提交表单时，我们将做以下两件事情，：
使用 PHP trim() 函数去除用户输入数据中不必要的字符 (如：空格，tab，换行)。
使用PHP stripslashes()函数去除用户输入数据中的反斜杠 (\)
接下来让我们将这些过滤的函数写在一个我们自己定义的函数中，这样可以大大提高代码的复用性。
将函数命名为 test_input()。
现在，我们可以通过test_input()函数来检测 $_POST 中的所有变量, 脚本代码如下所示：*/



/*我们在执行以上脚本时，会通过$_SERVER["REQUEST_METHOD"]来检测表单是否被提交 。
如果 REQUEST_METHOD 是 POST, 表单将被提交 - 数据将被验证。如果表单未提交将跳过验证并显示空白。
在以上实例中使用输入项都是可选的，即使用户不输入任何数据也可以正常显示*/

// 定义变量并默认设为空值
//在以下代码中我们加入了一些新的变量: $nameErr, $emailErr, $genderErr, 和 $websiteErr.
//我们还为每个$_POST变量增加了一个if else语句。 这些语句将检查 $_POST 变量是 否为空
//如果为空，将显示对应的错误信息。 如果不为空，数据将传递给test_input() 函数

$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{

    if (empty($_POST["name"]))
    {$nameErr = "Name is required";}
    else
    {$name = test_input($_POST["name"]);}

    if (empty($_POST["email"]))
    {$emailErr = "Email is required";}
    else
    {$email = test_input($_POST["email"]);}

    if (empty($_POST["website"]))
    {$website = "";}
    else
    {$website = test_input($_POST["website"]);}

    if (empty($_POST["comment"]))
    {$comment = "";}
    else
    {$comment = test_input($_POST["comment"]);}

    if (empty($_POST["gender"]))
    {$genderErr = "Gender is required";}
    else
    {$gender = test_input($_POST["gender"]);}
}

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

    Name: <input type="text" name="name">
    <span class="error">* <?php echo $nameErr;?></span>
    <br><br>
    E-mail:
    <input type="text" name="email">
    <span class="error">* <?php echo $emailErr;?></span>
    <br><br>
    Website:
    <input type="text" name="website">
    <span class="error"><?php echo $websiteErr;?></span>
    <br><br>
    <label>Comment: <textarea name="comment" rows="5" cols="40"></textarea>
        <br><br>
        Gender:
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <span class="error">* <?php echo $genderErr;?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">

</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>