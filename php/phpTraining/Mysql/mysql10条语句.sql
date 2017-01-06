
/*  mysql入门10条语句

1、链接到数据库服务器
mysql -h 地址 -u root -p 密码

2、查看所有库
show databases;

3、选库
use 库名

4、查看库下面的表
show tables;

5、建表
create table msg{
    id int auto_increment primary key，
	content varcha(200)，
	pubtime int
}charset utf8;

6、告诉服务器你的字符集：set names gbk/utg8;

7、添加数据

insert into msg(id,content,pubtime) values(1,'哈哈哈哈',13445);

8、查询所有数据
select * from msg;

9、按id查询
select * from where id = 2...

10、快速清空表
truncate 表名

