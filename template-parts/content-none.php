<?php
/**
 * The template part for displaying a message that posts cannot be found
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since From Below Studio Theme 1.0
 */
?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="heading-13 page-title"><?php _e( 'Nothing Found', 'frombelowstudiotheme' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p class="text-block-9-centered"><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'frombelowstudiotheme' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p class="text-block-9-centered"><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'frombelowstudiotheme' ); ?></p>
			<?php get_search_form(); ?>
			<div class="text-block-9-centered">Reach out for promo and more: </div>
      		<div class="_404-social"><a href="https://facebook.com/frombelowstudio" class="link-14"></a> | <span class="link-13"></span><a href="https://twitter.com/frombelowstudio" target="_blank" class="link-13"></a> | <a href="https://instagram.com/frombelowstudio" target="_blank" class="link-15"></a></div>

		<?php else : ?>

			<p class="text-block-9-centered"><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'frombelowstudiotheme' ); ?></p>
			<?php get_search_form(); ?>
			<div class="text-block-9-centered">Reach out for promo and more: </div>
      		<div class="_404-social"><a href="https://facebook.com/frombelowstudio" class="link-14"></a> | <span class="link-13"></span><a href="https://twitter.com/frombelowstudio" target="_blank" class="link-13"></a> | <a href="https://instagram.com/frombelowstudio" target="_blank" class="link-15"></a></div>

		<?php endif; ?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
