<?php 

$image_type = 'image/jpeg';
$image_size = 1024 * 1024 * 2;

$err = 0;

if(!isset($_POST['title']) || strlen(trim($_POST['title'])) == 0){$err++;}
if(!isset($_POST['content']) || strlen(trim($_POST['content'])) == 0){$err++;}
if(!isset($_POST['publish_date']) || strlen(trim($_POST['publish_date'])) == 0){$err++;}
if(!isset($_POST['id_category']) || strlen(trim($_POST['id_category'])) == 0){$err++;}
if(!isset($_POST['id']) || strlen(trim($_POST['id'])) == 0){$err++;}

$image = '';

if(isset($_FILES['image'])){
	if($_FILES['image']['size'] > $image_size || $_FILES['image']['type'] != $image_type){
		$image = $_POST['image'];

	}else {
		$image_prefix = rand(1000000000, 9999999999);
		$image_path = 'uploads/';
		$image = $image_path.$image_prefix.$_FILES['image']['name'];
		move_uploaded_file($_FILES['image']['tmp_name'], $image);
	}
}

if($err == 0){
	$db = new PDO('mysql:dbname=homework_db;host=127.0.0.1', 'root', 'root');
	$db->query('set names utf8');

	// $sql = 'insert into blogposts (title, content, publish_date, id_category, image) values (:title, :content, :publish_date, :id_category, :image)';
	$sql = 'update blogposts set title = :title, content = :content, publish_date = :publish_date, id_category = :id_category, image = :image where id = :id';

	$query = $db->prepare($sql);
	$query->bindValue(':title', $_POST['title']);
	$query->bindValue(':content', $_POST['content']);
	$query->bindValue(':publish_date', $_POST['publish_date']);
	$query->bindValue(':id_category', $_POST['id_category']);
	$query->bindValue(':image', $image);
	$query->bindValue(':id', $_POST['id']);

	$query->execute();
}

header('location: blogposts.php');

?>