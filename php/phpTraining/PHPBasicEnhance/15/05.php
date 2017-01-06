
<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/24
 * Time: 0:13
 */

$conn = mysql_connect('localhost','root','111111');
if(!$conn) {
    echo '连接数据库失败';
    exit;
}


// 选库
$sql = 'use test';
mysql_query($sql,$conn);

$id = isset($_GET['id']) ? $_GET['id'] + 0 :0;
$sql = 'select * from stu where id=' . $id;
$rs = mysql_query($sql,$conn);

if(!$rs) {
    echo '查询失败';
    exit;
}

$stu = mysql_fetch_assoc($rs); // 为什么不用while取?

if(empty($stu)) {
    echo '没有这个用户';
    exit;
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
    <title>新建网页</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <script type="text/javascript">

    </script>

    <style type="text/css">
    </style>
</head>
<body>
<form action="01.php" method="post">
            <pre>
                接收地址栏的参数
                并根据参数拼接sql语句查询
            </pre>
    学生id:<input type="text" name="id" value="<?php echo $stu['id'];?>" /><br />
    新姓名:<input type="text" name="sname" value="<?php echo $stu['sname'];?>" /><br />
    新YY:<input type="text" name="yy"  value="<?php echo $stu['yy'];?>" /><br />

    <input type="submit" value="提交修改" />
</form>
</body>
</html>