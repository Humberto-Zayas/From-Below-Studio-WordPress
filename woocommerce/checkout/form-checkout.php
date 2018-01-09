<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

wc_print_notices();

//do_action( 'woocommerce_before_checkout_form', $checkout ); //og spot

// If checkout registration is disabled and not logged in, the user cannot checkout
if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
	echo apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) );
	return;
}

?>
<div class="fbs-container">
	<?php if(is_user_logged_in()):?>
	<?php else:?>
	<p class="form-row form-row-wide create-account">
		<label class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
			<input class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox" id="createaccount" <?php checked( ( true === $checkout->get_value( 'createaccount' ) || ( true === apply_filters( 'woocommerce_create_account_default_checked', false ) ) ), true ) ?> type="checkbox" name="createaccount" value="1" /> <span><?php _e( '<span>&#xf115;</span> Want to save all your info and recordings? <span>Create an account.</span>', 'woocommerce' ); ?></span>
		</label>
	</p>

	<div class="create-account">
		<p>Choose a username and password to access your orders, files and more.</p>
		<?php foreach ( $checkout->get_checkout_fields( 'account' ) as $key => $field ) : ?>
			<?php woocommerce_form_field( $key, $field, $checkout->get_value( $key ) ); ?>
		<?php endforeach; ?>
		<div class="clear"></div>
	</div>


<?php 

// if ( is_user_logged_in() || 'no' === get_option( 'woocommerce_enable_checkout_login_reminder' ) ) {



// 	return;
// }

$info_message  = apply_filters( 'woocommerce_checkout_login_message', __( 'Returning customer?', 'woocommerce' ) );
$info_message .= ' <a href="#" class="showlogin">' . __( 'Click here to login', 'woocommerce' ) . '</a>';
wc_print_notice( $info_message, 'notice' );

woocommerce_login_form(
	array(
		'message'  => __( 'If you have shopped with us before, please enter your details in the boxes below. If you are a new customer, please proceed to the Billing &amp; Shipping section.', 'woocommerce' ),
		'redirect' => wc_get_page_permalink( 'checkout' ),
		'hidden'   => true,
	)
);
				;?>
				<?php endif;?>

<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">

	<?php if ( $checkout->get_checkout_fields() ) : ?>

		<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

		<div class="col2-set" id="customer_details">
			<div class="col-1">
				<?php do_action( 'woocommerce_checkout_billing' ); ?>
				<?php do_action( 'woocommerce_checkout_shipping' ); //new spot ?>
			</div>

			<div class="col-2">
				<?php// do_action( 'woocommerce_checkout_shipping' ); //og spot ?>
				<h3 id="order_review_heading"><?php _e( 'Session Details', 'woocommerce' ); ?></h3>

				<div class="clear">
					<?php 
						wc_print_notices();
						do_action( 'woocommerce_before_checkout_form', $checkout ); //new spot
					?>
				</div>

				<?php do_action( 'woocommerce_checkout_before_order_review' ); //new spot ?>

				<div id="order_review" class="woocommerce-checkout-review-order">
					<?php do_action( 'woocommerce_checkout_order_review' ); //new spot ?>
				</div>

				<?php do_action( 'woocommerce_checkout_after_order_review' ); //new spot ?>
			</div>
		</div>

		<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

	<?php endif; ?>

	<!-- <h3 id="order_review_heading"><?php //_e( 'Your order', 'woocommerce' ); ?></h3> --> <!-- old order heading -->

	<?php //do_action( 'woocommerce_checkout_before_order_review' ); //og spot ?>

	<div id="order_review" class="woocommerce-checkout-review-order">
		<?php //do_action( 'woocommerce_checkout_order_review' ); //og spot ?>
	</div>

	<?php //do_action( 'woocommerce_checkout_after_order_review' ); //og spot ?>

</form>
</div>
<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
