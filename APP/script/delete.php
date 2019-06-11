<?php

include '../includes/dbh.inc.php';

class get extends Dbh
{

    public function getINSdata($temperature ,$humidity ,$windspeed)
    {
		$sql = "INSERT INTO dbsever(temperature, humidity, windspeed) VALUES($temperature, $humidity, $windspeed)";
		$result = $this->connect()->query($sql);
		header ("Location: ../index.php?insert=done");
    }
}

if(empty($_GET['temperature']) ||empty($_GET['humidity']) ||empty($_GET['windspeed']))
{
	header ("Location: ../index.php?insert=empty");
}
else
{
	$temperature = $_GET['temperature'];
	$humidity = $_GET['humidity'];
	$windspeed = $_GET['windspeed'];
	$get = new get();
	$get->getINSdata($temperature ,$humidity ,$windspeed);
}

