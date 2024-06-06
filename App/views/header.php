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
		<title>ChicHaven </title>
	</head>

	<body>

		<!-- Start Header/Navigation -->
		<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark fixed-top" arial-label="Furni navigation bar">

			<div class="container">
				<a class="navbar-brand" href="index.php">Furni<span>.</span></a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsFurni">
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
						<li class="nav-item <?php if(!isset($_GET['act'])) { echo 'active'; } ?>">
							<a class="nav-link" href="index.php">Trang chủ</a>
						</li>
						<li class="nav-item <?php if(isset($_GET['act']) && $_GET['act'] == 'shop') { echo 'active'; } ?>">
							<a class="nav-link" href="index.php?act=shop">Cửa hàng</a>
						</li>
						<li class="nav-item <?php if(isset($_GET['act']) && $_GET['act'] == 'aboutus') { echo 'active'; } ?>">
							<a class="nav-link" href="index.php?act=aboutus">Về chúng tôi</a>
						</li>
						<li class="nav-item <?php if(isset($_GET['act']) && $_GET['act'] == 'services') { echo 'active'; } ?>">
							<a class="nav-link" href="index.php?act=services">Dịch vụ</a>
						</li>
						<li class="nav-item <?php if(isset($_GET['act']) && $_GET['act'] == 'blog') { echo 'active'; } ?>">
							<a class="nav-link" href="index.php?act=blog">Blog</a>
						</li>
						<li class="nav-item <?php if(isset($_GET['act']) && $_GET['act'] == 'contact') { echo 'active'; } ?>">
							<a class="nav-link" href="index.php?act=contact">Liên hệ chúng tôi</a>
						</li>
					</ul>
					
					<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
					<?php
					// if(isset($_SESSION['user'])){
					// 	extract($_SESSION['user']);
					// 	echo '<li><a style="font-weight: 600; color: white;" class="nav-link" href="index.php?act=logout">Đăng xuất</a></li>
					// 	<li><a class="nav-link" href="index.php?act=cart"><img src="App/views/public/images/cart.svg"></a></li>';
					// } else {
					// 	echo '<li><a class="nav-link" href="index.php?act=login"><img src="App/views/public/images/user.svg"></a></li>
					// 	<li><a class="nav-link" href="index.php?act=cart"><img src="App/views/public/images/cart.svg"></a></li>';
					// }
					
					if(isset($_SESSION['user'])){
						extract($_SESSION['user']);
						if(array_key_exists('rol', $_SESSION['user']) && $_SESSION['user']['rol'] == 1){
							echo '<div style="display: flex;">
									<ul style="list-style: none; padding: 0; display: flex; align-items: center;">
										<li style="margin-right: 15px; font-weight: 600; color: white;">
											<tr style="font-weight: 600; color: white;" class="nav-link" href="">Quản trị</tr>
										</li>
										<li style="position: relative;">
											<div class="image-container">
												<div class="userlogined-at-header">
													<div class="border-radius-50phantram">
														<img class="hover-text width-100-height-100"  src="'.$img.'" alt="">
													</div>
												</div>
												<ul class="image-hover-text">
												<div class="width1">
													<div class="flex-container">
														<div style="height: 50px; width: 50px;">
															<img style="" src="'.$img.'" alt="">
														</div>
														<div style="color: black;">
															<div class="font-size22">
																'.$name.'

															</div>
															<div class="top-padding">
																Quản trị
															</div>
														</div>
													</div>
												</div>
													<div>
														<li class="lipro"><a href="admin/index.php">Đi đến trang quản trị</a></li>
														<li><a style="padding-right: 98px; color: rgba(0, 0, 0, 0.719); font-size: 16px" href="index.php?act=logout">Đăng xuất</a></li>
													</div>
												</ul>
											</div>
										</li>
									</ul>
								</div>';
						} else {
							echo '<div style="display: flex;">
										<ul style="list-style: none; padding: 0; display: flex; align-items: center;">
											<li style="margin-right: 15px; font-weight: 600; color: white;">
												<tr style="font-weight: 600; color: white;" class="nav-link" href="">'.$name.'</tr>
											</li>
											<li style="position: relative;">
												<div class="image-container">
													<div class="userlogined-at-header">
														<div class="border-radius-50phantram">
															<img class="hover-text width-100-height-100"  src="'.$img.'" alt="">
														</div>
													</div>
													<ul class="image-hover-text">
													<div class="width1">
														<div class="flex-container">
															<div style="height: 50px; width: 50px;">
																<img style="" src="'.$img.'" alt="">
															</div>
															<div style="color: black;">
																<div class="font-size22">
																	'.$name.'

																</div>
																<div class="top-padding">
																	Người dùng
																</div>
															</div>
														</div>
													</div>
														<div>
															<li class="lipro"><a href="">Cài đặt & tài khoản</a></li>
															<li><a style="padding-right: 61px; color: rgba(0, 0, 0, 0.719); font-size: 16px" href="">Đổi mật khẩu</a></li>
															<li><a style="padding-right: 84px; color: rgba(0, 0, 0, 0.719); font-size: 16px" href="index.php?act=logout">Đăng xuất</a></li>
														</div>
													</ul>
												</div>
											</li>
											
										</ul>
									</div>
									<li><a class="nav-link" href="index.php?act=cart"><img src="App/views/public/images/cart.svg"></a></li>';
						}
					} else {
						echo '<li><a class="nav-link" href="index.php?act=login"><img src="App/views/public/images/user.svg"></a></li>
							  <li><a class="nav-link" href="index.php?act=cart"><img src="App/views/public/images/cart.svg"></a></li>';
					}
						?>
				
					</ul>
				</div>
			</div>
		</nav>
		<!-- End Header/Navigation -->c