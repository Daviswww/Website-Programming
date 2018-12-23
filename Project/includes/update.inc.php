<?php
	include_once 'dbh.inc.php';
	$card_name 		= mysqli_real_escape_string($conn, $_POST['name']);
	$card_career 	= mysqli_real_escape_string($conn, $_POST['career']);
	$card_effect 	= mysqli_real_escape_string($conn, $_POST['effect']);
	$card_race 		= mysqli_real_escape_string($conn, $_POST['race']);
	$card_point 	= mysqli_real_escape_string($conn, $_POST['point']);
	$card_defense 	= mysqli_real_escape_string($conn, $_POST['defense']);
	$card_attack 	= mysqli_real_escape_string($conn, $_POST['attack']);
	if (empty($card_name))
	{
		header ("Location: ../database/update.php?update=empty");
		exit();
	} 
	else 
	{
		if(!empty($card_name))
		{
			$sql = "UPDATE cards
					SET card_career = '$card_career'
					WHERE card_name = '$card_name'";
			$result = mysqli_query($conn, $sql);	
			header("Location: ../database/update.php?update=1");		
		}
		if(!empty($card_effect))
		{
			$sql = "UPDATE cards
					SET card_effect = '$card_effect'
					WHERE card_name = '$card_name' ";
			$result = mysqli_query($conn, $sql);	
			header("Location: ../database/update.php?update=2");		
		}
		if(!empty($card_point))
		{
			$sql = "UPDATE cards
					SET card_point = $card_point
					WHERE card_name = '$card_name' ";
			$result = mysqli_query($conn, $sql);	
			header("Location: ../database/update.php?update=3");		
		}
		if(!empty($card_defense))
		{
			$sql = "UPDATE cards
					SET card_defense = $card_defense
					WHERE card_name = '$card_name' ";
			$result = mysqli_query($conn, $sql);	
			header("Location: ../database/update.php?update=4");		
		}
		if(!empty($card_attack))
		{
			$sql = "UPDATE cards
					SET card_attack = $card_attack
					WHERE card_name = '$card_name'";
			$result = mysqli_query($conn, $sql);	
			header("Location: ../database/update.php?update=5");		
		}
		exit();
	}


	

	