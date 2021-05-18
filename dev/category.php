<?php get_header(); ?>
<div class="blogPageBg">
	<div class="blogBgImage" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/wp/blog-bg.png);"></div>
	<div class="blogPageBgMaskOne"></div>
	<div class="blogPageBgMaskTwo"></div>
</div>
<main class="blogPage">
	<section class="searchFilters">
		<div class="container">
			<div class="searchFiltersSearch">
				<form action="<?php echo site_url(); ?>/blog/" method="get">
					<input type="text" name="q" placeholder="Search">
					<button type="submit"><i class="fa fa-search" aria-hidden="true"></i>
					</button>
				</form>
			</div>
			<div class="searchFiltersDropdown">
				<a href="#" class="searchFiltersDropdownLink">Filter blogs by category <i class="fa fa-caret-down" aria-hidden="true"></i></a>
				<div class="searchFiltersDropdownList">
					<?php wp_list_cats('sort_column=name'); ?>
				</div>
			</div>
		</div>
	</section>
	<section class="blogSearchTerm">
		<div class="container">
			<?php $cat = single_cat_title("", false); ?>
			Showing results for: <span>"<?php echo $cat; ?>"</span>
		</div>
	</section>
	<section class="blogArticles">
		<div class="container">
			<?php
			$args = array(
				'posts_per_page' => '-1',
				's'              => $search,
				'category_name'  => $cat,
			);

			$query = new WP_Query( $args );

			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) {
					$query->the_post();?>

				<article class="blogPageArticle">
					<a href="<?php the_permalink(); ?>">
						<div class="blogPageArticlePhoto" style="background-image: url('<?php the_post_thumbnail_url( $size ); ?>  ');">
							<div class="content"></div>
						</div>
						<div class="blogPageArticleText">
							<div class="blogPageArticleTextDate">
								<?php $post_date = get_the_date('F n, Y'); echo $post_date; ?>
							</div>
							<div class="blogPageArticleTextTitle">
								<?php the_title(); ?>
							</div>
							<div class="blogPageArticleTextIntro">
								<?php the_excerpt(); ?>
							</div>
							<div class="blogPageArticleTextLink">
								<a href="<?php the_permalink(); ?>">Continue Reading ></a>
							</div>
						</div>
					</a>
				</article>
			<?php	
				}
			} else { ?>
			<div class="blogPageNoPosts">
				Sorry, no posts found.
			</div>
			<?php	
			}
			wp_reset_postdata();
			?>
			<div class="blogPageArticleLoadMore">
				<a href="" class="link">Load more <i class="fa fa-long-arrow-down" aria-hidden="true"></i>
				</a>
			</div>
		</div>
	</section>
</main>


<?php get_footer(); ?>		