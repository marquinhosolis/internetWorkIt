<?php
/*
Template Name: Page Packages & Services
*/
?>
<?php get_header(); ?>
<section class="packagesCover overlappedImage" style="background-image: url(<?php the_field('cover_background_image'); ?>);">
	<div class="imageOvellay"></div>
	<div class="sectionContent">
		<div class="container">
			<div class="homeCoverTitles">
				<h1><?php the_field('cover_heading'); ?></h1>
				<h2><?php the_field('cover_sub-heading'); ?></h2>
			</div>
		</div>
	</div>
</section>
<main class="packagesMain">
	<section class="coverBox packagesBox">
		<div class="elipses">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/elipses.png" alt="">
		</div>
		<div class="coverBoxContent">
			<div class="container">
				<div class="flexslider packagesSlider">
					<ul class="slides">
						<?php 
						if( have_rows('services') ):
							while( have_rows('services') ) : the_row(); ?>
								<li>
									<div class="packagesServicesWrapper">
										<div class="packagesServicesIcon">
											<img src="<?php the_sub_field('service_icon'); ?>" alt="<?php the_sub_field('service_title'); ?>">
										</div>
										<div class="packagesServicesName">
											<h3><?php the_sub_field('service_title'); ?></h3>
										</div>
										<div class="packagesServicesText">
											<h4 class="packagesServicesSubtitle">
												<?php the_sub_field('service_sub-title'); ?>
											</h4>
											<p>
												<?php the_sub_field('service_copy'); ?>
											</p>
										</div>
										<div class="packagesServicesLink">
											<?php 
												$link = get_sub_field('service_link');			
												if( $posts ): ?>
													<?php foreach( $link as $post): ?>
													<?php setup_postdata($post); ?>
													<a href="<?php the_permalink(); ?>" class="btn btn-dark-blue">Learn more</a>
													<?php endforeach; ?>
													<?php wp_reset_postdata(); ?>
												<?php endif; ?>
										</div>
									</div>
								</li>
							<?php endwhile;
						endif;
						?>
					</ul>
				</div>	
				
			</div>
		</div>
	</section>
	<section class="packagesTopics">
		<div class="container">
			<div class="packagesTopicsTitle">
				<h3><?php the_field('packages_&_services_topic_title'); ?></h3>
			</div>
			<?php 
			if( have_rows('packages_&_services_topics') ):
				while( have_rows('packages_&_services_topics') ) : the_row(); ?>
					<div class="packageTopic">
						<div class="packageTopicPhoto" style="background-image: url('<?php the_sub_field('topic_image'); ?>');">
							<div class="content"></div>
						</div>
						<div class="packageTopicCopy">
							<?php the_sub_field('topic_copy'); ?>
						</div>
					</div>
				<?php endwhile;
			endif;
			?>
		</div>
	</section>
	<section class="lastCta" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/cta-bg.png);">
		<div class="container" data-aos="fade-up">
			<h2><?php the_field('last_cta_copy'); ?></h2>
			<a href="<?php echo site_url();?>/contact/" class="btn">Schedule your free consultation</a>
		</div>
	</section>	
</main>

<?php get_footer(); ?>	
<script>
	$(window).load(function() {
		$('.flexslider').flexslider({
			animation: "slide"
		});
	});
</script>	