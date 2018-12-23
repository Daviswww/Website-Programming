<?php

if (isset($_POST['submit'])) 
{
	
	include_once 'dbh.inc.php';

	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

	//Error handlers
	//Check for empty fields
	if (empty($name)  || empty($email) || empty($uid) || empty($pwd)) 
	{
		header ("Location: ../signup.php?signup=empty");
		exit();
	} 
	else 
	{
		//Check if input characters are valid
		if ( !preg_match("/^[a-zA-Z]*$/", $name)) 
		{
			header ("Location: ../signup.php?signup=invalid");
			exit();
		} 
		else 
		{
			//Check if email is valid
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
			{
				header ("Location: ../signup.php?signup=email");
				exit();
			} 
			else 
			{
				$sql = "SELECT * FROM users WHERE user_uid='$uid'";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) 
				{
					header ("Location: ../signup.php?signup=usertaken");
					exit();
				}
				else 
				{
					//Hashing the password
					$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
					//Insert the user into the database
					$sql = "INSERT INTO users (user_name, user_email, user_uid, user_pwd) VALUES ('$name', '$email', '$uid', '$hashedPwd');";
					mysqli_query($conn, $sql);
					header ("Location: ../signup.php");
					exit();
				}
			}
		}
	}
} 
else 
{
	header ("Location: ../signup.php");
	exit();
}