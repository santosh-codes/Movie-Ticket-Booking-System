<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark static-top">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">
				<img src="Images/logos/logo.jpg" alt="Avatar Logo" style="width:65px;">
				<span class="nav-text">VFX Cinemas</span>
			</a>
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="index.php">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="book_now.php">Book Now</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="login.php">Login</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="register.php">Register</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="admin_form.php">Admin</a>
				</li>
			</ul>
		</div>
	</nav>
	</nav>
	<section class="my-5">
		<section class="utsav" style="margin-left: 580px; margin-right: 580px;">
			<div class="row">
				<h1 align="center">
					<div class="col">Admin Dashboard</div>
				</h1>
			</div>
			<hr>
		</section>
		<div class="container-button" style="margin-left: 450px; padding: 140px;">
			<a href="carousel_list.php">
				<button type="button" class="btn btn-outline-primary">Carousel</button>
			</a>
			<a href="now_showing_list.php">
				<button type="button" class="btn btn-outline-primary">Now Showing</button>
			</a>
			<a href="coming_soon.php">
				<button type="button" class="btn btn-outline-primary">Coming Soon</button>
			</a>
			<!-- <a href="now_showing_list.php">
				<button type="button" class="btn btn-outline-primary">Bookings</button>
			</a> -->
		</div>
</body>

</html>