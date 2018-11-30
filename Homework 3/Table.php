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
		$op = $_POST['op'];
		if($op == 'list')
		{
			echo "<h1>List</h1>";
			$sql = "SELECT * FROM form ;";
			$result = mysqli_query($conn, $sql);
			$resultCheck = mysqli_num_rows($result);
			if($resultCheck > 0)
			{
				echo "<table>";
				echo "<tr>";
				echo "<td>Gender</td>";
				echo "<td>Age</td>";
				echo "<td>Occupation</td>";
				echo "<td>Income</td>";
				echo "<td>Survey Results</td>";
				echo "</tr>";
				while($row = mysqli_fetch_assoc($result))
				{
					echo "<tr>";
					echo "<td>" . $row['gender'] . "</td>";
					echo "<td>" . $row['age'] . "</td>";
					echo "<td>" . $row['occupation'] . "</td>";
					echo "<td>" . $row['income'] . "</td>";
					echo "<td>".	
							$row['drink'] 	. " " . 
							$row['bread'] 	. " " .
			 			  	$row['seafood'] . " " .
			 			  	$row['fruit'] 	. " " .
			 			  	$row['music'] 	. " " .
			 			  	$row['ball'] 	. " " .
			 			  	$row['clothes'] . " " .
			 			  	$row['car'] 	. " " .
			 			  	$row['shoes'] 	. " " . 
			 			  	$row['colour'] 	. " " .
					 	"</td>";
					echo "</tr>";
				}
				echo "</table>";
			}			
		}
		else if($op == 'percentage')
		{
			echo "<h1>Percentage</h1>";
			$name = array("drink", "bread", "seafood", "fruit", "music", "ball", "clothes", "car", "shoes", "colour");
			$sql=  "SELECT count(*) as user_id
					FROM form";
			$result=mysqli_query($conn,$sql);
			$row=mysqli_fetch_assoc($result);
			$total = $row['user_id'];
			echo "<table>";
			echo "<tr>";
			echo "<td>  </td>";
			echo "<td colspan=\"4\">Choice</td>";
			echo "</tr>";	
			for($j = 0; $j < 10; $j++)
			{
				for($i = 1; $i <= 4; $i++)
				{
					$sql=  "SELECT count(*) as $name[$j]
						   	FROM form 
							WHERE $name[$j]=$i";
					$result=mysqli_query($conn,$sql);
					if($result)
					{
						while($row=mysqli_fetch_assoc($result))
						{
							$ary[$i] = $row[$name[$j]];
						}     
					}
				}
				echo "<tr> <td>" . 
				($j + 1) .".</td><td>" . 
				round(($ary[1]/$total) * 100) . "%</td><td>" .
				round(($ary[2]/$total) * 100) . "%</td><td>" . 
				round(($ary[3]/$total) * 100) . "%</td><td>" . 
				round(($ary[4]/$total) * 100) . "%</td></tr>";				
			}
			echo "</table>";
		}
		else if($op == 'statistics')
		{
			echo "<h1>Statistics</h1>";
			$gen = array("Female", "Male");
			echo "<table>";
			echo "<tr>";
			echo "<td colspan=\"2\">Total participants </td>";
			for($i = 0; $i < 2; $i++)
			{
				$sql=  "SELECT count(*) as gender
						FROM form
						WHERE gender='$gen[$i]'";
				$result=mysqli_query($conn,$sql);
				if($result)
				{
					while($row=mysqli_fetch_assoc($result))
					{
						echo "<tr><td> " . $gen[$i] . "</td><td>";
						echo $row['gender'];
						echo "</td></tr>";
					}     
				}
			}
			echo "</tr>";
			echo "</table><br>";

			$ageRange = array(0, 20, 30, 40, 50, 100000000000);
			echo "<table>";
			echo "<tr>";
			echo "<td >Age Group</td>";
			echo "<td >Count</td>";
			for($i = 0, $j = 1; $i < 5; $i++, $j++)
			{
				$sql=  "SELECT count(*) as age
						FROM form
						WHERE age >= $ageRange[$i] AND age <$ageRange[$j]";
				$result=mysqli_query($conn,$sql);
				if($result)
				{
					while($row=mysqli_fetch_assoc($result))
					{
						echo "<tr><td>" . $ageRange[$i] . "≤  age ";
						if($i != 4)
						{
							echo "< " . $ageRange[$j] ."</td><td>";
						}
						else
						{
							echo "</td><td>";
						}
						echo $row['age'];
						echo "</td></tr>";
					}     
				}
			}
			echo "</tr>";
			echo "</table><br>";

			$incomeRange = array(0, 20000, 30000, 40000, 50000, 100000000000);
			echo "<table>";
			echo "<tr>";
			echo "<td >Income</td>";
			echo "<td >Count</td>";
			for($i = 0, $j = 1; $i < 5; $i++, $j++)
			{
				$sql=  "SELECT count(*) as income
						FROM form
						WHERE income >= $incomeRange[$i] AND income <$incomeRange[$j]";
				$result=mysqli_query($conn,$sql);
				if($result)
				{
					while($row=mysqli_fetch_assoc($result))
					{
						echo "<tr><td>" . ($incomeRange[$i]/1000) . "K ≤  income ";
						if($i != 4)
						{
							echo "< " . ($incomeRange[$j]/1000) ."K </td><td>";
						}
						else
						{
							echo "</td><td>";
						}
						echo $row['income'];
						echo "</td></tr>";
					}     
				}
			}
			echo "</tr>";
			echo "</table><br>";		
		}
		mysqli_close($conn);
	?>
</body>
</html>
