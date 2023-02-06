<?php
$host = "sqldatabase.com";
$user = "sql3454535";
$password = "kharaabaadmi";
$db_name = "sql12595992";
$clean = mysqli_connect($host, $user, $password, $db_name,);
if (mysqli_connect_errno()) {
	die("Failed to Connect with Mysql" . mysqli_connect_error());
}
?>
