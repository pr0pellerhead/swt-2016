<?php 

echo 'Zdravo Svetu!<br/>';

$ime = "Bojan";
echo $ime;

$a = 10;
$b = 13;

echo '<br/>';
echo $a + $b;
echo '<br/>';
echo $a - $b;
echo '<br/>';
echo $a * $b;
echo '<br/>';
echo $a / $b;
echo '<br/>';
echo $a % $b;
echo '<br/>';

echo $a * ($a + $b);
echo '<br/>';
echo $a * $a + $b;
echo '<br/>';

$integer = 123;
$float = 3.14;
$string = "TEST TEST";
$boolean = true;

echo $integer;
echo '<br/>';
echo $float;
echo '<br/>';
echo $string;
echo '<br/>';
echo $boolean;


$vistina = true;

if($vistina){
	echo 'Vistina';
} else {
	echo 'Nevistina';
}


echo '<br/>';

$c = true;
$d = false;

if($c && $d){ // и двете вредности мора да бидат true за условот да се исполни
	echo 'Vistina';
} else {
	echo 'Nevistina';
}


echo '<br/>';

if($c || $d){ // една од двете врености мора да биде true за условот да се исполни
	echo 'Vistina';
} else {
	echo 'Nevistina';
}

echo '<br/>';
// strlen('Bojan'); // 5
// $prezime = 'prezime';
// strlen($prezime); // 7

$ime = 'Pero';
$br = strlen($ime);
echo $br;

if(strlen($ime) % 2 == 0){
	echo 'Par';
} else {
	echo 'Nepar';
}


echo '<br/>';

$ime = 'Bojan';
$br = strlen($ime);

if($br % 2 == 0){
	echo 'Par';
} else {
	echo 'Nepar';
}

echo '<br/>';

$ime = 'Janko';
$br = strlen($ime);
$rez = $br % 2;

if($rez == 0){
	echo 'Par';
} else {
	echo 'Nepar';
}

echo '<br/>';


$ime = 'Stanko';
$br = strlen($ime);
$rez = $br % 2;

// 1 = true
// 0 = false

if($rez){
	echo 'Nepar';
} else {
	echo 'Par';
}

echo '<br/>';
// <, >, >=, <=, ==, ===, !=, !==


$g = '4';
$h = 4;

if($g == $h){ // споредба само на вредностите
	echo 'Vistina';
} else {
	echo 'Nevistina';
}

echo '<br/>';

if($g === $h){ // споредба и на вредностите и на типовите
	echo 'Vistina';
} else {
	echo 'Nevistina';
}


echo '<br/>';

$t = 'A';

if($t == 'A'){
	echo 'A';
} else if($t == 'B'){
	echo 'B';
} else {
	echo 'Nepoznata bukva!';
}

echo '<br/>';
$godini = 34;




$den = 'pon';


switch($den){
	case 'pon':
		echo 'Ponedelnik';
	break;
	case 'vto':
		echo 'Vtornik';
	break;
	case 'sre':
		echo 'Sreda';
	break;
	case 'cet':
		echo 'Chetvrtok';
	break;
	case 'pet':
		echo 'Petok';
	break;
	case 'sab':
		echo 'Sabota';
	break;
	case 'ned':
		echo 'Nedela';
	break;
}

echo '<br/>';

for($i = 0; $i < 10; $i++){
	echo $i;
	echo '<br/>';
}


for($i = 0; $i < 12; $i++){
	switch($i){
		case 0: 
			echo 'Januari';
		break;
		case 1: 
			echo 'Fevruari';
		break;
		case 2: 
			echo 'Mart';
		break;
		case 3: 
			echo 'April';
		break;
		case 4: 
			echo 'Maj';
		break;
		case 5: 
			echo 'Juni';
		break;
		case 6: 
			echo 'Juli';
		break;
		case 7: 
			echo 'Avgust';
		break;
		case 8: 
			echo 'Septemvri';
		break;
		case 9: 
			echo 'Oktomvri';
		break;
		case 10: 
			echo 'Noemvri';
		break;
		case 11: 
			echo 'Dekemvri';
		break;
	}

	echo '<br/>';
}



$j = 0;
while($j < 5){
	echo "$j<br/>";
	$j++;
}



$q = 0;
$res = 0; // 0, 1, 3, 6, 10, 15, 21, 28, 36, 45

while($q < 10){
	$res = $res + $q;
	$q++;
}

echo "<br/>Kraen sobirok: $res";





?>