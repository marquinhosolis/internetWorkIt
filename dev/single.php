<?php get_header(); ?>
<div class="blogPageBg">
	<div class="blogBgImage" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/single-post-bg.png);"></div>
	<div class="blogPageBgMaskOne"></div>
	<div class="blogPageBgMaskTwo"></div>
</div>
<main class="singlePage">
	<div class="container">
		<!-- Começa o Loop. -->
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<article>
				<div class="singlePostImage" style="background-image: url('<?php the_post_thumbnail_url( $size ); ?>  ');" data-aos="fade-up">
					<div class="content"></div>
				</div>
				<div class="singlePostRight" data-aos="fade-up">
					<div class="singlePostDate">
						<?php the_date(); ?>
					</div>
					<div class="singlePostTitle">
						<h1><?php the_title(); ?></h1>
					</div>
				</div>
				<div class="singlePostContent" data-aos="fade-up">
					<?php the_content(); ?>
				</div>
				<div class="singlePostNav" data-aos="fade-up">
					<div class="previous">
						<?php previous_post_link('%link', '<i class="fa fa-angle-left" aria-hidden="true"></i> Previous blog', FALSE); ?> 
					</div>
					<div class="next">
						<?php next_post_link('%link', 'Next blog <i class="fa fa-angle-right" aria-hidden="true"></i>', FALSE); ?> 
					</div>
				</div>
			</article>
		<?php endwhile; ?>
		<?php endif; ?>
		<div class="singlePostBack">
			<a href="<?php echo site_url(); ?>/blog/"><i class="fa fa-long-arrow-left" aria-hidden="true"></i>
				Back to all blogs</a>
		</div>
	</div>
	<section class="lastCta" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/cta-bg.png);">
		<div class="container" data-aos="fade-up">
			<h2>We want to help your business succeed as your trusted IT partner.</h2>
			<a href="<?php echo site_url();?>/contact/" class="btn">Schedule your free consultation</a>
		</div>
	</section>
</main>


<?php get_footer(); ?>		