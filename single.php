<?php
/**
 * The template for displaying all single posts.
 *
 * @package wordpress-dealership
 */

get_header(); ?>
	
	<div class="row" data-equalizer><!-- Foundation .row start -->
		<div class="small-12 columns" data-equalizer-watch><!-- Foundation .columns start -->
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'single' ); ?>

					<?php wordpress_dealership_post_nav(); ?>

					<?php
						// If comments are open or we have at least one comment, load up the comment template
						if ( comments_open() || '0' != get_comments_number() ) :
							comments_template();
						endif;
					?>

				<?php endwhile; // end of the loop. ?>

				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!-- Foundation .columns end -->
	</div><!-- Foundation .row end -->
	
<?php get_footer(); ?>