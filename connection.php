<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "loginy";

if (!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname))
{
	die("Unable to connect");
}

?>