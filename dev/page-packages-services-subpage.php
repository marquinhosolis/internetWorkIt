<?php
/*
Template Name: Page Packages & Services SubPage 
*/
?>
<?php get_header(); ?>
<div class="blogPageBg serviceSubpage">
	<div class="blogBgImage" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/single-post-bg.png);"></div>
	<div class="blogPageBgMaskOne"></div>
	<div class="blogPageBgMaskTwo"></div>
</div>
<main class="packageSinglePage">
	<div class="container">
		<article>
			<div class="packageSinglePageCopy">
				<div class="packageSinglePageTitle">
					<div class="packageSinglePageTitleIcon">
						<img src="<?php the_field('service_icon'); ?>" alt="<?php the_title(); ?>">
					</div>
					<h1><?php the_title(); ?></h1>
				</div>
				<div class="packageSinglePageSubtitle">
					<h2><?php the_field('service_subtitle'); ?></h2>
				</div>
				<div class="packageSinglePageText">
					<?php the_field('service_copy'); ?>
				</div>
			</div>
			<div class="packageSinglePageBenefits">
				<?php the_field('service_benefits_copy'); ?>
				<div class="packageSinglePageBenefitsReadMore">
					<a href="#">read more <i class="fa fa-angle-down" aria-hidden="true"></i>
					</a>
				</div>
			</div>
			<div class="backServices">
				<a href="<?php echo site_url();?>/packages-services/"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Back to all services</a>
			</div>
			<div class="packageSinglePageTestimonial">
				<div class="packageSinglePageTestimonialContent">
					<div class="packageSinglePageTestimonialContentCopy">
						<?php the_field('service_testimonial_copy'); ?>
					</div>
					<div class="packageSinglePageTestimonialContentName">
						<?php the_field('service_testimonial_name'); ?>, 
						<span><?php the_field('service_testimonial_company'); ?></span>
					</div>
				</div>
			</div>
			<div class="packageSinglePageCta">
				<h3>It’s simple to get started!</h3>
				<a href="<?php echo site_url();?>/contact/" class="btn btn-dark-blue">Schedule your free consultation</a>
			</div>
		</article>
	</div>
</main>


<?php get_footer(); ?>			