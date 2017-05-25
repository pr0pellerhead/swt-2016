<?php 
// blogposts_delete.php

if(isset($_GET['id']) && strlen($_GET['id']) > 0){

	$db = new PDO('mysql:dbname=homework_db;host=127.0.0.1', 'root', 'root');
	$db->query('set names utf8');

	$sql_select = 'select image from blogposts where id = :id';
	$query_select = $db->prepare($sql_select);
	$query_select->bindValue(':id', $_GET['id']);
	$query_select->execute();
	$res = $query_select->fetchAll(PDO::FETCH_ASSOC);

	unlink($res[0]['image']);

	$sql_delete = 'delete from blogposts where id = :id';
	$query_delete = $db->prepare($sql_delete);
	$query_delete->bindValue(':id', $_GET['id']);
	$query_delete->execute();
}

header('location: blogposts.php');

?>