<?php
	include_once 'include/dbh.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>DataBaseView</title>
</head>
<body>

	<?php
		$sql = "SELECT * FROM dice ;";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);

		if($resultCheck > 0)
		{
			while($row = mysqli_fetch_assoc($result))
			{
				echo $row['user_first'] . "  ". $row['user_last'] . "<br>";
			}
		}
	?>

</body>
</html>