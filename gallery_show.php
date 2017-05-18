<?php 

$err = 0;
$res = [];

if(!isset($_GET['id']) || strlen(trim($_GET['id']))){
	$err++;
}

if($err > 0){
	$db = new PDO('mysql:dbname=homework_db;host=127.0.0.1', 'root', 'root');
	$db->query('set names utf8');

	$sql = 'select * from gallery_images where id_gallery = :id';
	$query = $db->prepare($sql);
	$query->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
	$query->execute();

	$res = $query->fetchAll(PDO::FETCH_ASSOC);
}
?>

<style>
	ul{
		width: 100%;
		list-style: none;
	}

		ul li {
			width: 500px;
			height: 500px;
			float: left;
			box-sizing: border-box;
			padding: 20px;
			overflow: hidden;
		}

			ul li img {
				width: 100%;
			}
</style>

<ul>
	<?php foreach($res as $row){ ?>
	<li>
		<img src="<?=$row['image']?>">
	</li>
	<?php } ?>
</ul>