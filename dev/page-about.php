<?php
/*
Template Name: Page About Us
*/
?>
<?php get_header(); ?>
<section class="aboutCover overlappedImage" style="background-image: url(<?php the_field('cover_background_image'); ?>);">
	<div class="imageOvellay"></div>
	<div class="sectionContent">
		<div class="container">
			<div class="homeCoverTitles" data-aos="fade-up">
				<h1><?php the_field('cover_heading'); ?></h1>
				<h2><?php the_field('cover_sub-heading'); ?></h2>
			</div>
		</div>
	</div>
</section>
<main class="aboutPage">
	<section class="coverBox">
		<div class="elipses">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/elipses.png" alt="">
		</div>
		<div class="coverBoxContent">
			<div class="container" data-aos="fade-up">
				<div class="aboutCoverBoxPhoto" style="background-image: url('<?php the_field('about_photo'); ?>');">
					<div class="content"></div>
				</div>
				<div class="aboutCoverBoxText">
					<ul>
						<?php 
							if( have_rows('about_topics') ):
								while( have_rows('about_topics') ) : the_row(); ?>
									<li>
										<h3><?php the_sub_field('about_topic_title'); ?></h3>
										<p><?php the_sub_field('about_topic_copy'); ?></p>
									</li>
								<?php endwhile;
							endif;
						?>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<section class="aboutTeam">
		<div class="container">
			<div class="aboutTeamTitle">
				<h3>Meet the leadership team</h3>
			</div>
			<ul>
				<?php 
					if( have_rows('team') ):
						while( have_rows('team') ) : the_row(); ?>
							<li class="aboutTeamMember" data-aos="fade-up">
								<div class="aboutTeamMemberPhoto" style="background-image: url('<?php the_sub_field('team_member_photo'); ?>');">
									<div class="content"></div>
								</div>
								<div class="aboutTeamMemberText">
									<h4 class="aboutTeamMemberName">
										<?php the_sub_field('team_member_name'); ?>
									</h4>
									<h5 class="aboutTeamMemberJob">
										<?php the_sub_field('team_member_job'); ?>
									</h5>
									<div class="aboutTeamMemberCopy">
										<?php the_sub_field('team_member_copy'); ?>
									</div>
									<div class="aboutTeamMemberSocial">
										<?php if( get_sub_field('team_member_linkedin') ): ?>
											<a href="<?php the_sub_field('team_member_linkedin'); ?>" target="_blank">
												<i class="fa fa-linkedin-square" aria-hidden="true"></i>
											</a>
										<?php endif; ?>
										<?php if( get_sub_field('team_member_email') ): ?>
										<a href="mailto:<?php the_sub_field('team_member_email'); ?>" target="_blank">
											<i class="fa fa-envelope" aria-hidden="true"></i>
										</a>
										<?php endif; ?>
									</div>
								</div>
							</li>
						<?php endwhile;
					endif;
				?>
			</ul>
		</div>
	</section>
	<section class="aboutTestimonials">
		<div class="elipses">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/elipses.png" alt="">
		</div>
		<div class="container" data-aos="fade-up">
			<div class="aboutTestimonialsTitle">
				<h3>Testimonials</h3>
			</div>
			<div class="aboutTestimonialsWrapper">
				<div class="flexslider">
					<ul class="slides">
						<?php 
							if( have_rows('testimonials') ):
								while( have_rows('testimonials') ) : the_row(); ?>
									<li>
										<div class="aboutTestimonialsBox">
											<div class="aboutTestimonialsText">
												<div class="aboutTestimonialsCopy">
													<?php the_sub_field('testimonial_copy'); ?>
												</div>
												<div class="aboutTestimonialsName">
													- <?php the_sub_field('testimonial_name'); ?>, <?php the_sub_field('testimonial_company'); ?>
												</div>
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
	<section class="lastCta" style="background-image: url(<?php the_field('last_cta_background_image'); ?>);">
		<div class="container" data-aos="fade-up">
			<h2><?php the_field('last_cta_background_copy'); ?></h2>
			<a href="<?php echo site_url();?>/contact/" class="btn">Schedule your free consultation</a>
		</div>
	</section>
</main>
<?php get_footer(); ?>		