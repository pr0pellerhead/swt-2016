<?php 


// print_r($_FILES);

$fsize = $_FILES['f']['size'];
$ftype = $_FILES['f']['type'];
$maxsize = 1024 * 1024 * 2;
$tmp = $_FILES['f']['tmp_name'];
$fname = $_FILES['f']['name'];

if($fsize < $maxsize && ($ftype == 'image/jpeg' || $ftype == 'image/pjpeg')){
	move_uploaded_file($tmp, 'uploads/'.$fname);
} else {
	echo 'Upload failed!';
}



?>


<!-- move_uploaded_file -->