<?php include('c2-3.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>New Page</title>
		<style>
			* {
				padding: 0;
				margin: 0;
				box-sizing: border-box;
				list-style: none;
				font-family: sans-serif;
			}

			div {
				width: 50%;
				margin: 20px auto;
				border: 1px solid rgba(0, 0, 0, .1);
				padding: 20px;
			}

				div h2 {
					font-weight: 100;
					margin: 0 0 10px 0;
					text-transform: uppercase;
					color: orange;
				}

				div p {
					color: gray;
				}

				div ul {
					width: 100%;
					margin: 10px 0;
				}

					div ul li {
						/*float: left;*/
						display: inline-block;
						background-color: orange;
						color: #fff;
						padding: 5px 10px;
						border-radius: 2px;
						font-size: 11px;
					}

				div dl {
					margin-top: 20px;
					padding-top: 20px;
					border-top: 1px solid silver;
				}

					div dl dt {
						font-size: 13px;
						text-transform: uppercase;
					}

					div dl dd {
						padding: 10px;
						color: gray;
					}
		</style>
	</head>
	<body>
		<?php foreach($posts as $post){ ?>
		<div>
			<h2><?=$post['title']?></h2>
			<p><?=$post['body']?></p>
			<ul>
				<?php foreach($post['tags'] as $tag){ ?>
				<li><?=$tag?></li>
				<?php } ?>
			</ul>
			<dl>
				<?php foreach($post['comments'] as $comment){ ?>
				<dt><?=$comment['author']?></dt>
				<dd><?=$comment['comment']?></dd>
				<?php } ?>
			</dl>
		</div>
		<?php } ?>
	</body>
</html>