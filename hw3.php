<?php 

// print_r($_POST);
$errors = [];

// validating the name
if(!isset($_POST['name']) || !strlen(trim($_POST['name']))){
	$errors[] = 'You must set a name';
}

// validating the email
if(!isset($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
	$errors[] = 'The email you entered is invalid';
}

// validating the age
if(!isset($_POST['age']) || $_POST['age'] < 21){
	$errors[] = 'You are too young to register';
}

// validating the website
if(!isset($_POST['website']) || !filter_var($_POST['website'], FILTER_VALIDATE_URL)){
	$errors[] = 'The website you entered has an invalid url';
}

// validating the password
if(!isset($_POST['password1']) || !isset($_POST['password2']) || strlen(trim($_POST['password1'])) < 6 || strlen(trim($_POST['password2'])) < 6 || $_POST['password1'] !== $_POST['password2']){
	$errors[] = 'Passwords don\'t match';
}

// checking for errors
if(count($errors) == 0){
	echo 'Your registration has been successfull';
} else {
	echo 'Registration unsuccessfull: <br/>'.implode($errors, '<br/>');
}

?>