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
 * Date: 2016/5/22
 * Time: 10:27
 */
//一重for循环
for($i=100000,$cnt=0;$i>5000;)
{
    $cnt++;
    if($i>50000)
    {
        $i *=0.95;
    }
    else
        $i -=5000;

    echo "第",$cnt,"次过桥","剩余",$i,"元","<br>";
}

echo "<br>";

//打印99乘法表 两层for循环利用钟表指针理解合适

for($i=1;$i<10;$i++)
{
    echo $i,"---";
    for($j=1;$j<= $i;$j++)
        echo $j,"&nbsp";
    echo "<br />";
}
echo "<br>";

//改进版
for($i=1;$i<10;$i++)
{

    for($j=1;$j<= $i;$j++)
        echo $j,"*",$i,"=",$j*$i,"&nbsp";
    echo "<br />";

}

echo "<br>";

//白钱买白鸡
//题目：公鸡5文一只 母鸡3文一只 小鸡一文买3只
//现在用100买100只鸡,请问，在100只鸡中公鸡、母鸡、小鸡各是多少只

for($g = 1;$g<=100;$g++)
{
    for($m = 1;$m<=100;$m++)
    {
        for($x = 1;$x<=100;$x++)
        {
            if(($g+$m+$x == 100) &&  ($g*5 + $m*3+$x/3) == 100)
            {
                echo "公鸡","母鸡","小鸡",$g,"&nbsp;",$m,"&nbsp;",$x,"<br>";
            }
        }
    }
}
echo "<br>";

//优化版 让计算机少做点运算
for($g = 1;$g<=20;$g++) //公鸡5块钱一只 不能超过20只
{
    for($m = 1;$m<=33;$m++) //母鸡 3块钱一只 不能超过33只
    {
            $x = 100-$g-$m;
            if(($g+$m+$x == 100) &&  ($g*5 + $m*3+$x/3) == 100)
            {
                echo "公鸡","母鸡","小鸡",$g,"&nbsp;",$m,"&nbsp;",$x,"<br>";
            }

    }
}


?>



</body>
</html>