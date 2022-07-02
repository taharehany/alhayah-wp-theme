<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
	<meta charset="UTF-8">
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="author" content="TaHa">
	<link rel="icon" type="image/png" href="imgs/favicon.png" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/assets/images/favicon.png">
	<!--[if lt IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/r29/html5.min.js"></script><![endif]-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@500;700&amp;display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<div class="main-wrapper">
	<!--PreLoader-->
	<div class="loader">
		<video width="auto" height="auto" muted autoplay loop>
			<source src="<?php echo get_template_directory_uri() ?>/assets/video/loading.webm" type="video/mp4">
		</video>
	</div>
	<!--PreLoader-->

	<!--header-->
	<header>
		<!--navbar desktop-->
		<nav class="navbar main-nav navbar-expand-lg">
			<div class="container">
				<div class="navbar-brand">
					<?php the_custom_logo(); ?>
				</div>
				<div class="phone-number">
					<div class="icon"><i class="bi bi-telephone"></i></div>
					<div class="text"><span>كلمنا الآن</span><a href="tel:01050071667">01050071667</a></div>
				</div>
				<div class="group">
					<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#side_menu" aria-controls="side_menu" aria-expanded="false" aria-label="Toggle navigation">
						<div class="hamburger-menu"><span></span><span></span><span></span></div>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="navbarNav">
					<?php //add_custom_menu(); ?>

					<ul class="navbar-nav">
						<li class="nav-item active"><a class="nav-link" aria-current="page" href="<?php get_bloginfo('url'); ?>">الرئيسية</a></li>
						<li class="nav-item"><a class="nav-link" href="#about">من نحن</a></li>
						<li class="nav-item"><a class="nav-link" href="#works">قطاعات الأعمال</a></li>
						<li class="nav-item"><a class="nav-link" href="#services">خدماتنا</a></li>
						<li class="nav-item"><a class="nav-link" href="#clients">عملائنا</a></li>
						<li class="nav-item"><a class="nav-link" href="#contact">تواصل معنا</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<!--navbar desktop-->

		<!--side menu in mobile only-->
		<div class="offcanvas offcanvas-start" id="side_menu" data-bs-scroll="true" tabindex="-1" aria-labelledby="side_menu_label">
			<div class="offcanvas-header">
				<button class="btn-close btn-close-dark" type="button" data-bs-dismiss="offcanvas" data-bs-target="#side_menu" aria-controls="side_menu" aria-label="Close"></button>
			</div>
			<div class="offcanvas-body">
				<div class="navbar">
					<div class="collapsed navbar-collapse" id="navbarNavSide">
						<ul class="navbar-nav">
							<li class="nav-item active"><a class="nav-link" aria-current="page" href="<?php get_bloginfo('url'); ?>">الرئيسية</a></li>
							<li class="nav-item"><a class="nav-link" href="#about">من نحن</a></li>
							<li class="nav-item"><a class="nav-link" href="#works">خدماتنا</a></li>
							<li class="nav-item"><a class="nav-link" href="#services">قطاعات الأعمال</a></li>
							<li class="nav-item"><a class="nav-link" href="#clients">عملائنا</a></li>
							<li class="nav-item"><a class="nav-link" href="#contact">تواصل معنا</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!--header-->

	<body>