<?php 

$f = new File('file.txt');
$f->write('Some text. Blah blah blah...');
echo $f->read();
unset($f);

?>