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
			<div class="small-12 columns"><!-- Foundation .columns start -->
				<div class="site-info">
          <span>&copy; <?php bloginfo( 'name' ); ?></span>
					<?php printf( __( '%1$s', 'wordpress-dealership' ), '<a href="http://dealerfire.com" target="_blank">Dealership websites by DEALERFIRE</a>' ); ?>
				</div><!-- .site-info -->
			</div><!-- Foundation .columns end -->
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
