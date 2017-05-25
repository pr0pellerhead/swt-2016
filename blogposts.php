<?php 
$db = new PDO('mysql:dbname=homework_db;host=127.0.0.1', 'root', 'root');
$db->query('set names utf8');



if(isset($_GET['id'])){
	echo 'EDIT MODE';
	$form_url = 'blogposts_edit.php';

	$sql_bp = 'select * from blogposts where id = :id';
	$query_bp = $db->prepare($sql_bp);
	$query_bp->bindValue(':id', $_GET['id']);
	$query_bp->execute();
	$res_bp = $query_bp->fetchAll(PDO::FETCH_ASSOC);

	$input_title = $res_bp[0]['title'];
	$input_content = $res_bp[0]['content'];
	$input_publish_date = $res_bp[0]['publish_date'];
	$input_id_category = $res_bp[0]['id_category'];
	$input_image = $res_bp[0]['image'];
	$input_id = $res_bp[0]['id'];
} else {
	echo 'INSERT MODE';
	$form_url = 'blogposts_add.php';

	$input_title = '';
	$input_content = '';
	$input_date = '';
	$input_id_category = '';
	$input_image = '';
	$input_id = '';
}



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
		<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
		<script>tinymce.init({selector: 'textarea',
  height: 200,
  theme: 'modern',
  plugins: [
    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
    'searchreplace wordcount visualblocks visualchars code fullscreen',
    'insertdatetime media nonbreaking save table contextmenu directionality',
    'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc help'
  ],
  toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
  toolbar2: 'print preview media | forecolor backcolor emoticons | codesample help',
  image_advtab: true,
  templates: [
    { title: 'Test template 1', content: 'Test 1' },
    { title: 'Test template 2', content: 'Test 2' }
  ],
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css'
  ]});</script>
	</head>
	<body>
		<form action="<?=$form_url?>" method="post" enctype="multipart/form-data">
			<input type="text" name="title" placeholder="title" value="<?=$input_title?>">
			<br/>
			<br/>
			<textarea name="content" placeholder="content"><?=$input_content?></textarea>
			<br/>
			<br/>
			<input type="date" name="publish_date" value="<?=date('Y-m-d', strtotime($input_publish_date))?>">
			<br/>
			<br/>
			<input type="file" name="image">
			<?php if($input_image != ''){ ?>
			<img src="<?=$input_image?>" alt="" width="100">
			<?php } ?>
			<br/>
			<br/>
			<select name="id_category">
				<?php foreach($query_categories_result as $row){ 
						$selected = '';

						if($row['id'] == $input_id_category){
							$selected = 'selected="selected"';
						}
				?>
				<option value="<?=$row['id']?>" <?=$selected?>>
					<?=$row['category_name']?>
				</option>
				<?php } ?>
			</select>
			<br/>
			<br/>
			<input type="hidden" name="id" value="<?=$input_id?>">
			<input type="hidden" name="image" value="<?=$input_image?>">
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
					<a href="blogposts.php?id=<?=$row['id']?>">[EDIT]</a>
				</td>
				<td>
					<a href="blogposts_delete.php?id=<?=$row['id']?>">[DELETE]</a>
				</td>
			</tr>
			<?php } ?>
		</table>
	</body>
</html>