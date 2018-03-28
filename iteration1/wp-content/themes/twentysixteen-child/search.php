<?php
/**
 * The template for displaying search results pages
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<div class="site-inner">
	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<header class="page-header">
				<h1><?php printf( __( 'Search Results for: %s', 'twentysixteen' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
			</header><!-- .page-header -->
			<div class="row">
			<div class="col-md-8 left_bd">
		<?php if ( have_posts() ) : ?>



			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentysixteen' ),
				'next_text'          => __( 'Next page', 'twentysixteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

			</div>
			<div class="col-md-4">
					<h3 style="margin: 0 0 10px 5px;">You may also like...</h3>
					<?php
						$args_1 = array(
							'category_name' => 'article',
							'tag' => 'side-left',
							'order' => 'ASC'
							);
						$custom_query_1 = new WP_query($args_1);
						while ( $custom_query_1->have_posts() ): $custom_query_1->the_post(); ?>
							<div class="home_item col-md-12 col-xs-6"><a href="<?php the_permalink(); ?>">	
							<div class="row">
								<div class="col-md-4"> 
									<p><?php echo get_the_post_thumbnail(); ?></p>
								</div>
								<div class="col-md-8">
									<p class="like_title"><?php the_title(); ?></p>
									<p><?php echo get_field('article_short_description'); ?></p>
									<p class="author"><?php echo get_field('article_author'); ?></p>
								</div>
							</div>
							</a></div>
						<?php
						endwhile;
					?>
			</div>
		</div>
		</main><!-- .site-main -->
	</section><!-- .content-area -->
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
