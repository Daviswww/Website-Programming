<?php
include '../include/dbh.inc.php';

class Dbget extends Dbh
{
    public function getINSdata($topic, $msg)
    {
		$add = "cmd";
		$sql = "INSERT INTO $topic($add) VALUES('$msg')";
		$result = $this->connect()->query($sql);
		//INSERT INTO car(cmd) VALUES('OFF')
		//header ("Location: ../page/insert.php?insert=done");
	}

	public function getLASTdata($tb){
		$sql = "SELECT * FROM $tb ORDER BY id DESC LIMIT 1";
		$result = $this->connect()->query($sql);

		while($row = $result->fetch_assoc()){
			return $row;
		}	
	}
}