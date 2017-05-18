<?php 

$err = 0;

if(!isset($_POST['gallery_name']) || strlen(trim($_POST['gallery_name'])) == 0){
	$err++;
}

if(!isset($_POST['gallery_description']) || strlen(trim($_POST['gallery_description'])) == 0){
	$err++;
}


if($err == 0){
	$db = new PDO('mysql:dbname=homework_db;host=127.0.0.1', 'root', 'root');
	$db->query('set names utf8');

	$sql = 'insert into galleries (gallery_name, gallery_description) values (:gallery_name, :gallery_description)';
	$query = $db->prepare($sql);
	$query->bindValue(':gallery_name', $_POST['gallery_name']);
	$query->bindValue(':gallery_description', $_POST['gallery_description']);
	$query->execute();
}

header('location: galleries_form.php');


?>