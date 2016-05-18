<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP 5 echo 和 print 语句</title>
</head>
<body>
	<?php 
// 	PHP echo 和 print 语句
// echo 和 print 之间的差异：
// echo - 能够输出一个以上的字符串
// print - 只能输出一个字符串，并始终返回 1
// 提示：echo 比 print 稍快，因为它不返回任何值。

// 	PHP echo 语句
// echo 是一个语言结构，有无括号均可使用：echo 或 echo()。
// 显示字符串
// 下面的例子展示如何用 echo 命令来显示不同的字符串（同时请注意字符串中能包含 HTML 标记）：
	echo "<h2>PHP 很有趣！</h2>";
	echo "Hello World!<br>";
	echo "我计划学习 PHP！<br>";
	echo "这段话","由","多个","字符串","串接而成。<br>";
// 	显示变量
// 下面的例子展示如何用 echo 命令来显示字符串和变量：
	$txt1 = "Learn PHP";
	$txt2 = "Kangshiyu.cn";
	$cars = array("Volvo","BMW","SAAB");
	echo $txt1;
	echo "<br>";
	echo "Study PHP at $txt2";
	echo "<br>";
	echo "My car is a {$cars[0]}";
// 	PHP print 语句
// print 也是语言结构，有无括号均可使用：print 或 print()。
// 显示字符串
// 下面的例子展示如何用 print 命令来显示不同的字符串（同时请注意字符串中能包含 HTML 标记）
	print "<h2>PHP is fun!</h2>";
	print "Hello world!<br>";
	print "I'm about to learn PHP!<br>";
// 	显示变量
// 下面的例子展示如何用 print 命令来显示字符串和变量：
	$txt1 = "Learn PHP";
	$txt2 = "Kangshiyu.cn";
	$cars = array("Volvo","BMW","SAAB");
	
	print $txt1;
	print "<br>";
	print "Study PHP at $txt2";
	print "<br>";
	print "My car is a {$cars[0]}";
	 ?>
</body>
</html>