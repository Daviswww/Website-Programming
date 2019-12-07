<?php
	include_once 'dbh.inc.php';

	$card_name 		= mysqli_real_escape_string($conn, $_POST['name']);

	if (empty($card_name))
	{
		header ("Location: ../database/delete.php?delete=empty");
		exit();
	} 
	else 
	{
		$sql = "SELECT * FROM cards WHERE card_name='$card_name'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck > 0) 
		{
			$sql = "delete from cards where card_name = '$card_name'";
			$result = mysqli_query($conn, $sql);
			header("Location: ../database/delete.php?delete=success");
			exit();
		}
		else 
		{
			header ("Location: ../database/delete.php?delete=notfound");
			exit();
		}
	}
