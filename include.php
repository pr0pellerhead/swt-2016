<?php 

$file = $_GET['page'].'.php';
// $file = 'c2'.'.php';
// $file = 'c2.php';


$exists = file_exists($file);

if($exists == true){
	include($file);
} else {
	echo 'File does not exist';
}

?>