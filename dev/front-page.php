<?php
/*
Template Name: Home Page
*/
?>
<?php get_header(); ?>
<section class="homeCover overlappedImage" style="background-image: url(<?php $imgArr = get_field('cover_background_images'); echo teste($imgArr); ?>);">
	<div class="imageOvellay"></div>
	<div class="sectionContent">
		<div class="container">
			<div class="homeCoverTitles" data-aos="fade-up">
				<h1><?php the_field('cover_heading'); ?></h1>
				<h2><?php the_field('cover_sub-heading'); ?></h2>
				<a href="<?php echo site_url();?>/contact/" class="btn">Schedule your free consultation</a>
			</div>
			<div class="homeCoverServices" data-aos="fade-up">
				<?php 
					if( have_rows('cover_services') ):
						while( have_rows('cover_services') ) : the_row(); ?>
							<div class="homeCoverService">
								<h3 class="homeCoverServiceTitle">
									<?php the_sub_field('cover_service_title'); ?>
								</h3>
								<div class="homeCoverServiceText">
									<p><?php the_sub_field('cover_service_copy'); ?></p>
									<?php 
										$link = '';
										$posts = get_sub_field('cover_services_link');
										if( $posts ): 
											foreach( $posts as $post): 
												setup_postdata($post); 
												$link = get_the_permalink();
											endforeach; 
											wp_reset_postdata(); 
										endif; 
									?>
									<a href="<?php echo $link;  ?>" class="link">
										Learn more <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
									</a>
								</div>
							</div>
						<?php endwhile;
					endif;
				?>
			</div>
			<a href="<?php echo site_url();?>/packages-services/" class="btn btn-dark-blue" data-aos="fade-up">View all of our services</a>
		</div>
	</div>
</section>
<main class="frontPage">
	<section class="coverBox homeIndustries">
		<div class="elipses">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/elipses.png" alt="">
		</div>
		<div class="coverBoxContent">
			<div class="container">
				<div class="homeIndustriesTitle" data-aos="fade-up">
					<h2><?php the_field('home_industries_heading'); ?></h2>
					<p><?php the_field('home_industries_sub-heading'); ?></p>
				</div>
				<div class="homeIndustriesServices" data-aos="fade-up">
					<?php 
						if( have_rows('home_industries') ):
							while( have_rows('home_industries') ) : the_row(); ?>
								<div class="homeIndustriesService">
									<?php 
										$link = '';
										$posts = get_sub_field('industry_link');
										if( $posts ): 
											foreach( $posts as $post): 
												setup_postdata($post); 
												$link = get_the_permalink();
											endforeach; 
											wp_reset_postdata(); 
										endif; 
									?>
									<a href="<?php echo $link; ?>">
										<div class="homeIndustriesIcon">
											<img src="<?php the_sub_field('industry_icon'); ?>" alt="<?php the_sub_field('industry_title'); ?>">
										</div>
										<div class="homeIndustriesText">
											<h3><?php the_sub_field('industry_title'); ?></h3>
											<p><?php the_sub_field('industry_copy'); ?></p>
										</div>
									</a>
								</div>
							<?php endwhile;
						endif;
					?>
				</div>
				<a href="<?php echo site_url();?>/packages-services/" class="btn btn-dark-blue">Learn how we can help you</a>
			</div>
		</div>
	</section>
	<section class="homePartnerships" data-aos="fade-up">
		<div class="container">
			<div class="homePartnershipsTitle">
				<h2><?php the_field('partnerships_heading'); ?></h2>
			</div>
			<div class="homePartnershipsSlider">
				<div class="flexslider carousel">
					<ul class="slides">
						<?php 
							if( have_rows('partnerships') ):
								while( have_rows('partnerships') ) : the_row(); ?>
									<li>
										<img src="<?php the_sub_field('partner_logo'); ?>" />
									</li>
								<?php endwhile;
							endif;
						?>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<section class="homeEmailDownload">
		<div class="container">
			<div class="homeEmailDownloadText" data-aos="fade-up">
				<h3><?php the_field('e-book_download_title'); ?><br><span>Get your free resource</span></h3>
				<p><?php the_field('e-book_download_copy'); ?></p>
			</div>
			<div class="homeEmailDownloadForm" data-aos="fade-up">
				<?php echo do_shortcode('[formidable id=6]'); ?>
			</div>
		</div>
	</section>
	<section class="homeBlog">
		<div class="elipses">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/elipses.png" alt="">
		</div>
		<div class="container">
			<div class="homeBlogTitle" data-aos="fade-up">
				<h2>Recent Blogs</h2>
			</div>
			<div class="homeBlogArticles">
				<?php
				$args = array(
					'posts_per_page' => '3',
				);

				$query = new WP_Query( $args );

				if ( $query->have_posts() ) {
					while ( $query->have_posts() ) {
						$query->the_post();?>
						<article style="background-image: url('<?php the_post_thumbnail_url( $size ); ?>  ');" data-aos="fade-up">
							<a href="<?php the_permalink(); ?>">
								<div class="homeArticleMask"></div>
								<div class="homeArticleText">
									<div class="homeArticleTextDate">
										<?php $post_date = get_the_date(); echo $post_date; ?>
									</div>
									<div class="homeArticleTextTitle">
										<h3><?php the_title(); ?></h3>
									</div>
									<div class="homeArticleTextTitleIntro">
										<?php the_excerpt(); ?>
									</div>
									<div class="homeArticleTextTitleLink">
										Read more <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

									</div>
								</div>
							</a>
						</article>
				<?php	
					}
				} 
				wp_reset_postdata();
				?>
			</div>
			<a href="<?php echo site_url();?>/blog/" class="btn btn-dark-blue">View more blogs</a>
		</div>
	</section>
	<section class="lastCta" style="background-image: url(<?php the_field('home_last_background_image'); ?>);">
		<div class="container" data-aos="fade-up">
			<h2><?php the_field('home_last_cta_title'); ?></h2>
			<a href="<?php echo site_url();?>/contact/" class="btn">Schedule your free consultation</a>
		</div>
	</section>
</main>
<?php get_footer(); ?>		