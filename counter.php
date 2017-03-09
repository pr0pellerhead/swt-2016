<?php 

$brojka = file_get_contents('counter.txt');

echo $brojka;

// $fh = fopen('counter.txt', 'w+');
// fwrite($fh, ++$brojka);
// fclose($fh);

file_put_contents('counter.txt', ++$brojka);

?>