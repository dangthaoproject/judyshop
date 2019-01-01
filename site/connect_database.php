<?php
$SEVER_NAME = "localhost";
$USER_NAME_MYSQL = "root";
$PASSWORD_MYSQL= "";
$DATABASE_NAME = "judyshopdb";
//$DATABASE_NAME = "mydatabase";
// Create connection
$connect=mysqli_connect($SEVER_NAME,$USER_NAME_MYSQL,$PASSWORD_MYSQL);
//Specifies the default character set - to show Vietnamese 
mysqli_set_charset($connect, 'UTF8');
//check connection
if ($connect)
{
	//select a database
	$connect->select_db($DATABASE_NAME) or die( "Unable to select database");
}else
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>