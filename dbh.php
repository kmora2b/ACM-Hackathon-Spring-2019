<?php
$dbServername = "162.232.156.77";
$dbUsername = "root";
$dbPassword = "skittle02";
$dbName = "mariadb";
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
//mysqli_close($conn);
