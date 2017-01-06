
第一部分：DML--数据库操作语言

    
常用表管理语句：
        
        set names gbk;--设置字符编码
        查看所有数据库：show databases;
        查看所有表：show tables
        查看表结构：desc 表名/视图名
        use 表名;--选择表
        查看建表过程：show  create table  表名
        查看建视图过程：show create view 视图
        查看所有详细表信息：show table status\G(让结果显示好看一些)
        查看某张表详细信息：show table status where name='goods（表名）'\G
        删除表：drop table 表名
        删除视图：drop view 视图名；
        删除列：alter table drop column 指定列
        改表名：rename table oldName to newName
        更新表：update 表名 set 字段
        插入数据：insert into 表名 value()
        清空数据：truncate 表名;(相当于删除表在重建)
        写错语句退出:\c
        让结果显示好看一些:\G
        
insert：

    insert into 表名 插入列与值要严格对应

    数字不必加单引号 字符串必须加单引号
    
    例子：insert into test(age,name)values(10,'小明');
    


update操作：

     例子：update user set age=8 where name=lianying;（注意where条件不加会影响所有行，需要小心）
     

delete操作：

    不可能针对某一列删除 要删必须一行
    delete from 表名 where 添加
    
    delete from user where uid=1;（必须加上添加，否则全部数据删除）
    
    
select查找：

    select * from 表名（全部查出）
    select uid,name from user where uid>10;
    select * from user where uid=11;
    
    
select查询模型（重要）：

    select * from 表名 where 1（where是一个表达式 为真则取出来 为假不取）
    
    把列看成变量，既然是变量就能参与运，。这个过程称为广义投影（比如：取出两列参与运算） 也可以带到函数里面计算
    
查询练习：

    子查询可以查出一个栏目下所有字栏目的商品
    模糊查询：where 字段 like '%A%'  --%代表任意字符 _代表单一字符
    

注意：NULL：查询方法： select * from test where name is （not）null

    
group分组与统计函数：

    统计函数：
            max()
            count()
            avg()
            min()
            sum()
            

在sql中重复要用的语句：用as名字新变量，以便调用

select goods_id,goods_name,(market_price-shop_price) as save from goods


having -- 对查询出来的结果集进行筛选
where 不能写在having后面

order by :(默认升序asc) 降序asc（排序很浪费资源）
    select goods_id,goods_name,shop_price from goods order by  shop_price desc;
    

limit用法：（做分页类能用到）

            限制取出条目（limit有两个参数 ：偏移量 取出的条目）

            select goods_id,goods_name,shop_price
            -> from goods
            -> order by shop_price desc
            -> limit  0,3;



子句的查询陷阱：

        5种语句有严格的顺序，where ，group by,having,order by,limit
        不能颠倒顺序
        
        例子： #语句有严格的顺序
        
                mysql> select id,sum(num) 
                    -> from
                    -> (select * from a union select * from b) as temp
                    -> group by id
                    -> having sum(num)>10
                    -> order by sum(num) desc
                    -> limit 0,1;
        
    
子查询：
    
    where字查询：（内层的查询结果作为外层的比较条件）
    
        静态的：select goods_id,goods_name from goods where goods_id=32;
        动态的：select goods_id,goods_name from goods where goods_id=(select max(goods_id) from goods);
        
        #取出每个栏目下最新的商品：
        select goods_id,cat_id,goods_name from goods where goods_id in (select max(goods_id) from goods group by cat_id);
    
    from子查询：
        #每个栏目下最新的商品：
        mysql> select goods_id,goods_name from (select * from goods where 1 order by cat_id desc) as tmp
            -> group by cat_id;
            
    exists子查询：
    
        #查询栏目下是否有商品
        mysql> select * from category
            -> where exists(select * from goods where goods.cat_id=category.cat_id)
    
    
内连接查询（重要）：

            内连接是左右连接结果的交集

            select xxx from
            table1 inner jion table2 on table1.xx=table2.xx
    
        
        mysql> select boy.hid,boy.bname,girl.hid,girl.gname
            -> from
            -> boy inner join girl on boy.hid=girl.hid;
        
    
左连接特点：

        以左表的数据为标准，去找右表的数据，查不到的为NULL
        
        #左连接
        mysql> select boy.hid,boy.bname,girl.hid,girl.gname
            -> from
            -> boy left join girl on boy.hid=girl.hid;
        
        #右连接
        mysql> select boy.hid,boy.bname,girl.hid,girl.gname
        -> from
        -> boy right join girl on boy.hid=girl.hid;

        
        mysql> select goods_id,cat_name,goods_name,shop_price
            -> from
            -> goods left join category on goods.cat_id= category.cat_id
            -> where goods.cat_id=4;
            

union查询：
            把2条或多条的额查询结果，合并成1个结果集
            
            sql1 N行
            sql2 M行
            sql1 union sql2，N+M行
            
            union语句必须满足一个条件：各语句取出的列数要相同
            
            union语句中不用写order by 因为sql合并后得到总的结果集可以order by 字句order by失去意义
            
            场景：2条语句，各自的where非常复杂，可以简化成简单的条件在union
            
            注意：使用union时，完全相等的行将会被合并
                  合并是比较耗时的操作，一般不让union合并，使用union all 可以避免合并 对速度有提升
                  
            mysql> select * from a
                -> union all #union all 可以避免重复语句合并
                -> select * from b;
                    

            
            mysql> select goods_id,cat_id,goods_name,shop_price from goods where cat_id=2
                -> union
                -> select goods_id,cat_id,goods_name,shop_price from goods where cat_id=4;
                

                

第二部分：DDL数据库定义语言（建表）

    create table 表名 （
    列1 列类型 [列属性 默认值]
    列2 列类型 [列属性 默认值]
    ...
    );
    engine = 存储引擎
    chartset = 字符集
        

    建表过程：声明表头的过程，也就是声明列的过程
    
    
        选择合理的列类型 合理的列宽度（即放下内容 又不浪费磁盘空间）
        
        列选什么类型的列 列给什么样的属性
        
    

    
        数值型--整形，浮点型，定点型
        
        字符串型--char varchar text
        
        日期时间类型--2012-12-13 14.25.36
        
        
        
    整形列：
         
        类型：        字节：      最小值：                  最大值：

        bigint     -- 8字节        -9223372036854775808       18446744073709551615
        int        -- 4字节          --2147483648             4294967295
        mediunint  -- 3字节          -8388608                 8388607
        smallint   -- 2字节        -32768                   32767
        tinyint    -- 1字节        -128                     127
        
        整行列的可选参数：
        
            unsigned 无符号，列的值从0开始不为负
            zerofill M（宽度）适合用于 学号 编码等固定宽度的数字，可以用0填充至固定宽度
            
            学号：1--0001
            
            注意：zerofill属性默认决定是unsigned
        
            
    浮点列与定点列：
        
            float（M，D）M是精度总位数 D代表小数点后面的位数
            double
            
            float/double 范围区别和decimal相比：浮点数存储有精度的损失
    
            decimal 定点型更精确
            
            
    字符型列：

            char(M)--char(10)只能存10个字符
            
            char型：如果不够M个字符，内部会用空格补齐，取出时在把右侧空格删掉
                    注意：这意味着 右侧本身有空格将会丢失
                
                
            varchar(M)--用多少占多少--自动扩展        
            varchar不会丢失空格
            
            
            速度上：定长char快一些  在一定范围内用char定长寻址快 速度快
            M比较短20个以内用char
            
            text:存大段文本
            blob:是二进制类型 用来存图像信息 音频等二进制信息
                 blob意义在于防止因为字符集的问题导致信息丢失
                 
        
            enum枚举类型：是定义好 值就在某几个枚举范围内
                          gender emum('男','女') insert 只能选其中之一
                          
                          
                          
    日期时间类型：
                year：存年份
                date:存年份日期2016-18
                time：存时分秒
                datetime:年月日时分秒
                
            mysql> create table t8(
                -> ya year,
                -> dt date,
                -> tm time,
                -> dttm datetime);
                -> insert into t8 (ya,dt,tm) values(2015,'2015-12-18','18:28:36');
        

    列的默认值：
            
            1、NULL查询不方便
            2、NULL索引效率不高
            3、实际中避免列的值为NULL
            
            如何避免：声明列NOT NULL default默认值
            
            mysql> create table t10(
                -> id int not null default 0,
                -> name char(10) not null default ''
                -> );
                        
    主键与自增：
            
            主键primary key 此列不重复，能区分每一行
            
            
            primary key,auto_increment(一般那两个一起出现)
            
            注意：一张表列只能有一列为auto_increment 且此列必须加索引（index key）
    
     优化：
            定长（char）与变长（varchar）分离
            常用与不常用列分离
            
            能提高表的查询效率
            
    
    列的删除与增加：（列的增删改）
    
            alter  table 表名 add 列名 列类型 列属性 默认在表的最后
            alter  table  表名 drop column 指定列--删除列
            alter  table  表名 add列名  列类型 列属性 [after 指定列的后面]
            
            alter table  表名 change height(要修改的) shengao（被修改后的） smallint
            alter table  表名 modify 列名  要改成的新的属性
            
            #alter table t12 modify shengao bigint;
            
            
    视图：（存储的都是语句）
         view被称为虚拟表，view是sql语句的查询结果（物理表的一个映射结果，物理表一改变，视图表也改变）
         
         view好处：
                1、权限控制可用：
                                 比如某几个列允许用户查询，其他不允许
                                 可通过视图开放其中一列或几列，起到权限控制作用
                
                2、简化复杂的查询
                
                3、视图能更新？
                    如果视图的每一行是与物理表一一对应的可以
                    view的行是由物理表多行经过计算得到的结果，view不可以更新
                
                    
        视图的algorithm：
            
                对于检查查询形成的view，在对view查询时，如order by where
                可以把建视图语句+查视图的语句===合并成==>查物理的语句
                这种视图的算法叫merger（合并）
                
                    
        
    引擎的概念：
    
        mysql 5.0以上默认的引擎是innoDB  一般建表时指定引擎
        
        myisam引擎存储的数据可以直接考出来拿去用
        innDB要把数据导出来
        
        myisam和innDB引擎区别：
                            
                            mysiam     innDB 
        
            批量插入的速度：  高          低
            存储限制：           没有     64TB
        
        
    字符集与乱码问题：
    
        字符集、校对集(排序规则)、乱码
        
        文字本来的字符集与展示的字符集不一致导致
        
        客户端编码设置：set names gbk/utf8;
        表设置编码:create table ()charset utf8;
        服务器端utf8/gbk 都可
        网页的话：mate:charset=utf8;
        
    索引：
    
        索引是数据的目录，能快速定位行数据的位置
        索引提高了查询的速度，降低了增删改的速度，并非越多越好
        一般在查询频率的列上加，而且在重复低列上加效果好
        
        key 普通索引
        unique key 唯一键
        primary key 主键索引
        fulltext 全文索引（在中文环境下几乎无效，一般用第三方解决方案：如sphinx）
        
        索引长度：建索引时，可以只索引列的前一部分的内容比如：前十个字符 key email(email(10));
        
        多列索引:就是把2列或者多列的值，看成一个整体，然后键索引
        
        冗余索引：在某个列上可能存在多个索引
        
        
        
        索引操作：
            
                查看索引：show index from goods\G
                删除索引：alter table 表名 drop index 索引名
                        或者：drop index 索引名 on 表名
                
                添加：alter table 表名 add [index \unqiue]索引名(列名)
                
                添加主键索引：alter table 表名 add primary key 列名
                删除主键索引：alter table 表名 drop primary key
                
        
    常用函数：
    

    一、数学函数

        abs(x)   返回x的绝对值
        bin(x)   返回x的二进制（oct返回八进制，hex返回十六进制）
        ceiling(x)   返回大于x的最小整数值
        exp(x)   返回值e（自然对数的底）的x次方
        floor(x)   返回小于x的最大整数值
        greatest(x1,x2,...,xn)返回集合中最大的值
        least(x1,x2,...,xn)      返回集合中最小的值
        ln(x)                    返回x的自然对数
        log(x,y)返回x的以y为底的对数
        mod(x,y)                 返回x/y的模（余数）
        pi()返回pi的值（圆周率）
        rand()返回０到１内的随机值,可以通过提供一个参数(种子)使rand()随机数生成器生成一个指定的值。
        round(x,y)返回参数x的四舍五入的有y位小数的值
        sign(x) 返回代表数字x的符号的值
        sqrt(x) 返回一个数的平方根
        truncate(x,y)            返回数字x截短为y位小数的结果

    二、聚合函数(常用于group by从句的select查询中)

        avg(col)返回指定列的平均值
        count(col)返回指定列中非null值的个数
        min(col)返回指定列的最小值
        max(col)返回指定列的最大值
        sum(col)返回指定列的所有值之和
        group_concat(col) 返回由属于一组的列值连接组合而成的结果

    三、字符串函数

        ascii(char)返回字符的ascii码值
        bit_length(str)返回字符串的比特长度
        concat(s1,s2...,sn)将s1,s2...,sn连接成字符串
        concat_ws(sep,s1,s2...,sn)将s1,s2...,sn连接成字符串，并用sep字符间隔
        insert(str,x,y,instr) 将字符串str从第x位置开始，y个字符长的子串替换为字符串instr，返回结果
        find_in_set(str,list)分析逗号分隔的list列表，如果发现str，返回str在list中的位置
        lcase(str)或lower(str) 返回将字符串str中所有字符改变为小写后的结果
        left(str,x)返回字符串str中最左边的x个字符
        length(s)返回字符串str中的字符数
        ltrim(str) 从字符串str中切掉开头的空格
        position(substr,str) 返回子串substr在字符串str中第一次出现的位置
        quote(str) 用反斜杠转义str中的单引号
        repeat(str,srchstr,rplcstr)返回字符串str重复x次的结果
        reverse(str) 返回颠倒字符串str的结果
        right(str,x) 返回字符串str中最右边的x个字符
        rtrim(str) 返回字符串str尾部的空格
        strcmp(s1,s2)比较字符串s1和s2
        trim(str)去除字符串首部和尾部的所有空格
        ucase(str)或upper(str) 返回将字符串str中所有字符转变为大写后的结果

    四、日期和时间函数

        curdate()或current_date() 返回当前的日期
        curtime()或current_time() 返回当前的时间
        date_add(date,interval int keyword)返回日期date加上间隔时间int的结果(int必须按照关键字进行格式化),如：selectdate_add(current_date,interval 6 month);
        date_format(date,fmt)  依照指定的fmt格式格式化日期date值
        date_sub(date,interval int keyword)返回日期date加上间隔时间int的结果(int必须按照关键字进行格式化),如：selectdate_sub(current_date,interval 6 month);
        dayofweek(date)   返回date所代表的一星期中的第几天(1~7)
        dayofmonth(date)  返回date是一个月的第几天(1~31)
        dayofyear(date)   返回date是一年的第几天(1~366)
        dayname(date)   返回date的星期名，如：select dayname(current_date);
        from_unixtime(ts,fmt)  根据指定的fmt格式，格式化unix时间戳ts
        hour(time)   返回time的小时值(0~23)
        minute(time)   返回time的分钟值(0~59)
        month(date)   返回date的月份值(1~12)
        monthname(date)   返回date的月份名，如：select monthname(current_date);
        now()    返回当前的日期和时间
        quarter(date)   返回date在一年中的季度(1~4)，如select quarter(current_date);
        week(date)   返回日期date为一年中第几周(0~53)
        year(date)   返回日期date的年份(1000~9999)

    一些示例：

        获取当前系统时间：select from_unixtime(unix_timestamp());
        select extract(year_month from current_date);
        select extract(day_second from current_date);
        select extract(hour_minute from current_date);
        返回两个日期值之间的差值(月数)：select period_diff(200302,199802);
        在mysql中计算年龄：
        select date_format(from_days(to_days(now())-to_days(birthday)),'%y')+0 as age from employee;
        这样，如果brithday是未来的年月日的话，计算结果为0。
        下面的sql语句计算员工的绝对年龄，即当birthday是未来的日期时，将得到负值。
        select date_format(now(), '%y') - date_format(birthday, '%y') -(date_format(now(), '00-%m-%d') <date_format(birthday, '00-%m-%d')) as age from employee

    五、加密函数

        aes_encrypt(str,key)  返回用密钥key对字符串str利用高级加密标准算法加密后的结果，调用aes_encrypt的结果是一个二进制字符串，以blob类型存储
        aes_decrypt(str,key)  返回用密钥key对字符串str利用高级加密标准算法解密后的结果
        decode(str,key)   使用key作为密钥解密加密字符串str
        encrypt(str,salt)   使用unixcrypt()函数，用关键词salt(一个可以惟一确定口令的字符串，就像钥匙一样)加密字符串str
        encode(str,key)   使用key作为密钥加密字符串str，调用encode()的结果是一个二进制字符串，它以blob类型存储
        md5()    计算字符串str的md5校验和
        password(str)   返回字符串str的加密版本，这个加密过程是不可逆转的，和unix密码加密过程使用不同的算法。
        sha()    计算字符串str的安全散列算法(sha)校验和
        
        示例：
        
        select encrypt('root','salt');
        select encode('xufeng','key');
        select decode(encode('xufeng','key'),'key');#加解密放在一起
        select aes_encrypt('root','key');
        select aes_decrypt(aes_encrypt('root','key'),'key');
        select md5('123456');
        select sha('123456');

    六、控制流函数

        mysql有4个函数是用来进行条件操作的，这些函数可以实现sql的条件逻辑，允许开发者将一些应用程序业务逻辑转换到数据库后台。
        mysql控制流函数：
        case when[test1] then [result1]...else [default] end如果testn是真，则返回resultn，否则返回default
        case [test] when[val1] then [result]...else [default]end  如果test和valn相等，则返回resultn，否则返回default
        if(test,t,f)   如果test是真，返回t；否则返回f
        ifnull(arg1,arg2) 如果arg1不是空，返回arg1，否则返回arg2
        nullif(arg1,arg2) 如果arg1=arg2返回null；否则返回arg1
        
        这些函数的第一个是ifnull()，它有两个参数，并且对第一个参数进行判断。如果第一个参数不是null，函数就会向调用者返回第一个参数；如果是null,将返回第二个参数。
        如：select ifnull(1,2), ifnull(null,10),ifnull(4*null,'false');
        nullif()函数将会检验提供的两个参数是否相等，如果相等，则返回null，如果不相等，就返回第一个参数。
        
        如：select nullif(1,1),nullif('a','b'),nullif(2+3,4+1);
        
        和许多脚本语言提供的if()函数一样，mysql的if()函数也可以建立一个简单的条件测试，这个函数有三个参数，第一个是要被判断的表达式，如果表达式为真，if()将会返回第二个参数，如果为假，if()将会返回第三个参数。
        如：selectif(1<10,2,3),if(56>100,'true','false');
        if()函数在只有两种可能结果时才适合使用。然而，在现实世界中，我们可能发现在条件测试中会需要多个分支。在这种情况下，mysql提供了case函数，它和php及perl语言的switch-case条件例程一样。
        case函数的格式有些复杂，通常如下所示：
        case [expression to be evaluated]
        when [val 1] then [result 1]
        when [val 2] then [result 2]
        when [val 3] then [result 3]
        ......
        when [val n] then [result n]
        else [default result]
        end
        
        这里，第一个参数是要被判断的值或表达式，接下来的是一系列的when-then块，每一块的第一个参数指定要比较的值，如果为真，就返回结果。所有的when-then块将以else块结束，当end结束了所有外部的case块时，如果前面的每一个块都不匹配就会返回else块指定的默认结果。如果没有指定else块，而且所有的when-then比较都不是真，mysql将会返回null。
        case函数还有另外一种句法，有时使用起来非常方便，如下：
        case
        when [conditional test 1] then [result 1]
        when [conditional test 2] then [result 2]
        else [default result]
        end
        
        这种条件下，返回的结果取决于相应的条件测试是否为真。
        
        示例：
        
        mysql>select case 'green'
             when 'red' then 'stop'
             when 'green' then 'go' end;
        select case 9 when 1 then 'a' when 2 then 'b' else 'n/a' end;
        select case when (2+2)=4 then 'ok' when(2+2)<>4 then 'not ok' end asstatus;
        select name,if((isactive = 1),'已激活','未激活') as result fromuserlogininfo;
        select fname,lname,(math+sci+lit) as total,
        case when (math+sci+lit) < 50 then 'd'
        when (math+sci+lit) between 50 and 150 then 'c'
        when (math+sci+lit) between 151 and 250 then 'b'
        else 'a' end
        as grade from marks;
        select if(encrypt('sue','ts')=upass,'allow','deny') as loginresultfrom users where uname = 'sue';#一个登陆验证

    七、格式化函数

        date_format(date,fmt)  依照字符串fmt格式化日期date值
        format(x,y)   把x格式化为以逗号隔开的数字序列，y是结果的小数位数
        inet_aton(ip)   返回ip地址的数字表示
        inet_ntoa(num)   返回数字所代表的ip地址
        time_format(time,fmt)  依照字符串fmt格式化时间time值
        其中最简单的是format()函数，它可以把大的数值格式化为以逗号间隔的易读的序列。
        
        示例：
        
        select format(34234.34323432,3);
        select date_format(now(),'%w,%d %m %y %r');
        select date_format(now(),'%y-%m-%d');
        select date_format(19990330,'%y-%m-%d');
        select date_format(now(),'%h:%i %p');
        select inet_aton('10.122.89.47');
        select inet_ntoa(175790383);

    八、类型转化函数

        为了进行数据类型转化，mysql提供了cast()函数，它可以把一个值转化为指定的数据类型。类型有：binary,char,date,time,datetime,signed,unsigned
        示例：
        
        select cast(now() as signed integer),curdate()+0;
        select 'f'=binary 'f','f'=cast('f' as binary);

    九、系统信息函数

        database()   返回当前数据库名
        benchmark(count,expr)  将表达式expr重复运行count次
        connection_id()   返回当前客户的连接id
        found_rows()   返回最后一个select查询进行检索的总行数
        user()或system_user()  返回当前登陆用户名
        version()   返回mysql服务器的版本
        
        示例：
        
        select database(),version(),user();
        selectbenchmark(9999999,log(rand()*pi()));#该例中,mysql计算log(rand()*pi())表达式9999999次。