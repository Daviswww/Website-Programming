<?php
include '../includes/dbcontrol.inc.php';

if(empty($_GET['name']) ||empty($_GET['cost']) ||empty($_GET['attack']) ||empty($_GET['defense']) )
{
	header ("Location: ../page/insert.php?insert=empty");
}
else
{
	$name = $_GET['name'];
	$cost = $_GET['cost'];
	$attack = $_GET['attack'];
	$defense = $_GET['defense'];
	$get = new dbcontrol();
	$get->getINSdata($name ,$cost ,$attack, $defense);
}
