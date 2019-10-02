<?php
$host = 'localhost';
$uname = 'root';
$password = '';
$dbname = 'school';


  $con = mysqli_connect($host, $uname, $password, $dbname);


if (!$con) {
	echo "Error";
}
session_start();
?>
