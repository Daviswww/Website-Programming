<?php
session_start();
include '../includes/dbcontrol.inc.php';

if(empty($_GET['name']) ||empty($_GET['cost']) ||empty($_GET['attack']) ||empty($_GET['defense']) )
{
	header ("Location: ../page/update.php?update=empty");
}
else
{
	$_SESSION["name"] = $_GET['name'];
	$name = $_GET['name'];
	$cost = $_GET['cost'];
	$attack = $_GET['attack'];
	$defense = $_GET['defense'];
	$udp = new dbcontrol();
	$udp->getUDPdata($name ,$cost ,$attack, $defense);
}
