<?php
session_start();
class show extends dbcontrol  
{
    public function showALLdata()
    {
		$datas = $this->getLSTdata();
		//$len = sizeof($datas);
		echo "<table>";
		echo "<tr>";
		echo "<td>date</td>";
		echo "<td>name</td>";
		echo "<td>cost</td>";
		echo "<td>attack</td>";
		echo "<td>defense</td>";
		echo "</tr>";
		if(is_array($datas))
		{
			foreach($datas as $data)
			{
				echo "<tr>";
				echo "<td>" . $data['date'] . "</td>";
				echo "<td>" . $data['cardname'] . "</td>";
				echo "<td>" . $data['cost'] . "</td>";
				echo "<td>" . $data['attack'] . "</td>";
				echo "<td>" . $data['defense'] . "</td>";
				echo "</tr>";
			}
		}
        echo "</table>";
	}
	public function showUPDdata()
	{
		$datas = $this->getLSTdata();
		if(is_array($datas))
		{
			foreach($datas as $data)
			{
				if($_SESSION["name"] == $data['cardname'])
				{
					echo "now:" . $data['cardname'] . "/". $data['cost']."/". $data['attack']."/". $data['defense'];
				}
			}
		}
		$_SESSION["name"] = "";
	}
}
