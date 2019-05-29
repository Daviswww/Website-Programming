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
		$sql = "SELECT * FROM Log;";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		$count = 1;
		if($resultCheck > 0)
		{
			while($row = mysqli_fetch_assoc($result))
			{
				if($count > 10)
				{
					break;
				}
				$TryStrpos=strpos($row['Log_path'],$str);
				if(!$TryStrpos)
				{
					continue;
				}
				else
				{
					echo 	"第" . $count . "筆" .
							" ID: " . $row['Log_id'] . 
							" Path: " . $row['Log_path']. 
							 "<br>";
					$count++;
				}
			}
		}
	?>
</body>
</html>