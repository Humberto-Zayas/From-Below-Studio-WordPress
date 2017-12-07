<?php
/**
 * Empty cart page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart-empty.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>
<div class="home" data-ix="navbar-desktop-scrolled-reveal" id="hero">
<div class="_404-section">
<div class="fbs-container">

<?php wc_print_notices();

/**
 * @hooked wc_empty_cart_message - 10
 */
do_action( 'woocommerce_cart_is_empty' );

if ( wc_get_page_id( 'shop' ) > 0 ) : ?>
	
	<p class="return-to-shop">
		<div class="fbs-button" data-ix="contact-reveal-6"><span class="text-span-12"></span> &nbsp;BOOK YOUR SESSION</div>
		<a style="text-decoration: none;" class="fbs-button" href="<?php echo esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'shop' ) ) ); ?>">
			<?php _e( 'BACK HOME', 'woocommerce' ) ?>
		</a>
	</p>
	
<?php endif; ?>
</div>
</div>
</div>