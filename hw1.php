<?php 

$prev = 0;
$next = 1;
$limit = 1000;

while($next < $limit){
	echo $next.'<br/>';
	$p = $prev;
	$prev = $next;
	$next = $p + $next;
}

?>