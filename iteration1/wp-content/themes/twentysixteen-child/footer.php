<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

	</div><!-- .site-inner -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		
		<div class="footer_area clear">
			<div class="site-inner clear">
				<div class="col">
					<div class="content_f">
					<h3>Contact Us</h3>
					<p>Telephone: <a href="tel:09175208040">+09175208040</a></p>
					<p>Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Makati City</p>
					</div>
				</div>
				<div class="col">
					<div class="content_f">
					<h3>Social Links</h3>
					<ul class="social_links">
						<li><a href=""><i class="fa fa-facebook-square"></i></a></li>
						<li><a href=""><i class="fa fa-twitter-square"></i></a></li>
						<li><a href=""><i class="fa fa-instagram"></i></a></li>
						<li><a href=""><i class="fa fa-google-plus-square"></i></a></li>
					</ul>
					</div>
				</div>
				<div class="col">
					<div class="content_f">
					<h3>Subscribe</h3>
					<?php echo do_shortcode('[email-subscribers namefield=”YES” group=”Public”]');?>
					<p>Stay connected</p>
					</div>
				</div>
			</div>
		</div>
		<div class="footer_bottom">&copy; Through the eyes 2018</div>
	</footer><!-- .site-footer -->
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>
