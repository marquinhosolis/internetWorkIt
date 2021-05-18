<?php get_header(); ?>
<div class="blogPageBg">
	<div class="blogBgImage" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/404-bg.png);"></div>
</div>
<main class="blogPage page404">
	<div class="container">
		<div class="img404">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ovni.png);" alt="">
		</div>
		
		<div class="text404">
			<h1><span>404</span><br>Page not found</h1>
			<a href="<?php echo site_url(); ?>" class="btn">Go back to home</a>
		</div>
		
	</div>
</main>


<?php get_footer(); ?>		