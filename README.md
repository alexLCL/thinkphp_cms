# thinkphp_cms
这是用thinkphp搭建的一个商品信息管理系统
	thinkphp版本为3.1.3
	开发环境用wamp和xampp测试都成功
	
# 使用教程
1.搭建环境
	这个就不介绍了
2.配置数据库
	项目中包含了mysql的备份文件，直接还原即可。
		文件位置：thinkphp_cms/file/demo.sql.zip    还原的数据库名字为demo
		同目录下的“数据字典.xlsx"文件是创建数据库时的记录，也可以对照着自己创建数据库
3.数据库登录密码
	如果出现"Access denied for user 'root'@'localhost' (using password: YES)"的问题，在源码中修改数据库的密码
		文件位置：thinkphp_cms/admin/Conf/config.php

		
