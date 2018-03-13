<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Industrious by TEMPLATED</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
    <?php wp_head(); ?>
  </head>
	<body class="is-preload">
		<?php
		$custom_logo_id = get_theme_mod( 'custom_logo' ); //paimam is interneto
		$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' )[0];//paimam is interneto
		?>
		<!-- Header -->
			<header id="header">
				<a class="logo" href="index.html"> <img src="<?php echo $logo ?>" alt=""> </a>
				<nav>
					<a href="#menu">Menu</a>
				</nav>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<!-- <ul class="links"> -->
					<?php
					wp_nav_menu(array(
						'theme_location' =>'pagrindinis-menu',
						'container' => false,
						'menu_class' => 'links'
					));
					?>
			</nav>
