<?php 

$err = 0;

if(!isset($_GET['id']) || strlen(trim($_GET['id'])) == 0){
	$err++;
}

if($err == 0){
	$db = new PDO('mysql:dbname=homework_db;host=127.0.0.1', 'root', 'root');
	$db->query('set names utf8');

	// delete images from filesystem
	$query_images = $db->prepare("select * from gallery_images where id_gallery = :id");
	$query_images->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
	$query_images->execute();
	$res_images = $query_images->fetchAll(PDO::FETCH_ASSOC);

	foreach($res_images as $image){
		unlink($image['image']);
	}

	// delete images from the database (gallery_images table)
	$query_images_delete = $db->prepare("delete from gallery_images where id_gallery = :id");
	$query_images_delete->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
	$query_images_delete->execute();

	// delete gallery
	$query_gallery_delete = $db->prepare("delete from galleries where id = :id");
	$query_gallery_delete->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
	$query_gallery_delete->execute();
}

header('location: galleries_form.php');

?>