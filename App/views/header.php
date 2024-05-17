<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

		<!-- Bootstrap CSS -->
		<link href="App/views/public/css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="App/views/public/css/tiny-slider.css" rel="stylesheet">
		<link href="App/views/public/css/style.css" rel="stylesheet">
		<title>Furni Free Bootstrap 5 Template for Furniture and Interior Design Websites by Untree.co </title>
	</head>

	<body>

		<!-- Start Header/Navigation -->
		<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

			<div class="container">
				<a class="navbar-brand" href="index.php">Furni<span>.</span></a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsFurni">
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
						<li class="nav-item active">
							<a class="nav-link" href="index.php">Trang chủ</a>
						</li>
						<li><a class="nav-link" href="index.php?act=shop">Cửa hàng</a></li>
						<li><a class="nav-link" href="index.php?act=aboutus">Về chúng tôi</a></li>
						<li><a class="nav-link" href="index.php?act=services">Dịch vụ</a></li>
						<li><a class="nav-link" href="index.php?act=blog">Blog</a></li>
						<li><a class="nav-link" href="index.php?act=contact">Liên hệ chúng tôi</a></li>
					</ul>

					<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
						<?php
							if(isset($_SESSION['user'])){
								extract($_SESSION['user']);
						?>
						<?php
							}else{
						?>
						<li><a class="nav-link" href="index.php?act=login"><img src="App/views/public/images/user.svg"></a></li>
						<?php }?>
						<li><a class="nav-link" href="index.php?act=cart"><img src="App/views/public/images/cart.svg"></a></li>
				</div>
			</div>
				
		</nav>
		<!-- End Header/Navigation -->