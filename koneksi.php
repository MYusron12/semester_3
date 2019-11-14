<?php
$user="root";
$server="localhost";
$password="";
$database="semester_3";

$rumah=mysql_connect($server,$user,$password);
if($rumah){
	echo 'Ok ';
}else{
	echo 'Cek Lagi';
}

$db=mysql_select_db($database);
if($db){
	echo 'Database Berhasil Terhubung ';
}else{
	echo 'Cek Lagi';
}
?>
