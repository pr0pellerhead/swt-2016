<?php 

$niza = array(); // prazna niza
$niza2 = []; // prazna niza


$niza3 = array('a', 'b', 'c', 'd'); // niza so vrednosti
$niza4 = ['e', 'f', 'g', 'h']; // niza so vrednosti


$niza[0] = 'i'; // dodavanje na elementi so index;
$niza[1] = 'j';
$niza[2] = 'k';
$niza[3] = 'l';

$niza2[] = 'm'; // dodavanje na elementi bez index
$niza2[] = 'n';
$niza2[] = 'o';
$niza2[] = 'p';


// echo $niza; // ova vrakja greshka
// print_r($niza); // pominuva
// echo '<hr/>';
// var_dump($niza2); // pominuva

$dolzina = count($niza);
echo $dolzina;

for($i = 0; $i < $dolzina; $i++){
	echo $niza[$i].'<br/>';
}

echo '<hr/>';

$gradovi = ['Skopje', 'Bitola', 'Ohrid', 'Kumanovo', 'Shtip', 'Tetovo', 'Strumica', 'Gevgelija', 'Veles'];
$a = 0;

while($a < count($gradovi)){
	echo $gradovi[$a].'<br/>';
	$a++;
}

echo '<hr/>';

$max = 0;
$grad = '';
$j = 0;

while($j < count($gradovi)){
	if(strlen($gradovi[$j]) > $max){
		$grad = $gradovi[$j];
		$max = strlen($gradovi[$j]);
	}
	$j++;
}

echo '<hr/>';

// echo 'Grad so najdolgo ime e gradot: '.$grad;

$j = 0;
while($j < count($gradovi)){
	echo $gradovi[$j].' -> '.strlen($gradovi[$j]).'<br/>';
	$j++;
}

echo '<hr/>';

$text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam fugiat non hic, nihil fuga quidem quod tempora ipsum laborum vero amet sapiente adipisci sit vel quasi explicabo saepe suscipit quisquam.';

$zborovi = explode(' ', $text);
// print_r($zborovi);
echo count($zborovi);

?>



<!-- 10
Skopje 6
Bitola 6
Veles  5
Ohrid  5
Probishtip 10
Gevgelija 9
Tetovo 6 -->







