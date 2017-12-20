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
<div class="booking-section">
    <!-- <span data-ix="booking-close" class="text-span-26"></span><br><span><span><span data-ix="booking-close" class="text-span-26"><br></span></span>
          </span> -->
    <?php echo do_shortcode('[product_page id="49"]'); ?>
   <!--  <div class="fbs-container">
      <div class="div-block-42"> -->
        
        <!-- <div class="div-block-52">
          <h1 class="calendar-title">October 2017</h1>
          <h1 class="calendar-left-arrow nav-link"></h1>
          <h1 class="calendar-right-arrow nav-link"></h1>
        </div>
        <div class="w-row">
          
          <div class="w-col w-col-2 w-col-small-2 w-col-tiny-2">
            <div class="list-item-2">SUN</div>
          </div>
          <div class="w-col w-col-2 w-col-small-2 w-col-tiny-2">
            <div class="list-item-2">MON</div>
          </div>
          <div class="w-col w-col-2 w-col-small-2 w-col-tiny-2">
            <div class="list-item-2">TUE</div>
          </div>
          <div class="w-col w-col-2 w-col-small-2 w-col-tiny-2">
            <div class="list-item-2">WED</div>
          </div>
          <div class="w-col w-col-2 w-col-small-2 w-col-tiny-2">
            <div class="list-item-2">THU</div>
          </div>
          <div class="w-col w-col-2 w-col-small-2 w-col-tiny-2">
            <div class="list-item-2">FRI</div>
          </div>
        </div>
        <div class="w-row">
         
          <div class="column-30 w-col w-col-2 w-col-small-2 w-col-tiny-2">
            <div class="text-block-32">1</div>
          </div>
          <div class="column-30 w-col w-col-2 w-col-small-2 w-col-tiny-2">
            <div class="text-block-32">2</div>
          </div>
          <div class="column-30 w-col w-col-2 w-col-small-2 w-col-tiny-2">
            <div class="text-block-32">3</div>
          </div>
          <div class="column-30 w-col w-col-2 w-col-small-2 w-col-tiny-2">
            <div class="text-block-32">4</div>
          </div>
          <div class="column-30 w-col w-col-2 w-col-small-2 w-col-tiny-2">
            <div class="text-block-32">5</div>
          </div>
          <div class="column-30 w-col w-col-2 w-col-small-2 w-col-tiny-2">
            <div class="text-block-32">6</div>
          </div>
        </div>
        <div class="w-row">
          <div class="column-30 w-col w-col-2 w-col-small-2 w-col-tiny-2">
            <div class="text-block-32">8</div>
          </div>
          <div class="column-30 w-col w-col-2 w-col-small-2 w-col-tiny-2">
            <div class="text-block-32">9</div>
          </div>
          <div class="column-30 w-col w-col-2 w-col-small-2 w-col-tiny-2">
            <div class="text-block-32">10</div>
          </div>
          <div class="column-30 w-col w-col-2 w-col-small-2 w-col-tiny-2">
            <div class="text-block-32">11</div>
          </div>
          <div class="column-31 w-col w-col-2 w-col-small-2 w-col-tiny-2">
            <div class="text-block-32-copy">12</div>
          </div>
          <div class="column-30 w-col w-col-2 w-col-small-2 w-col-tiny-2">
            <div class="text-block-32">13</div>
          </div>
        </div>
        <div class="div-block-50">
          <h1 class="calendar-date-title">October 12th, 2017</h1>
          <div class="div-block-51">
            <div class="text-block-33">8:00 am - 9:00 am</div>
            <div class="text-block-33">8:00 am - 9:00 am</div>
            <div class="text-block-33-copy">8:00 am - 9:00 am</div>
            <div class="text-block-33">8:00 am - 9:00 am</div>
            <div class="text-block-33">8:00 am - 9:00 am</div>
            <div class="text-block-33">8:00 am - 9:00 am</div>
            <div class="text-block-33">8:00 am - 9:00 am</div>
          </div>
        </div>
        <div class="w-row">
          <div class="column-30 w-col w-col-2 w-col-small-2 w-col-tiny-2">
            <div class="text-block-32">8</div>
          </div>
          <div class="w-col w-col-2 w-col-small-2 w-col-tiny-2">
            <div class="text-block-32">9</div>
          </div>
          <div class="w-col w-col-2 w-col-small-2 w-col-tiny-2">
            <div class="text-block-32">10</div>
          </div>
          <div class="w-col w-col-2 w-col-small-2 w-col-tiny-2">
            <div class="text-block-32">11</div>
          </div>
          <div class="w-col w-col-2 w-col-small-2 w-col-tiny-2">
            <div class="text-block-32">12</div>
          </div>
          <div class="w-col w-col-2 w-col-small-2 w-col-tiny-2">
            <div class="text-block-32">13</div>
          </div>
        </div>
      </div> -->
    <!-- </div> -->
</div>