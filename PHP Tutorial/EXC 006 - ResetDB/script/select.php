<?php
	include_once '../include/dbh.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" /> 
	<title>DataBaseView</title>
</head>
<body>
<input type="button" value="Go back!" onclick="window.location.href='../index.html'" /><br>
	<?php
		$str = $_POST["str"];
		$sql = "SELECT * FROM users;";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if($resultCheck > 0)
		{
			while($row = mysqli_fetch_assoc($result))
			{
				$TryStrpos=strpos($row['Log_path'],$str);
				if(!$TryStrpos)
				{
					continue;
				}
				else
				{
					echo "Username: ".$row['user_uid']."<br>".
						 "Password: ".$row['user_pwd']."<br>";
				}
			}
		}
	?>
</body>
</html>