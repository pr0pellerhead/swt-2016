<?php 

$blogPosts = [
	[
		'naslov' => 'Title 1',
		'sodrzina' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic non nemo esse sapiente cum, est minus placeat! Ab eum delectus quae tempora temporibus, optio enim, expedita tempore libero minus velit.'
	],
	[
		'naslov' => 'Title 2',
		'sodrzina' => 'Hic non nemo esse sapiente cum, est minus placeat! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab eum delectus quae tempora temporibus, optio enim, expedita tempore libero minus velit.'
	],
	[
		'naslov' => 'Title 3',
		'sodrzina' => 'Ab eum delectus quae tempora temporibus, optio enim, expedita tempore libero minus velit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic non nemo esse sapiente cum, est minus placeat! '
	]
];	


// foreach($blogPosts as $post){
// 	echo '<h3>'.$post['naslov'].'</h3>';
// 	echo '<p>'.$post['sodrzina'].'</p>';
// }


?>

<?php foreach($blogPosts as $post){ ?>
	<h2><?=$post['naslov']?></h2>
	<p><?=$post['sodrzina']?></p>
<?php } ?>