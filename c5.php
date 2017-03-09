<?php 

$filename = 'fajl.txt';

$fh = fopen($filename, 'a+');

fwrite($fh, 'Vrska nemate od PHP! ');


?>