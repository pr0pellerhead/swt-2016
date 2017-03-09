<?php 

$fh = fopen('newsletter.txt', 'a+');
fwrite($fh, $_POST['name'].' '.$_POST['email'].'; ');
rewind($fh);
$output = fread($fh, filesize('newsletter.txt'));
$list = explode('; ', $output);
fclose($fh);
?>

<ul>
	<?php foreach($list as $l){ ?>
	<li><?=$l ?></li>
	<?php } ?>
</ul>

