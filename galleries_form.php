<?php 

$db = new PDO('mysql:dbname=homework_db;host=127.0.0.1', 'root', 'root');
$db->query('set names utf8');

$sql = 'select * from galleries';
$query = $db->query($sql);
$res = $query->fetchAll(PDO::FETCH_ASSOC);

?>
<html>
	<head>
		
	</head>
	<body>
		<form action="gallery_add.php" method="post">
			<input type="text" name="gallery_name" placeholder="gallery name">
			<textarea name="gallery_description" placeholder="gallery description"></textarea>
			<button type="submit">Create Gallery</button>
		</form>

		<hr/>

		<form action="gallery_images_add.php" method="post" enctype="multipart/form-data">
			<input type="file" multiple name="images[]">
			<select name="id_gallery">
				<?php foreach($res as $row){ ?>
				<option value="<?=$row['id']?>">
				<?=$row['gallery_name'] ?>
				</option>
				<?php } ?>
			</select>
			<button type="submit">Upload Images</button>
		</form>

		<hr/>

		<table width="50%" border="1">
			<tr>
				<th>gallery name</th>
				<th>gallery description</th>
				<th>gallery link</th>
				<th>delete</th>
			</tr>
			<?php foreach($res as $row){ ?>
			<tr>
				<td><?=$row['gallery_name'] ?></td>
				<td><?=$row['gallery_description'] ?></td>
				<td>
				<a href="gallery_show.php?id=<?=$row['id'] ?>">[LINK]</a>
				</td>
				<td>
				<a href="gallery_delete.php?id=<?=$row['id'] ?>">[DELETE]</a>
				</td>
			</tr>
			<?php } ?>
		</table>
	</body>
</html>