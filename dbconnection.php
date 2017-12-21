<?php 
$host = "aussicouncil-production.c9pbg7so34fm.us-west-2.rds.amazonaws.com";
$username = "root";
$password = "root";
$database = "pickin";

$connection = new mysqli ($host, $username, $password, $database);

if ($connection ->connect_error)
{
	die ("connection failed" . $connection ->connect_error);
}


 ?>