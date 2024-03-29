<?php
/**
 * My Account Dashboard
 *
 * Shows the first intro screen on the account dashboard.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/dashboard.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @author      WooThemes
 * @package     WooCommerce/Templates
 * @version     2.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
<!-- <img src=" --><?php //echo get_bloginfo('template_url');?><!-- /images/100x100.png" class="image-4"> -->
<img class="image-4" style="width: 100px;" src="http://localhost:8888/frombelowstudio/wp-content/uploads/2018/08/default-fbs.png">
<div class="div-block-54">
	<h1 class="heading-13-copy"><?php
		/* translators: 1: user display name 2: logout url */
		printf(
			__( '%1$s <span style="font-size: small;">(not %1$s? <a style="color: #cf2441" href="%2$s">Log out</a>)</span>', 'woocommerce' ),
			'' . esc_html( $current_user->display_name ) . '',
			esc_url( wc_logout_url( wc_get_page_permalink( 'myaccount' ) ) )
		);
	?></h1>

	

	<p class="heading-13-copy-copy"><?php
		echo $current_user->user_firstname . "\n" . ' ' . $current_user->user_lastname . "\n"
	?></p>

	<p class="heading-13-copy-copy"><?php
		echo $current_user->user_email . "\n"
	?></p>

	<p><?php 
		printf(
			__( 'From your account dashboard you can view your <a style="color: #cf2441" href="%1$s">recent orders</a>, manage your <a style="color: #cf2441" href="%2$s">shipping and billing addresses</a> and <a style="color: #cf2441" href="%3$s">edit your password and account details</a>.', 'woocommerce' ),
			esc_url( wc_get_endpoint_url( 'orders' ) ),
			esc_url( wc_get_endpoint_url( 'edit-address' ) ),
			esc_url( wc_get_endpoint_url( 'edit-account' ) )
		);
	?></p>

	<?php printf(
						__( '<a href="%1$s" class="fbs-button">Edit Profile</a>.', 'woocommerce' ),
						esc_url( wc_get_endpoint_url( 'edit-account' ) )
					);?>
	              	<!-- Edit Profile -->


	<p><?php /*
		printf(
			__( 'From your account dashboard you can view your <a href="%1$s">recent orders</a>, manage your <a href="%2$s">shipping and billing addresses</a> and <a href="%3$s">edit your password and account details</a>.', 'woocommerce' ),
			esc_url( wc_get_endpoint_url( 'orders' ) ),
			esc_url( wc_get_endpoint_url( 'edit-address' ) ),
			esc_url( wc_get_endpoint_url( 'edit-account' ) )
		);
	*/?></p>
</div>
<?php
	/**
	 * My Account dashboard.
	 *
	 * @since 2.6.0
	 */
	do_action( 'woocommerce_account_dashboard' );

	/**
	 * Deprecated woocommerce_before_my_account action.
	 *
	 * @deprecated 2.6.0
	 */
	do_action( 'woocommerce_before_my_account' );

	/**
	 * Deprecated woocommerce_after_my_account action.
	 *
	 * @deprecated 2.6.0
	 */
	do_action( 'woocommerce_after_my_account' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
