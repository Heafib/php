<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP 常量</title>
</head>
<body>
	<?php 
	// 常量类似变量，但是常量一旦被定义就无法更改或撤销定义。
// 	PHP 常量
// 常量是单个值的标识符（名称）。在脚本中无法改变该值。
// 有效的常量名以字符或下划线开头（常量名称前面没有 $ 符号）。
// 注释：与变量不同，常量贯穿整个脚本是自动全局的。
// 	设置 PHP 常量
// 如需设置常量，请使用 define() 函数 - 它使用三个参数：
// 首个参数定义常量的名称
// 第二个参数定义常量的值
// 可选的第三个参数规定常量名是否对大小写敏感。默认是 false。
// 下例创建了一个对大小写敏感的常量，值为 "Welcome to W3School.com.cn!"：
	// 定义对大小写敏感的常量
define('GREETING','Welcome to kansghiyu.cn!');
echo GREETING;
echo "<br />";
// 不会输出常量的值
echo greeting;
	 ?>
	 <?php 
	 // 下例创建了一个对大小写不敏感的常量，值为 "Welcome to W3School.com.cn!"：
	 // 定义对大小写敏感的常量
	 define('GREETING','Welcome to kansghiyu.cn!',true);
	 echo GREETING;
	 echo "<br />";
	 echo greeting;
	  ?>
</body>
</html>	