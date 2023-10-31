<?php 

ob_start();
session_start();


$username="******";
$password="*****";
$sunucu="localhost";
$database="******";
date_default_timezone_set('Europe/Istanbul');
$baglan=mysqli_connect($sunucu,$username,$password);
mysqli_query($baglan,"SET NAMES UTF8");
if(!$baglan)
{
	mysql_close();
	echo "hata";
	exit();
}
$db=mysqli_select_db($baglan,$database);
if(!$db){
	echo "hata";exit();
}



 ?>