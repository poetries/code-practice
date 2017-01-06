
<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/22
 * Time: 23:27
 */

header('content-type: text/html; charset=utf-8;');


// $_SERVER,放置的是 运行脚本的当前服务器信息,和当前运行的环境信息


// 有一天,经理告诉你, 把来访者的IP 记录下来,便于分析,
// 国内,哪一个省的用户最多.
// 并且,分析分析,用户使用的是什么浏览器


echo '你来自于',$_SERVER['REMOTE_ADDR'],'<br />';

echo '你的浏览器信息是',$_SERVER['HTTP_USER_AGENT'];


/**
为什么有的论坛,有一种动态签名档
你去访问的时候显示:

你好,来自于北京电信的朋友,你使用的是firefox浏览器,windows操作系统.

 **/
