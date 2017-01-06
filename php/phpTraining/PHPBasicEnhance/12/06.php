<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/24
 * Time: 0:04
 */

// each "每一个"

$arr = array('男','女','老','幼');

/*
分析: 第1个单元 键:0 值:男

each的作用是把指针指向的当前单元的信息组成一个数组
数组有4个单元,具体如下:

array(
1=>'单元值',
'value'=>'单元值',
0=>'单元的键',
'key'=>'单元的键'
)

arrary(
1=>'男',
'value'=>'男',
0=>0,
'key'=>0
)
*/
print_r(each($arr));



// each不仅把当前指针指向的单元的信息组合成一个数组返回
// 并且顺手把指针往尾部移动一次
/*
因此,下一行打印结果
array(
1=>'女',
'value'=>'女',
0=>'1',
'key'=>1
)
*/
print_r(each($arr));

// 返回值是固定的4个单元的数组,1 value 0 key

print_r(each($arr));
print_r(each($arr)); // 把"幼"打出来,指针再往后


var_dump(each($arr)); // false, 因为指针已经超出数组界限了

/*
each 取出指针所指单元的键和值,组合成一个数组返回,
并把指针往尾部移

如果 取不出来单元,返回false
*/


// 打印 键-值
echo '<hr />';
$arr = array(-3,-2,-0,1,2,3);
while($ceil = each($arr)) { // 如果能取出单元,则返回1,value,0,key4单元的数组,不为假
    // 如果指针已经超出界限,返回false,自然while结束

    echo $ceil[0],'~',$ceil[1],'<br />';
}