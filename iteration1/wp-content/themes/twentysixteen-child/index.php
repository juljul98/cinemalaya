<?php get_header(); ?>
<div class="home_page">
<div class="row">
	<div class="col-md-6 col-md-push-3">

		<?php
			$args_2 = array(
				'category_name' => 'article',
				'tag' => 'feature-articles',
				'order' => 'ASC'
				);
			$custom_query_2 = new WP_query($args_2);
			while ( $custom_query_2->have_posts() ): $custom_query_2->the_post(); ?>
				<div class="home_item feature_area"><a href="<?php the_permalink(); ?>">	 
					<?php echo get_the_post_thumbnail(); ?>
					<p><?php the_title(); ?></p>
					<p class="author"><?php echo get_field('article_author'); ?></p>
				</a></div>
			<?php
				endwhile;
			?>
	</div>
	<div class="col-md-3 col-md-pull-6">
		<?php
			$args_1 = array(
				'category_name' => 'article',
				'tag' => 'side-left',
				'order' => 'ASC'
				);
			$custom_query_1 = new WP_query($args_1);
			while ( $custom_query_1->have_posts() ): $custom_query_1->the_post(); ?>
				<div class="home_item col-md-12 col-xs-6"><a href="<?php the_permalink(); ?>">	 
					<?php echo get_the_post_thumbnail(); ?>
					<p><?php the_title(); ?></p>
					<p class="author"><?php echo get_field('article_author'); ?></p>	
				</a></div>
			<?php
				endwhile;
			?>
	</div>

	<div class="col-md-3 pull-right">
		<?php
			$args_3 = array(
				'category_name' => 'article',
				'tag' => 'side-right',
				'order' => 'ASC'
				);
			$custom_query_3 = new WP_query($args_3);
			while ( $custom_query_3->have_posts() ): $custom_query_3->the_post(); ?>
				<div class="home_item col-md-12 col-xs-6"><a href="<?php the_permalink(); ?>">	 
					<?php echo get_the_post_thumbnail(); ?>
					<p><?php the_title(); ?></p>
					<p class="author"><?php echo get_field('article_author'); ?></p>	
				</a></div>
			<?php
				endwhile;
			?>
	</div>
</div>
<h1>Editor's Pick</h1>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="col-sm-4 editor_pick_cont">
				<div class="icon"></div>
				<p>Ang saya matanggap LGBT feature in cinemalaya</p>
			</div>
				<div class="col-sm-4 editor_pick_cont">
				<div class="icon"></div>
				<p>philippine poverty shown in cinemalaya films</p>
			</div>
			<div class="col-sm-4 editor_pick_cont">
				<div class="icon"></div>
				<p>an in depth me aning of cinemalaya independent film festival</p>
			</div>
		</div>
	</div>
	<div class="container row editor_top_picks">
		<div class="col-md-9 left_bd">
			<?php
			$args_4 = array(
				'category_name' => 'article',
				'tag' => 'top-picks',
				'order' => 'ASC'
				);
			$custom_query_4 = new WP_query($args_4);
			while ( $custom_query_4->have_posts() ): $custom_query_4->the_post(); ?>
				<div class="row">
					<a href="<?php the_permalink(); ?>">
						<div class="col-md-5"><?php echo get_the_post_thumbnail(); ?></div>
						<div class="col-md-7 details">
							<p class="title entry-title"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></p>
							<p class="author"><?php echo get_field('article_author'); ?></p>
						</div>
					</a>
				</div>
						<?php
				endwhile;
			?>
		</div>
		<div class="col-md-3">
			
		</div>
	</div>
</div>
<?php get_footer(); ?> 