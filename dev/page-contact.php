<?php
/*
Template Name: Page Contact
*/
?>
<?php get_header(); ?>
<div class="blogPageBg">
	<div class="blogBgImage" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/single-post-bg.png);"></div>
	<div class="blogPageBgMaskOne"></div>
	<div class="blogPageBgMaskTwo"></div>
</div>
<main class="contactPage">
	<div class="container">
		<div class="contactPageFormWrapper">
			<h1 class="contactPageTitle"><?php the_field('page_title'); ?></h1>
			<div class="contactPageIntroCopy">
				<?php the_field('page_copy'); ?>
			</div>
			<div class="contactPageForm">
				<?php echo do_shortcode('[formidable id=1]'); ?>
			</div>
		</div>
		<div class="contactPageFormImage" style="background-image: url(<?php the_field('page_image'); ?>);">
			<div class="content"></div>
		</div>
		<div class="contactPageContacts">
			<h2>Contact Us</h2>
			<address>
				<div>
				<a href="tel:321.300.6383"><i class="fa fa-phone" aria-hidden="true"></i> 321.300.6383</a>
				<a href="mailto:info@internetworkit.com"><i class="fa fa-envelope" aria-hidden="true"></i> info@internetworkit.com</a>
				</div>
				<a href="https://www.google.com/maps?client=firefox-b-d&q=2014+Edgewater+Dr,+Suite+225Orlando,+FL+32804&um=1&ie=UTF-8&sa=X&ved=0ahUKEwjcwY305OvhAhUwILkGHS67DUAQ_AUIDigB" target="_blank"><i class="fa fa-map-marker" aria-hidden="true"></i>
					<span>2014 Edgewater Dr, Suite 225<br>Orlando, FL 32804</span></a>
			</address>

		</div>
	</div>
	
		
</main>


<?php get_footer(); ?>		