<?php
/**
 * The template part for displaying results in search pages
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since From Below Studio Theme 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a class="heading-13" href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header><!-- .entry-header -->

	<?php frombelowstudiotheme_post_thumbnail(); ?>

	<?php frombelowstudiotheme_excerpt(); ?>

	<?php if ( 'post' === get_post_type() ) : ?>

		<footer class="entry-footer">
			<?php frombelowstudiotheme_entry_meta(); ?>
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'frombelowstudiotheme' ),
						get_the_title()
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
			
		</footer><!-- .entry-footer -->

	<?php else : ?>

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
		<div class="text-block-9-centered">Reach out for promo and more: </div>
      <div class="_404-social"><a href="https://facebook.com/frombelowstudio" class="link-14"></a> | <span class="link-13"></span><a href="https://twitter.com/frombelowstudio" target="_blank" class="link-13"></a> | <a href="https://instagram.com/frombelowstudio" target="_blank" class="link-15"></a></div>
	<?php endif; ?>
</article><!-- #post-## -->

