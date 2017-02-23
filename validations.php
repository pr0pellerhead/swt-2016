<?php 

// $email = 'bojang@gmail.com';
$email = $_GET['email'];

$vres = filter_var($email, FILTER_VALIDATE_EMAIL);

if($vres == true){
	echo 'Email is valid';
} else {
	echo 'Not a real email address!';
}


?>