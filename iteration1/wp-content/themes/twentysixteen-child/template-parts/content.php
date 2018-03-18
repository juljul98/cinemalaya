<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
			<span class="sticky-post"><?php _e( 'Featured', 'twentysixteen' ); ?></span>
		<?php endif; ?>
	</header><!-- .entry-header -->
	<div class="row">
	<div class="col-md-4">
	<?php twentysixteen_post_thumbnail(); ?>
	</div>
	<div class="col-md-7">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<p class="author"><?php echo get_field('article_author'); ?></p>
	</div>
	</div>
</article><!-- #post-## -->
