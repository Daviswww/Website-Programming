<!DOCTYPE html>
<html>
<head>
	<title>Module</title>
</head>
<body>
	<?php 
		$a = $_GET["a"];
		$b = $_GET["b"];
		$c = $_GET["c"];

		echo "A = " . $a . "<br>";
		echo "B = " . $b . "<br>";
		echo "C = " . $c . "<br>";
		echo "ABC相加等於: ";
		$ans = $a + $b + $c;
		echo $ans;
	 ?>
</body>
</html>