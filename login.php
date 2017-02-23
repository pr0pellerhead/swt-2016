<?php 


$u = 'a'; // hard-coded username
$p = 'b'; // hard-coded password

$post_username = trim(strip_tags($_POST['username']));
$post_password = trim(strip_tags($_POST['password']));


if(strlen($post_username) > 0 && strlen($post_password) > 0){

	if($post_username == $u && $post_password == $p){
		echo 'Login successfull';
	} else {
		echo 'Please try again '.strip_tags($_POST['username']);
	}
} else {

	echo 'No username or password was entered!';
}




?>