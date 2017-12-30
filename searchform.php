<?php
/**
 * Template for displaying search forms in From Below Studio Theme
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since From Below Studio Theme 1.0
 */
?>

<form role="search" method="get" class="w-form search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'frombelowstudiotheme' ); ?></span>
		<input type="search" class="search-input w-input search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'frombelowstudiotheme' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	</label>
	<button type="submit" class="fbs-button search-submit"><span class="text-span-32"> </span><span class="screen-reader-text"><?php echo _x( 'Search', 'submit button', 'frombelowstudiotheme' ); ?></span>Search</button>
	<a style="text-decoration: none;" href="<?php echo home_url();?>" class="fbs-button">Back Home</a>
</form>
