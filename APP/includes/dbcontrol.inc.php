<?php
include '../includes/dbh.inc.php';

class dbcontrol extends Dbh
{
    protected function getLSTdata()
    {
        $sql = "SELECT * FROM dbcard";
        $result = $this->connect()->query($sql);
        $numRows = $result->num_rows;
        if($numRows > 0)
        {
            while($row = $result->fetch_assoc())
            {
                $data[] = $row;
            }
            return $data;
        }
    }
    public function getINSdata($name ,$cost ,$attack, $defense)
    {
		$sql = "INSERT INTO dbcard(cardname, cost, attack, defense) VALUES('$name', $cost, $attack, $defense)";
		$result = $this->connect()->query($sql);
		header ("Location: ../page/insert.php?insert=done");
	}
    public function getUDPdata($name ,$cost ,$attack, $defense)
    {
		if(!empty($cost))
		{
			$sql = "UPDATE dbcard
					SET cost = $cost
					WHERE cardname = '$name' ";
			$result = $this->connect()->query($sql);			
		}
		if(!empty($attack))
		{
			$sql = "UPDATE dbcard
					SET attack = $attack
					WHERE cardname = '$name' ";
			$result = $this->connect()->query($sql);		
		}
		if(!empty($defense))
		{
			$sql = "UPDATE dbcard
					SET defense = $defense
					WHERE cardname = '$name'";
			$result = $this->connect()->query($sql);			
        }
        header("Location: ../page/update.php?update=done");
	}
}
