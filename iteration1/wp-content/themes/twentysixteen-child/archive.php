<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<div class="site-inner">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<header class="page-header">
			<h1><?php echo str_replace("Category: ", "", get_the_archive_title()); ?></h1>
		</header><!-- .page-header -->
		<div class="row">
			<div class="col-md-8 left_bd">

				<article>
					<?php
					if ( is_category('cinemalaya-independent-film-festival') ){
					?>
					<div class="col-md-6" style="padding-left: 0;">
						<img src="<?php echo site_url(). '/wp-content/themes/twentysixteen-child/images/1217.jpg'?>" alt="">
					</div>
				</br>
					<p>
						Independent Films are artistically produced. These independent filmmakers are in liberty to express their own views to their spectators through their films. There are a number of film festivals in the Philippines. One of them is the Cinemalaya Philippine Independent Film Festival. Cinemalaya was established in the year 2005. It is an annual event to showcase Filipino talent in filmmaking. The film entries that have been accepted by the selection committee of Cinemalaya are launched in the Cultural Center of the Philippines and selected participating malls. 
					</p>
					<p>
						One of the problems of Cinemalaya and independent films is the limited audience acquired to watch their films. The acknowledgement and influence is not as established compared to the mainstream movies produced in the country. Cinemalaya often times focus on the social concerns that are happening in the country. 
					</p>
					<p>
						These independent films can be a method in raising social awareness especially to the youth. There are a lot of stories that needed to be shared to the Filipino people. Independent films can be a strategy in seeking social awareness. Watching films often times leave an impact to their viewers either a filmmakers, a film enthusiast, or a just a person who happens to feast their eyes on the film. Independent cinemas such as Cinemalaya Film Festival entries simply call for recognition to the public. 
					</p>
					<br>
					<?php } ?>
				</article>




				<?php if ( have_posts() ) : ?>
					<?php
					// Start the Loop.
					while ( have_posts() ) : the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', get_post_format() );

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
	</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
