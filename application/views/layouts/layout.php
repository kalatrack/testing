<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Askway</title>
	<!-- <link rel="stylesheet" href="<?php  echo site_url('style.css');?>" type="text/css"> -->
	<link rel="stylesheet" href="<?php  echo site_url('css/bootstrap.css');?>" type="text/css">
	<link rel="stylesheet" href="<?php  echo site_url('css/theme1-bootstrap.css');?>" type="text/css">
</head>
<body>
	<div class="container">
		<header class="container">
			<div class="navbar navbar-inverse">
			<div class="navbar-header">
			     <h1><a href="<?php echo site_url() ?>"  class="text-muted">.   Askway</a></h1>
			</div>
						<ul class="nav navbar-nav">
							<li class="nav active"><a href="<?php echo site_url(); ?>" class="text-muted lead">Home</a></li>
							<li class="nav"><a href="<?php echo site_url('questions/listing'); ?>" class="text-muted lead">Question</a></li> 
							<li class="nav"><a href="#" class="text-muted lead">Answer</a></li>
							<li class="nav"><?php echo $this->ion_auth->logged_in()== true ? '<a href="'.site_url('users/logout').' "class="text-muted lead">Logout</a>' : '<a href="'.site_url('users/login').'" class="text-muted lead">Login</a>'; ?></li>
						</ul>
			</div>
		</header>
		<div class="container">
			<div class="col-md-12"><?php echo $this->load->view($subview); ?></div>
		</div>
		<footer class="container">
			&copy; <?php echo date('Y'); ?>Ask Way
		</footer>
	</div>
	<script>

	</script>
	<script src="js/bootstrap.js"></script>
	<script src="js/jquery.js"></script>
</body>
</html>