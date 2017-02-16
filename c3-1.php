<?php 
	$title = 'My first PHP website';
	$denovi = ['pon', 'vto', 'sre', 'cet', 'pet', 'sab', 'ned'];

	$studenti = [
		['ime' => 'Martin Danev', 'ocena' => 3],
		['ime' => 'Irina Dobrohotova', 'ocena' => 2],
		['ime' => 'Martin Postolovski', 'ocena' => 4],
		['ime' => 'Stefan Blazevski', 'ocena' => 3],
		['ime' => 'Stefan Stojkovski', 'ocena' => 2]
	];
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title><?=$title?></title>
	</head>
	<body>
		<h1><?=$title?></h1>
		<ul>
			<?php foreach($denovi as $den){ ?>
			<li><?=$den?></li>
			<?php } ?>
		</ul>

		<table border="1">
			<tr>
				<th>Ime</th>
				<th>Ocena</th>
			</tr>
			<?php foreach($studenti as $student){ ?>
			<tr>
				<td><?=$student['ime']?></td>
				<?php 
					$color = 'green';
					if($student['ocena'] < 3){
						$color = 'red';
					}
				?>
				<td style="background-color: <?=$color?>">
				<!--<td style="color: <?=$student['ocena'] > 2 ? 'green' : 'red'?>">-->
				<?=$student['ocena']?>
				</td>
			</tr>
			<?php } ?>
		</table>
	</body>
</html>