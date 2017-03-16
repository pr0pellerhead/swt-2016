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

print_r(scandir('uploads/'));




?>