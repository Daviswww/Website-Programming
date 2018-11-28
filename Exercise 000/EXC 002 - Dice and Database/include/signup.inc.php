<?php
	include_once 'dbh.inc.php';

	$first = mysqli_real_escape_string($conn, $_POST['first']);
	$last = mysqli_real_escape_string($conn, $_POST['point']);

	$sql = "INSERT INTO dice (user_first, user_last)
			VALUES ('$first', '$last');";
	$result = mysqli_query($conn, $sql);

	header("Location: ../Dice.php?signup=success");