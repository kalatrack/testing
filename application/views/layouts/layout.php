<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ask way</title>
	<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
	<div class="container">
		<header class="highlight">
			<h1><a href="<?php echo site_url() ?>">Ask way</a></h1>
			<ul class="nav">
				<li><a href="<?php echo site_url(); ?>">Home</a></li>
				<li><a href="<?php echo site_url('questions/listing'); ?>">Question</a></li>
				<li><a href="#">Answer</a></li>
			</ul>
		</header>
		<div class="main">
			<?php echo $this->load->view($subview); ?>
		</div>
		<footer>
			&copy; <?php echo date('Y'); ?>Ask Way
		</footer>
	</div>
</body>
</html>