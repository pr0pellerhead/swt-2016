<?php 

$err = 0;

if(!isset($_GET['id']) || strlen(trim($_GET['id']))){
	$err++;
}


if($err == 0){
	$db = new PDO('mysql:dbname=homework_db;host=127.0.0.1', 'root', 'root');
	$db->query('set names utf8');

	$sql = 'delete from galleries where id = :id';
}

?>