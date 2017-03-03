<?php 

// print_r($_POST);

function validate_registration($name, $email, $age, $website, $password1, $password2){
	$errors = [];

	// validating the name
	if(!isset($name) || !strlen(trim($name))){
		$errors[] = 'You must set a name';
	}

	// validating the email
	if(!isset($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
		$errors[] = 'The email you entered is invalid';
	}

	// validating the age
	if(!isset($age) || $age < 21){
		$errors[] = 'You are too young to register';
	}

	// validating the website
	if(!isset($website) || !filter_var($website, FILTER_VALIDATE_URL)){
		$errors[] = 'The website you entered has an invalid url';
	}

	// validating the password
	if(!isset($password1) || !isset($password2) || strlen(trim($password1)) < 6 || strlen(trim($password2)) < 6 || $password1 !== $password2){
		$errors[] = 'Passwords don\'t match';
	}

	// checking for errors
	if(count($errors) == 0){
		return true;
	} else {
		return false;
	}	
}

// @$res = validate_registration($_POST['name'], $_POST['email'], $_POST['age'], $_POST['website'], $_POST['password1'], $_POST['password2']);

// if($res === true){
// 	echo 'Your registration has been successfull';
// } else {
// 	echo 'Registration unsuccessfull: <br/>'.implode($res, '<br/>');
// }	


function _test_validate_registration($data){

	foreach($data as $d){
		$res = validate_registration($d['name'], $d['email'], $d['age'], $d['website'], $d['password1'], $d['password2']);

		if($res !== $d['expected']){
			echo '<span style="color: red;">Fail!</span><br/>';
		} else {
			echo '<span style="color: green;">Success!</span><br/>';
		}
	}
}

$data = [
	[
		'name' => 'Bojan Gavrovski', 
		'email' => 'bojang@gmail.com', 
		'age' => 35, 
		'website' => 'http://google.com', 
		'password1' => 'aaaaaa', 
		'password2' => 'aaaaaa',
		'expected' => true
	],
	[
		'name' => 'Bojan Gavrovski', 
		'email' => 'bojang@gmail.com', 
		'age' => 20, 
		'website' => 'http://google.com', 
		'password1' => 'aaaaaa', 
		'password2' => 'aaaaaa',
		'expected' => false
	],
	[
		'name' => 'Bojan Gavrovski', 
		'email' => 'bojang@gmail.com', 
		'age' => 100, 
		'website' => 'htt://google.com', 
		'password1' => 'aaaaaa', 
		'password2' => 'aaaaaa',
		'expected' => true
	],
	[
		'name' => 'Bojan Gavrovski', 
		'email' => 'bojang@gmail.com', 
		'age' => 35, 
		'website' => 'http://google.com', 
		'password1' => 'aaaaaa', 
		'password2' => 'aaaaaa',
		'expected' => true
	],
	[
		'name' => '', 
		'email' => 'bojang@gmail.com', 
		'age' => 35, 
		'website' => 'http://google.com', 
		'password1' => 'aaaaaa', 
		'password2' => 'aaaaaa',
		'expected' => false
	],
	[
		'name' => 'Bojan Gavrovski', 
		'email' => '', 
		'age' => 35, 
		'website' => 'http://google.com', 
		'password1' => 'aaaaaa', 
		'password2' => 'aaaaaa',
		'expected' => false
	],
	[
		'name' => '', 
		'email' => 'bojang@gmail.com', 
		'age' => 12,
		'website' => 'http://google.com', 
		'password1' => 'aaaaaa', 
		'password2' => 'aaaaa',
		'expected' => false
	],
	[
		'name' => 'Bojan Gavrovski', 
		'email' => 'bojang@gmail.com', 
		'age' => 35, 
		'website' => 'http://google.com', 
		'password1' => '', 
		'password2' => '',
		'expected' => false
	],
	[
		'name' => 'Bojan Gavrovski', 
		'email' => 'bojang@gmail', 
		'age' => 35, 
		'website' => 'http://google.com', 
		'password1' => 'aaaaaa', 
		'password2' => 'aaaaaa',
		'expected' => false
	],
	[
		'name' => 'Bojan Gavrovski', 
		'email' => 'bojanggmailcom', 
		'age' => 35, 
		'website' => 'http://google.com', 
		'password1' => 'aaaaaa', 
		'password2' => 'aaaaaa',
		'expected' => false
	]
];

_test_validate_registration($data);

// echo '<hr/>';

// echo filter_var('://google.com', FILTER_VALIDATE_URL);

?>