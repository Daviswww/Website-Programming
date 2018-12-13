<?php
	include_once 'include/dbh.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>table</title>
<style>
table, th, td {
    border: 2px solid black;
    border-collapse: collapse;
}
</style>
</head>
<body>
	<?php
		echo "<h1>List</h1>";
		$sql = "SELECT * FROM puck
				ORDER BY Points DESC;";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if($resultCheck > 0)
		{
			echo "<table>";
			echo "<tr>";
			echo "<td>Name</td>";
			echo "<td>Points</td>";
			echo "</tr>";
			while($row = mysqli_fetch_assoc($result))
			{
				echo "<tr>";
				echo "<td>" . $row['Name'] . "</td>";
				echo "<td>" . $row['Points'] . "</td>";
				echo "</tr>";
			}
			echo "</table>";
		}			
		mysqli_close($conn);
	?>
</body>
</html>