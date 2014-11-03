<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package wordpress-dealership
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="row"><!-- Foundation .row start -->
			<div class="small-12 medium-6 columns"><!-- Foundation .columns start -->
				<div class="site-info">
          <p>&copy; <?php bloginfo( 'name' ); ?>
					<?php printf( __( '%1$s', 'wordpress-dealership' ), ' - <a href="http://dealerfire.com" target="_blank" class="dark-link">Dealership websites by DEALERFIRE</a>' ); ?>
          </p>
				</div><!-- .site-info -->
			</div><!-- Foundation .columns end -->
      <div class="small-12 medium-6 columns social-icons">
        <a href="http://www.facebook.com/" target="_blank" class="dark-link"><i class="fi-social-facebook social-icon"></i></a>
        <a href="http://www.twitter.com/" target="_blank" class="dark-link"><i class="fi-social-twitter social-icon"></i></a>
        <a href="http://www.flickr.com/" target="_blank" class="dark-link"><i class="fi-social-flickr social-icon"></i></a>
        <a href="http://www.foursquare.com/" target="_blank" class="dark-link"><i class="fi-social-foursquare social-icon"></i></a>
        <a href="http://plus.google.com/" target="_blank" class="dark-link"><i class="fi-social-google-plus social-icon"></i></a>
        <a href="http://www.instagram.com/" target="_blank" class="dark-link"><i class="fi-social-instagram social-icon"></i></a>
        <a href="http://www.linkedin.com/" target="_blank" class="dark-link"><i class="fi-social-linkedin social-icon"></i></a>
        <a href="http://www.pinterest.com/" target="_blank" class="dark-link"><i class="fi-social-pinterest social-icon"></i></a>
        <a href="http://www.vimeo.com/" target="_blank" class="dark-link"><i class="fi-social-vimeo social-icon"></i></a>
        <a href="http://www.youtube.com/" target="_blank" class="dark-link"><i class="fi-social-youtube social-icon"></i></a>
      </div>
		</div><!-- Foundation .row end -->
	</footer><!-- #colophon -->
</div><!-- #page -->

  <!-- close the off-canvas menu -->
	<a class="exit-off-canvas"></a>

	</div><!-- .inner-wrap -->
</div><!-- .off-canvas-wrap -->

<?php wp_footer(); ?>

</body>
</html>
