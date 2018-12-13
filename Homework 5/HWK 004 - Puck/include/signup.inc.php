<?php
	include_once 'dbh.inc.php';
	$Name		= mysqli_real_escape_string($conn, $_POST['name']);
	$Points		= mysqli_real_escape_string($conn, $_POST['point']);

	$sql = "INSERT INTO puck (Name, Points)
			VALUES ('$Name', $Points);";

	$result = mysqli_query($conn, $sql);

	header("Location: ../View.php?signup=success");