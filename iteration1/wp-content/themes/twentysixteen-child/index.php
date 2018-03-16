<?php get_header(); ?>
<div id="black_bg"></div>
<div class="banner_area">
	<div class="banner_img">
		<img class="big_pic" src="<?php echo get_stylesheet_directory_uri() ?>/images/Cinemalaya.png">
	</div>
	<div class="slogan">
		<h1>Cinemalaya Philippine Independent Film Festival</h1>
	    <p>For the last three years we have been selecting the best Soviet and Russian movies in order to make them available for our viewers. </p>
	</div>
</div>
<div class="featured_cont ">
<h2><span>Most</span> Featured Articles</h2>

	<ul class="slider_cont_feature">

		<?php 
			$args_1 = array(
				'category_name' => 'featuredarticle',
				'order' => 'ASC'
				);
			$custom_query_1 = new WP_query($args_1);
			while ( $custom_query_1->have_posts() ): $custom_query_1->the_post();?>
			
			<li>
				<a href="<?php the_permalink(); ?>">
					<?php echo get_the_post_thumbnail()?>
					<span><?php the_title(); ?></span>
				</a>
			</li>
		<?php
			endwhile;
		?>
	</ul>

</div>

<div class="normal_cont">
<h2><span>Other</span> Articles</h2>
<ul class="slider_cont_normal">

		<?php 
			$args_2 = array(
				'category_name' => 'normalarticle',
				'order' => 'ASC'
				);
			$custom_query_2 = new WP_query($args_2);
			while ( $custom_query_2->have_posts() ): $custom_query_2->the_post();?>
			<li>
				<a href="<?php the_permalink(); ?>">
					<?php echo get_the_post_thumbnail()?>
					<span><?php the_title(); ?></span>
				</a>
			</li>
		<?php
			endwhile;
		?>
	</ul>
</div>

















<?php get_footer(); ?>