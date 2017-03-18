# 介绍

该项目是针对初级前端人员对于前端技术、数据交互以及Node.js等方面的学习，通过搭建整个前后台环境，从前台页面到后台再到数据库有一个更加深入的学习与掌握，希望通过本项目的学习能够帮助到你！

该博客系统的搭建使用技术栈为：

前台：HTML5 + CSS3 + jQuery + Bootstrap

后台：Node.js + express + MongoDB

前后异步交互：Ajax

# 本地环境部署

### 第一步：下载安装数据库MongoDB

请根据本地计算机环境选择相应版本下载安装

参考教程：http://www.runoob.com/mongodb/mongodb-tutorial.html

### 第二步：git clone 本项目

### 第三部：安装相应依赖

进入项目文件

	npm install

### 第四步：项目启动

(1) 启动数据库

	mongod.exe --dbpath yourfilename

(2)创建 `blog` 数据库并设置后台管理员账号密码

	use blog
	db.createCollection("user")
	db.user.insert({"username":"yourname", "password":"yourpassword"})

(3)启动项目 `npm start`

(4)后台管理系统入口 `http://localhost:3000/admin`

(5)前台页面入口 `http://localhost:3000`

# 教程(整理中。。。)

### 一、项目分析

![image](https://github.com/zhangxiongcn/blog/raw/master/blog1.png)

### 二、项目构建

#### 环境搭建

* Node.js 安装
* express以及应用生成器安装

		npm install express
		npm install express-generator -g

* MongoDB数据库安装

#### 创建项目骨架

	express -e blog

进入 `blog` 目录，安装依赖 `npm install`

* 根据需求分析，完善项目结构如下

![image](https://github.com/zhangxiongcn/blog/raw/master/blog2.png)

### 三、路由实现

#### 后台路由

#### 前台路由

### 四、功能实现

#### 后台功能实现

#### 后台登录控制

#### 前台功能实现

