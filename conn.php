<?php
$servername="mysql:host=localhost;dbname=testsweet";
$user="root";
$pass="";
$opt=array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8 ");
try {
	$connect = new PDO($servername,$user,$pass,$opt);
	$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
	echo $e->getMessage();
}
?>