<?php 


// print_r($_FILES);

for($i = 0; $i < count($_FILES['m']['type']); $i++){
	$name = $_FILES['m']['name'][$i];
	$size = $_FILES['m']['size'][$i];
	$type = $_FILES['m']['type'][$i];
	$tmp_name = $_FILES['m']['tmp_name'][$i];
	$error = $_FILES['m']['error'][$i];
	$maxsize = 2 * 1024 * 1024;
	$prefix = rand(1000000000, 9999999999);

	if($size < $maxsize && ($type == 'image/jpeg' || $type == 'image/pjpeg') && $error == 0){
		move_uploaded_file($tmp_name, 'uploads/'.$prefix.'_'.$name);
		echo 'Upload for file '.$name.' successfull!<br/>';
	}else{
		echo 'ERROR: File '.$name.' not uloaded!<br/>';
	}
}

$dir = scandir('uploads/');
?>
<style>
	ul {
		list-style: none;
	}
		ul li {
			float: left;
			width: 200px;
			height: 150px;
			margin: 10px;
		}
			ul li img {
				width: 100%;
				height: 100%;
			}
</style>
<ul>
	<?php foreach($dir as $file){ 
		if($file != '.' && $file != '..'){
	?>
	<li>
		<img src="uploads/<?=$file?>" alt="">
	</li>
	<?php }} ?>
</ul>