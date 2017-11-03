<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<header class="main-header">
		<div class="wrapper">
			<h1 class="logo"><?= bloginfo('name'); ?></h1>
			<nav>

                <?php wp_nav_menu(array('theme_location' => 'main_menu')); ?>
				<!-- <ul>
					<li class="active"><a href="#">Home</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Journal</a></li>
					<li><a href="#">Service</a></li>
					<li><a href="#">Features</a></li>
					<li><a href="#">Contact</a></li>
				</ul> -->
			</nav>
			<!-- ./main navigation -->
		</div>
		<!-- ./wrapper -->
	</header>
	<!-- ./main-header -->
    <main>

    	<?php if(is_front_page()): ?>
		<section class="jumbotron">
			<div class="wrapper">
				<h2>We are digital &amp; branding agency based in London.</h2>
				<h3>We love to turn great ideas into beautiful products.</h3>
				<a href="<?php echo get_permalink(31); ?>" class="button">See portfolio</a>
			</div>
		</section>
	<?php endif; ?>
		<!-- ./jumbotron -->
