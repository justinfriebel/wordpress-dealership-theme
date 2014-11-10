<?php
/**
 * @package wordpress-dealership
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <?php
      
      if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
      
    ?>
    
    <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail( 'large' ); ?></a>
    
    <?php }
      
      the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
      
    ?>

    <?php if ( 'post' == get_post_type() ) : ?>
    <div class="entry-meta">
      <?php // wordpress_dealership_posted_on(); ?>
    </div><!-- .entry-meta -->
    <?php endif; ?>
  </header><!-- .entry-header -->

  <div class="entry-content">
    <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'wordpress-dealership' ) ); ?>
    <?php
      wp_link_pages( array(
        'before' => '<div class="page-links">' . __( 'Pages:', 'wordpress-dealership' ),
        'after'  => '</div>',
      ) );
    ?>
  </div><!-- .entry-content -->
</article><!-- #post-## -->
