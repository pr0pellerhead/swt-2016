<?php 
header('Content-Type: text/html; charset=utf-8');

$db = new PDO('mysql:dbname=ecomm;host=127.0.0.1', 'root', 'root');
$db->query('set names utf8');

$sql = 'select * from categories';
$query_categories = $db->query($sql);
$res_categories = $query_categories->fetchAll(PDO::FETCH_ASSOC);


if(isset($_GET['id'])){
	$sql = 'select * from products where id_category = :id_category';
	$product_query = $db->prepare($sql);
	$product_query->bindValue(':id_category', $_GET['id']);
	$product_query->execute();
	$products_res = $product_query->fetchAll(PDO::FETCH_ASSOC);
} else {
	$sql = 'select * from products';
	$product_query = $db->query($sql);
	$products_res = $product_query->fetchAll(PDO::FETCH_ASSOC);
}


?>

<ul class="nav">
	<?php foreach($res_categories as $cat){ ?>
	<li>
		<a href="kategorizacija.php?id=<?=$cat['id']?>">
			<?=$cat['category_name']?>
		</a>
	</li>
	<?php } ?>
	<hr/>
	<?php foreach($products_res as $prod){ ?>
	<li>
		<a href="produkt.php?id=<?=$prod['id']?>">
			<?=$prod['product_name']?>
		</a>
	</li>
	<?php } ?>
</ul>