<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
get_header(); ?>
<div class="site-inner">
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="row">
			<div class="col-md-8 left_bd">
		
				<?php
				// Start the loop.
				while ( have_posts() ) : the_post();
					// Include the single post content template.
					get_template_part( 'template-parts/content', 'single' );
	// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			if ( is_singular( 'attachment' ) ) {
				// Parent post navigation.
				the_post_navigation( array(
					'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'twentysixteen' ),
				) );
			} 
		
				endwhile;
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

	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>