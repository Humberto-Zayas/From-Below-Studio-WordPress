<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since From Below Studio Theme 1.0
 */

get_header(); ?>

<?php// if (is_page(array('Cart', 'Checkout'))):?>
<!-- <div id="primary" class="fbs-container"> -->
<?php// else:?>
<div id="primary" class="content-area">
<?php// endif;?>
	<main id="main" class="site-main" role="main">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			if (is_front_page()) {
				get_template_part( 'template-parts/content', 'home' ); //new
			} else {
				get_template_part( 'template-parts/content', 'page' );
			}
			
			// Include the page content template.
			//get_template_part( 'template-parts/content', 'page' ); //old

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			// End of the loop.
		endwhile;
		?>

	</main><!-- .site-main -->

	<?php //get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
