<?php 
$db = new PDO('mysql:dbname=homework_db;host=127.0.0.1', 'root', 'root');
$db->query('set names utf8');

$sql_categories = "select * from categories";
$query_categories = $db->prepare($sql_categories);
$query_categories->execute();
$query_categories_result = $query_categories->fetchAll(PDO::FETCH_ASSOC);

$sql_blogposts = "select * from blogposts";
$query_blogposts = $db->prepare($sql_blogposts);
$query_blogposts->execute();
$query_blogposts_result = $query_blogposts->fetchAll(PDO::FETCH_ASSOC);

?>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<form action="blogposts_add.php" method="post" enctype="multipart/form-data">
			<input type="text" name="title" placeholder="title">
			<br/>
			<br/>
			<textarea name="content" placeholder="content"></textarea>
			<br/>
			<br/>
			<input type="date" name="publish_date">
			<br/>
			<br/>
			<input type="file" name="image">
			<br/>
			<br/>
			<select name="id_category">
				<?php foreach($query_categories_result as $row){ ?>
				<option value="<?=$row['id']?>">
					<?=$row['category_name']?>
				</option>
				<?php } ?>
			</select>
			<br/>
			<br/>
			<button type="submit">Submit</button>
		</form>
		<hr/>
		<table width="100%" border="1">
			<tr>
				<th>title</th>
				<th>content</th>
				<th>publish_date</th>
				<th>image</th>
				<th>id_category</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
			<?php foreach($query_blogposts_result as $row){ ?>
			<tr>
				<td><?=$row['title']?></td>
				<td><?=$row['content']?></td>
				<td><?=$row['publish_date']?></td>
				<td><?=$row['image']?></td>
				<td><?=$row['id_category']?></td>
				<td>
					<?=$row['id']?>
				</td>
				<td>
					<a href="blogposts_delete.php?id=<?=$row['id']?>">[DELETE]</a>
				</td>
			</tr>
			<?php } ?>
		</table>
	</body>
</html>