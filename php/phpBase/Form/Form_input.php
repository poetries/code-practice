<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/20
 * Time: 14:22
 */
//PHP 中的 $_GET 和 $_POST 变量用于检索表单中的信息，比如用户输入

<form action="welcome.php" method="post">
    Name: <input type="text" name="fname">
    Age: <input type="text" name="age">
<input type="submit">

//welcome.php
//Welcome <?php echo $_POST["fname"]; ?>!<br>
//You are <?php echo $_POST["age"]; ?> years old.