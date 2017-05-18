<?php 

$err = 0;

if(!isset($_POST['id_gallery']) || strlen(trim($_POST['id_gallery'])) == 0){
	$err++;
}

$allowed_type = 'image/jpeg';
$allowed_size = 2 * 1024 * 1024;
$number_of_images = count($_FILES['images']['name']);

if($number_of_images == 0){
	$err++;
}

for($i = 0; $i < $number_of_images; $i++){
	if($_FILES['images']['size'][$i] > $allowed_size){
		$err++;
		break;
	}

	if($_FILES['images']['type'][$i] != $allowed_type){
		$err++;
		break;
	}

	if($_FILES['images']['error'][$i] > 0){
		$err++;
		break;
	}
}

$upload_path = 'gallery/';

if($err == 0){
	$db = new PDO('mysql:dbname=homework_db;host=127.0.0.1', 'root', 'root');
	$db->query('set names utf8');
	$sql = 'insert into gallery_images (id_gallery, image, image_description) values (:id_gallery, :image, :image_description)';

	for($i = 0; $i < $number_of_images; $i++){
		$destination = $upload_path.rand(1000000000, 9999999999).$_FILES['images']['name'][$i];
		move_uploaded_file($_FILES['images']['tmp_name'][$i], $destination);

		$query = $db->prepare($sql);
		$query->bindValue(':id_gallery', $_POST['id_gallery']);
		$query->bindValue(':image', $destination);
		$query->bindValue(':image_description', '');
		$query->execute();
	}
}

header('location: galleries_form.php');


?>