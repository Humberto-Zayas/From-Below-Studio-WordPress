<?php
/**
 * My Account page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/my-account.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
;?>
<div style="padding-top: 50px;">
	<?php wc_print_notices();

	/**
	 * My Account navigation.
	 * @since 2.6.0
	 */
	?>
	<div class="fbs-container"> 
		<div class="row w-row">
        <div class="column-32 w-col w-col-8">
          <div class="div-block-27-copy-copy w-clearfix">
            	<?php
						/**
						 * My Account content.
						 * @since 2.6.0
						 */
						do_action( 'woocommerce_account_content' );
					?>
              <!-- <h1 class="heading-13-copy">WackRapper420</h1> -->
              <!-- <h1 class="heading-13-copy-copy">Firstname Lastname</h1> -->
              <!-- <h1 class="heading-13-copy-copy">WackRapper420@gmail.com</h1> -->
              
              	
          	  
            
          </div>
        </div>
        <div class="column-33 w-col w-col-4">
          <div class="dashboard-menu-bg">
          	<?php do_action( 'woocommerce_account_navigation' ); ?>
            <!-- <ul class="dashboard-menu-container w-list-unstyled">
              <li class="list-item-2-copy"><a class="link-16">Dashboard</a></li>
              <li class="list-item-2-copy"><span class="link-16">Orders</span></li>
              <li class="list-item-2-copy">Downloads</li>
              <li class="list-item-2-copy">Addresses</li>
              <li class="list-item-2-copy">Account Details</li>
              <li class="list-item-2-copy">Bookings</li>
              <li class="list-item-2-copy-copy">Logout</li>
            </ul> -->
          </div>
        </div>
      </div>
	



				<?php //do_action( 'woocommerce_account_navigation' ); ?>

				<!-- <div class="woocommerce-MyAccount-content">
					<?php
						/**
						 * My Account content.
						 * @since 2.6.0
						 */
						//do_action( 'woocommerce_account_content' );
					?>
				</div> -->
			
	</div>
</div>


