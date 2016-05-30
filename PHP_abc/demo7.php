<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP 运算符</title>
</head>
<body>
	<?php 
// 	本节展示了可用于 PHP 脚本中的各种运算符.
// PHP 算数运算符
// 运算符	名称	     例子	    结果
// +	    加法	     $x + $y	$x 与 $y 求和
// -	    减法	     $x - $y	$x 与 $y 的差数
// *	    乘法	     $x * $y	$x 与 $y 的乘积
// /	    除法	     $x / $y	$x 与 $y 的商数
// %	    模数	     $x % $y	$x 除 $y 的余数
// 下例展示了使用不同算数运算符的不同结果：
	$x = 10;
	$y = 6;

	echo ($x + $y);
	echo "<br />";
	echo ($x - $y);
	echo "<br />";
	echo ($x * $y);
	echo "<br />";
	echo ($x / $y);
	echo "<br />";
	echo ($x % $y);
	echo "<br />";
	 ?>
	 <?php 
// 	 HP 赋值运算符
// PHP 赋值运算符用于向变量写值。
// PHP 中基础的赋值运算符是 "="。这意味着右侧赋值表达式会为左侧运算数设置值。
// 赋值	    等同于	    描述
// x = y	x = y	    右侧表达式为左侧运算数设置值。
// x += y	x = x + y	加
// x -= y	x = x - y	减
// x *= y	x = x * y	乘
// x /= y	x = x / y	除
// x %= y	x = x % y	模数
// 下例展示了使用不同赋值运算符的不同结果：
	 $x = 10;
	 echo $x;
	 echo "<br />";
 
	 $y = 20;
	 $y += 100;
	 echo $y;
	 echo "<br />";

	 $z = 50;
	 $z -= 25;
	 echo $z;
	 echo "<br />";

	 $i = 5;
	 $i *= 6;
	 echo $i;
	 echo "<br />";

	 $j = 10;
	 $j /= 5;
	 echo $j;
	 echo "<br />";

	 $k = 15;
	 $k %= 4;
	 echo $k;;
	 echo "<br />"; 

	  ?>
	  <?php 
// 	  PHP 字符串运算符
// 运算符	名称	       例子	                                         结果
// .	    串接	       $txt1 = "Hello"   $txt2 = $txt1 . " world!"	 现在 $txt2 包含 "Hello world!"
// .=	    串接赋值	   $txt1 = "Hello"   $txt1 .= " world!"	         现在 $txt1 包含 "Hello world!"
// 下例展示了使用字符串运算符的结果：
	  $a = "Hello";
	  $b = $a . "world!";
	  echo $b; //输出 Hello world！

	  echo "<br />";

	  $x = "Hello";
	  $x .= "world!";
	  echo $x; //输出 Hello world!
	  echo "<br />";

	   ?>
	   <?php 
// PHP 递增/递减运算符
// 运算符	名称	    描述
// ++$x	    前递增	$x 加一递增，然后返回 $x
// $x++	    后递增	返回 $x，然后 $x 加一递增
// --$x	    前递减	$x 减一递减，然后返回 $x
// $x--	    后递减	返回 $x，然后 $x 减一递减
// 下例展示了使用不同递增/递减运算符的不同结果：
	   $x = 10;
	   echo ++$x;
	   echo "<br />";

	   $y = 10;
	   echo $y++;
	   echo "<br />";

	   $z = 5;
	   echo --$z;
	   echo "<br />";

	   $i = 5;
	   echo $i--;
	   echo "<br />";
	    ?>
	    <?php 
// 	    PHP 比较运算符
// PHP 比较运算符用于比较两个值（数字或字符串）：
// 运算符	名称	            例子	        结果
// ==	    等于	            $x == $y	如果 $x 等于 $y，则返回 true。
// ===	    全等（完全相同）	$x === $y	如果 $x 等于 $y，且它们类型相同，则返回 true。
// !=	    不等于	        $x != $y	如果 $x 不等于 $y，则返回 true。
// <>	    不等于	        $x <> $y	如果 $x 不等于 $y，则返回 true。
// !==	    不全等（完全不同）	$x !== $y	如果 $x 不等于 $y，且它们类型不相同，则返回 true。
// >	    大于	            $x > $y	    如果 $x 大于 $y，则返回 true。
// <	    大于	            $x < $y	    如果 $x 小于 $y，则返回 true。
// >=	    大于或等于	    $x >= $y	如果 $x 大于或者等于 $y，则返回 true.
// <=	    小于或等于	    $x <= $y	如果 $x 小于或者等于 $y，则返回 true。
// 下例展示了使用某些比较运算符的不同结果：
	    $x = 100;
	    $y = "100";

	    var_dump($x == $y);// 因为值相等，返回 true
	    echo "<br />";
	    var_dump($x === $y);// 因为类型不等，返回 false
	    echo "<br />";
	    var_dump($x != $y);// 应为值相等，返回 false
	    echo "<br />";
	    var_dump($x !== $y);// 因为类型不相等，返回 true
	    echo "<br />";

	    $a = 50;
	    $b = 90;

	    var_dump($a > $b);
	    echo "<br />";
	    var_dump($a < $b);
	    echo "<br />";

	     ?>
	     <?php 
// 	     PHP 逻辑运算符
// 运算符	名称	    例子	        结果
// and	    与	    $x and $y	如果 $x 和 $y 都为 true，则返回 true。
// or	    或	    $x or $y	如果 $x 和 $y 至少有一个为 true，则返回 true。
// xor	    异或	    $x xor $y	如果 $x 和 $y 有且仅有一个为 true，则返回 true。
// &&	    与	    $x && $y	如果 $x 和 $y 都为 true，则返回 true。
// ||	    或	    $x || $y	如果 $x 和 $y 至少有一个为 true，则返回 true。
// !	    非	    !$x	        如果 $x 不为 true，则返回 true。
// PHP 数组运算符
// PHP 数组运算符用于比较数组：
// 运算符	名称	    例子	        结果
// +	    联合	    $x + $y	    $x 和 $y 的联合（但不覆盖重复的键）
// ==	    相等	    $x == $y	如果 $x 和 $y 拥有相同的键/值对，则返回 true。
// ===	    全等	    $x === $y	如果 $x 和 $y 拥有相同的键/值对，且顺序相同类型相同，则返回 true。
// !=	    不相等	$x != $y	如果 $x 不等于 $y，则返回 true。
// <>	    不相等	$x <> $y	如果 $x 不等于 $y，则返回 true。
// !==	    不全等	$x !== $y	如果 $x 与 $y 完全不同，则返回 true。
// 下例展示了使用不同数组运算符的不同结果：
		$x = array("a" => "red","b" => "green");
		$y = array("c" => "blue","d" => "yellow");
		$z = $x + $y; //$x 和 $y 的联合
		var_dump($z);
		echo "<br />";
		var_dump($x == $y);
		echo "<br />";
		var_dump($x === $y);
		echo "<br />";
		var_dump($x != $y);
		echo "<br />";
		var_dump($x <> $y);
		echo "<br />";
		echo var_dump($x !== $y);
		echo "<br />";

	      ?>
</body>
</html>