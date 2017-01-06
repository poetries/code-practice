
<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/24
 * Time: 0:13
 */


// 所有的用户列表
$conn = mysql_connect('localhost','root','111111');
if(!$conn) {
    echo '连接数据库失败';
    exit;
}


// 选库
$sql = 'use test';
mysql_query($sql,$conn);

// 发送查询
$sql = 'select * from stu';
$rs = mysql_query($sql,$conn);


$list = array();
while($row = mysql_fetch_assoc($rs)) {
    $list[] = $row;
}

// print_r($list);

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
<h2>公益一期学员列表</h2>
        <pre>
            接下来,我们想达到如下 效果:
            点击谁,就修改谁.

            具体:点击33号用户,则来到一张表单页面,
            表单的值 正好是33号用户的信息.

            提交后,则修改33号用户

            思路:
            点击N号时,把N作为参数传过去.
            根据参数拼接sql语句,来查询N号用户
            查出来的结果,作为表单的默认值.
        </pre>
<table border="1">
    <tr>
        <td>id</td>
        <td>姓名</td>
        <td>YY</td>
        <td>操作</td>
    </tr>
    <?php
    foreach($list as $v) {
        echo '<tr>';
        echo '<td>',$v['id'],'</td>';
        echo '<td>',$v['sname'],'</td>';
        echo '<td>',$v['yy'],'</td>';
        echo '<td><a href="05.php?id=',$v['id'],'">编辑</a></td>';
        echo '</tr>';

    }
    ?>
</table>
</body>
</html>