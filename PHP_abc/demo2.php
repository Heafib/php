<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP 变量</title>
</head>
<body>
	<?php 
		$x = 5;
		$z = 6;
		$z = $x + $z;
		echo $z."<br>";

		$txt = "Hello World!";
		$x = 5;
		$y = 10.5;

		echo $txt."<br>";
		echo $x."<br>";
		echo $y."<br>";
	 ?>
	 <?php 
	 	// 	PHP 变量作用域
// 在 PHP 中，可以在脚本的任意位置对变量进行声明。
// 变量的作用域指的是变量能够被引用/使用的那部分脚本。
// PHP 有三种不同的变量作用域：
// local（局部）
// global（全局）
// static（静态）
// Local 和 Global 作用域
// 函数之外声明的变量拥有 Global 作用域，只能在函数以外进行访问。
// 函数内部声明的变量拥有 LOCAL 作用域，只能在函数内部进行访问。
// 下面的例子测试了带有局部和全局作用域的变量：
	 $x = 5; // global scope

	 function myTest()
	 {
	 	$y = 10; // local scope
	 	echo "<p>在函数内部测试变量：</p>";
	 	echo "变量x是：$x";
	 	echo "<br>";
	 	echo "变量y是：$y";
	 }

	 myTest();

	 echo "<p>在函数之外测试变量</p>";
	 echo "变量x是：$x";
	 echo "<br>";
	 echo "变量y是：$y";
	 echo "<br>";
	 echo "因为之前声明过变量y,所以不准确！";
	  ?>
	  <?php 
// 	  	PHP global 关键词
// global 关键词用于访问函数内的全局变量。
// 要做到这一点，请在（函数内部）变量前面使用 global 关键词：
	  $x = 5;
	  $y = 10;

	  function myTest1()
	  {
	  	global $x,$y;
	  	$y = $x + $y;
	  	//or
	  	//$GLOBALS['y']=$GLOBALS['x']+$GLOBALS['y'];
	  }

	  myTest1(); //运行函数
	  echo "<br>".$y."<br>";

	   ?>
	   <?php 
// 	   	PHP static 关键词
// 通常，当函数完成/执行后，会删除所有变量。不过，有时我需要不删除某个局部变量。实现这一点需要更进一步的工作。
// 要完成这一点，请在您首次声明变量时使用 static 关键词：
	   function myTest2()
	   {
	   		static $x = 0;
	   		echo $x;
	   		$x++;
	   }

	   myTest2();
	   echo "<br>";
	   myTest2();
	   echo "<br>";
	   myTest2();
	   echo "<br>";
	   myTest2();
	   echo "<br>";
	   myTest2();
	   echo "<br>";
// 	   然后，每当函数被调用时，这个变量所存储的信息都是函数最后一次被调用时所包含的信息。
// 注释：该变量仍然是函数的局部变量。
	    ?>
</body>
</html>