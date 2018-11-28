<?php
	include_once 'dbh.inc.php';
	$gender 		= mysqli_real_escape_string($conn, $_POST['gender']);
	$age 			= mysqli_real_escape_string($conn, $_POST['age']);
	$occupation 	= mysqli_real_escape_string($conn, $_POST['occupation']);
	$income 		= mysqli_real_escape_string($conn, $_POST['income']);
	$drink 			= mysqli_real_escape_string($conn, $_POST['drink']);
	$bread 			= mysqli_real_escape_string($conn, $_POST['bread']);
	$seafood 		= mysqli_real_escape_string($conn, $_POST['seafood']);
	$fruit 			= mysqli_real_escape_string($conn, $_POST['fruit']);
	$music 			= mysqli_real_escape_string($conn, $_POST['music']);
	$ball 			= mysqli_real_escape_string($conn, $_POST['ball']);
	$clothes 		= mysqli_real_escape_string($conn, $_POST['clothes']);
	$car 			= mysqli_real_escape_string($conn, $_POST['car']);
	$shoes 			= mysqli_real_escape_string($conn, $_POST['shoes']);
	$colour 		= mysqli_real_escape_string($conn, $_POST['colour']);

	$sql = "INSERT INTO form (gender, age, occupation, income, drink, bread, seafood, fruit, music, ball, clothes, car, shoes, colour)
			VALUES ('$gender', $age, '$occupation', $income, $drink, $bread, $seafood, $fruit, $music, $ball, $clothes, $car, $shoes, $colour);";

	$result = mysqli_query($conn, $sql);

	header("Location: ../View.php?signup=success");