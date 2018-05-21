<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since From Below Studio Theme 1.0
 */
?>

<div style="padding-top: 70px" class="fbs-container">
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
      <?php if (is_woocommerce() || is_cart() || is_checkout() || 'my-account') {
        # code...
      } else {
        the_title( '<h1 class="entry-title">', '</h1>' );
      }
      ?>
    </header>

    <?php //frombelowstudiotheme_post_thumbnail(); ?>

    <div class="entry-content">
      
      <?php

      //the_content();

      /*
      wp_link_pages( array(
        'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'frombelowstudiotheme' ) . '</span>',
        'after'       => '</div>',
        'link_before' => '<span>',
        'link_after'  => '</span>',
        'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'frombelowstudiotheme' ) . ' </span>%',
        'separator'   => '<span class="screen-reader-text">, </span>',
      ) )
      */
      ?>
    
    
      <?php the_content(); ?>
    </div>
    
    <?php
      edit_post_link(
        sprintf(
          /* translators: %s: Name of current post */
          __( 'Edit<span class="screen-reader-text"> "%s"</span>', 'frombelowstudiotheme' ),
          get_the_title()
        ),
        '<footer class="entry-footer"><span class="edit-link">',
        '</span></footer><!-- .entry-footer -->'
      );
    ?>

  </article>
</div>
