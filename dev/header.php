<!doctype html>
<html>
	<head>
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-W5JM9MW');</script>
		<!-- End Google Tag Manager -->
		<title><?php bloginfo( 'name' ); ?></title>
		<meta charset="utf-8">
		<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
		<meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" name="viewport">
		<meta name="language" content="PT-BR">
		<meta content="pt-br" http-equiv="content-language">
		<link rel="shortcut icon" type="image/png" href="<?php get_template_directory_uri();?>/assets/favicon.ico" />
		<link rel="stylesheet" href="https://use.typekit.net/bnm5qaz.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.2/flexslider.min.css">
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.min.css">
		<?php wp_head(); ?> 
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-142881052-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-142881052-1');
		</script>
		<!-- End Global site tag (gtag.js) - Google Analytics -->
	</head>
	<body>
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W5JM9MW"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
		<header>
			<div class="container">
				<div class="logoHeader">
					<a href="<?php echo site_url(); ?>">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo_internetWork.png" alt="InterNetwork IT logo">
					</a>
				</div>
				<div class="menuMobileItems">
					<div class="phoneIcon">
						<a href="tel:321.300.6383">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</a>
					</div>
					<div class="hamburguerIcon">
						<a href="#">
							<i class="fa fa-bars" aria-hidden="true"></i>
							<i class="fa fa-times" aria-hidden="true"></i>
						</a>
					</div>
				</div>
				<nav id="menuDesktop">
					<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
				</nav>
			</div>
		</header>
		<nav id="menuMobile">
			<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
			<a href="tel:321.300.6383" class="phoneMenuMobile"><i class="fa fa-phone" aria-hidden="true"></i> 321.300.6383</a>
		</nav>