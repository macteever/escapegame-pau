<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-117506952-7"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-117506952-7');
		</script>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) // { echo ' :'; }  bloginfo('name'); ?></title>
		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<!-- <link href="https://twitter.com/Webmaster_bdx" rel="publisher" />
		<link href="https://www.facebook.com/webmaster.bordeaux/" rel="publisher" />
		<link href="https://www.linkedin.com/in/nicolas-metivier-b169a8115/" rel="publisher" /> -->
		<meta name="p:domain_verify" content="f8af4152c33d0b152b38a2f5bda09f23"/>
  	<link href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/favicon.ico" rel="shortcut icon">
  	<link href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/apple-touch-icon.png" rel="apple-touch-icon-precomposed">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700,800i&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
    conditionizr.config({
        assets: '<?php echo get_template_directory_uri(); ?>',
        tests: {}
    });
    </script>
	</head>
	<body <?php body_class(); ?>>
		<!-- wrapper -->
		<div class="wrapper">
			<!-- header -->
			<header class="header anim-300 clear nav-down" role="banner">
				<!-- nav -->
				<div class="container-fluid menu-container anim-300">
					<?php require 'includes/header-left.php'; ?>
				</div>
				<!-- /nav -->
			</header>
			<!-- /header -->
			<nav class="nav-mobile" role="navigation">
				<div class="row h-100 align-items-center">
					<?php wp_nav_menu( array( 'theme_location' => 'burger-menu' ) ); ?>
				</div>
			</nav>

			<!-- MODAL OPENING -->

			<div class="modal-opening apparition-3 anim-300">
				<div class="row justify-content-center">
					<?php if ( have_rows('modal_annonce', 'option') ): ?>
						<?php while ( have_rows('modal_annonce', 'option') ) : the_row(); ?>
							<div class="fs-36 fw-700 text-white text-center mb-20">
								<?php the_sub_field('title', 'option'); ?>
							</div>
							<div class="fs-28 text-white text-center mb-30">
								<?php the_sub_field('subtitle', 'option'); ?>
							</div>
							<div class="fs-18 fw-300 text-white text-center">
								<?php the_sub_field('content', 'option'); ?>
							</div>
							<div class="cta-anim mt-50 d-flex justify-content-center">
								<?php

								$link = get_sub_field('lien', 'option');

								if( $link ):
									$link_url = $link['url'];
									$link_title = $link['title'];
									?>
									<a class="btn-brd-gold" href="<?php echo esc_url($link_url); ?>"><?php echo esc_html($link_title); ?></a>
								<?php endif; ?>
							</div>

						<?php endwhile; ?>
					<?php endif; ?>
				</div>
				<div class="close-modal-opening">
					<img class="btn-question-faq" src="<?php echo get_template_directory_uri(); ?>/assets/img/close.svg" alt="Escape Game Pau" class="anim-300">
				</div>
			</div>
