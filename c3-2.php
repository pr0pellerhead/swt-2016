<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>New Page</title>
	</head>
	<body>
		<?php include('templates/header.php'); ?>
		<main>
			<?php 

			$page = 'home';

			if(isset($_GET['pg']) && file_exists('pages/'.$_GET['pg'].'.php')){
				$page = $_GET['pg'];
			}

			include('pages/'.$page.'.php');

			?>
		</main>
		<?php include('templates/footer.php'); ?>
	</body>
</html>