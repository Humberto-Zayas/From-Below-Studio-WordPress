<?php
/**
 * The template for displaying search results pages
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since From Below Studio Theme 1.0
 */

get_header(); ?>
<div class="home" data-ix="navbar-desktop-scrolled-reveal" id="hero">
	<div class="search_result_section">
		<div class="fbs-container">
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="heading-13"><?php printf( __( 'Search Results for: <span style="color: #cf2441; font-weight: 500">%s</span>', 'frombelowstudiotheme' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'frombelowstudiotheme' ),
				'next_text'          => __( 'Next page', 'frombelowstudiotheme' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'frombelowstudiotheme' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</div>
	</div><!-- .content-area -->
</div>

<?php // contact form
  include(get_template_directory() . "/template-parts/partials/contact-form-template.php"); 
?>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
