<?php 

$student = array(
	'ime' => 'Bojan', 
	'prezime' => 'Gavrovski',
	'prosek' => 7.4
);

echo count($student);
echo '<br/>';
// echo $student['ime'];
// echo '<br/>';
// echo $student['prezime'];
// echo '<br/>';
// echo $student['prosek'];
// echo '<br/>';


foreach($student as $k => $v){
	echo $k.': '.$v.'<br/>';
}


echo '<hr/>';

$text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam fugiat non hic, nihil fuga quidem quod tempora ipsum laborum vero amet sapiente adipisci sit vel quasi explicabo saepe suscipit quisquam.';

$zborovi = explode(' ', $text);
$max = 0;
$z = '';

foreach($zborovi as $zbor){
	if(strlen($zbor) > $max){
		$z = $zbor;
		$max = strlen($zbor);
	}
}

echo 'Najdolg zbor vo tekstot e zborot: '.$z;
?>