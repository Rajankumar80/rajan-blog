<?php
ob_start();
session_start();

$dbhost 	= "localhost:3306";
$dbuser 	= "root";
$dbpass 	= "root";
$dbname 	= "newblog";
$charset 	= "utf8";

$dbcon = mysqli_connect($dbhost, $dbuser, $dbpass);

if (!$dbcon) {
    die("Connection failed" . mysqli_connect_error());
}
mysqli_select_db($dbcon,$dbname);
mysqli_set_charset($dbcon,$charset);
