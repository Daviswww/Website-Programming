<?php
	include_once 'dbh.inc.php';
	$card_uid 		= mysqli_real_escape_string($conn, $_POST['uid']);
	$card_name 		= mysqli_real_escape_string($conn, $_POST['name']);
	$card_career 	= mysqli_real_escape_string($conn, $_POST['career']);
	$card_effect 	= mysqli_real_escape_string($conn, $_POST['effect']);
	$card_race 		= mysqli_real_escape_string($conn, $_POST['race']);
	$card_point 	= mysqli_real_escape_string($conn, $_POST['point']);
	$card_defense 	= mysqli_real_escape_string($conn, $_POST['defense']);
	$card_attack 	= mysqli_real_escape_string($conn, $_POST['attack']);
	if (empty($card_uid)  || empty($card_name) || empty($card_career) || 
		empty($card_point) || empty($card_defense)|| empty($card_attack)) 
	{
		header ("Location: ../database/insert.php?insert=empty");
		exit();
	} 
	else 
	{
		$sql = "INSERT INTO cards (card_uid, card_name, card_career, card_effect, card_race, card_point, card_defense, card_attack)
				VALUES ('$card_uid', '$card_name', '$card_career', '$card_effect', '$card_race', $card_point, $card_defense, $card_attack);";
		$result = mysqli_query($conn, $sql);	
		header("Location: ../database/insert.php?insert=success");		
	}


	

	