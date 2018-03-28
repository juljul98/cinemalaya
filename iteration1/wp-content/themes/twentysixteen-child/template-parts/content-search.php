<?php
/**
 * The template part for displaying results in search pages
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="row" style="margin-bottom: 20px;">
	<div class="col-md-4">
	<?php twentysixteen_post_thumbnail(); ?>
	</div>
	<div class="col-md-7">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<p><?php echo get_field('article_short_description'); ?></p>
		<p class="author"><?php echo get_field('article_author'); ?></p>
	</div>
	</div>
</article><!-- #post-## -->